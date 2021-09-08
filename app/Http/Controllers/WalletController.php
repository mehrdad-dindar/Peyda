<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Http\Controllers\WalletHistoryController;
use App\Models\Wallet_history;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use SoapFault;

class WalletController extends Controller
{
    public function index()
    {
        $history = (new WalletHistoryController())->history(1);
        return view('profile.wallet')->with([
            'user' => auth()->user(),
            'history' => $history,
        ]);
    }

    public function increase(Request $request)
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $wallet_val = $wallet->value;
        $new_wallet_val = 0;
        if ($wallet_val != "0") {
            $new_wallet_val = (int)Crypt::decryptString($wallet->value) + (int)$request['price'];
        } else {
            $new_wallet_val = (int)$request['price'];
        }

        $new_wallet_val = Crypt::encryptString($new_wallet_val);
        /*$wallet->value = Crypt::encryptString($new_wallet_val);*/
        Wallet::update([
            'value' => Crypt::encryptString($new_wallet_val),
            'title' => $request['title'],
        ]);
    }

    public function purchase(Request $request, $user_id)
    {
        if ($user_id != Auth::id())
            return redirect()->route('wallet');
        try {
            $title = $request->title;
            $price = (int)$request->price;
            $user = Auth::user();

            $invoice = new Invoice();
            $invoice->amount($price);

            $paymentId = md5(uniqid());
            $transaction = $user->wallet_history()->create([
                'user_id' => $user->id,
                'title' => $title,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice,
                'peyment_id' => $paymentId,
            ]);

            $callbackUrl = route('walletPurchase.result', [$user_id, 'peyment_id' => $paymentId]);
            $payment = Wallet_history::callbackUrl($callbackUrl);

            $payment->purchase($invoice, function ($driver, $transactionid) use ($transaction) {
                $transaction->transaction_id = $transactionid;
                $transaction->save();
            });
            return $payment->pay()->render();
        } catch (PurchaseFailedException | Exception | SoapFault $e) {
            $transaction->transaction_result = $e;
            $transaction->status = Transaction::STATUS_FAILED;
            $transaction->save();
        }
    }

    public function result(Request $request, $invoice_id)
    {
        if ($request->missing('peyment_id')) {
            return view('purchase_result')->with('status', 'failed');
        }

        $transaction = Transaction::where('peyment_id', $request->peyment_id)->first();
        if (empty($transaction)) {
            return view('purchase_result')->with('status', 'failed');
        }

        if ($transaction->user_id <> Auth::id()) {
            return view('purchase_result')->with('status', 'failed');
        }

        if ($transaction->mobile_warranty_id <> $invoice_id) {
            return view('purchase_result')->with('status', 'failed');
        }
        if ($transaction->status <> Transaction::STATUS_PENDING) {
            return view('purchase_result')->with('status', 'failed');
        }

        try {
            $cart_detail = Mobile_warranty::find($invoice_id);
            $price_range = Commitment_ceiling::find($cart_detail->price_range)->price;

            $fire_addition_price = 0;
            if ($cart_detail->addition_fire_commitment_id != 0) {
                $fire_addition_price = Fire_commitment_ceiling::find($cart_detail->addition_fire_commitment_id)->price;
            }
            $amount = $fire_addition_price + $price_range;
            $receipt = Payment::amount($amount)
                ->transactionId($request->Authority)
                ->verify();

            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();

            return view('purchase_result')
                ->with([
                    'status' => 1,
                    'reference_id' => $receipt->getRefrenceId(),
                    'invoice_id' => $invoice_id
                ]);
        } catch (Exception | InvalidPaymentException $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];
                $transaction->save();

                /*
                 * For manage error use this code ****
                 * */
                /*return view('purchase_result')
                    ->with([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode()
                    ]);*/
            }
        }

    }
}
