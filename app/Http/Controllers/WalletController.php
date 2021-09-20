<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WalletHistoryController;
use App\Models\Wallet;
use App\Models\Wallet_history;
use App\Models\WalletTransaction;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $crypt=Crypt::encryptString($wallet->price);
        $user_id = Auth::user()->id;
        $history = (new WalletHistoryController())->history($user_id);
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.wallet')->with([
            'user' => auth()->user(),
            'history' => $history,
            'wallet' => $wallet,
            'crypt'=>$crypt
        ]);
    }

    public function purchase(Request $request)
    {
        try {
            $wallethistory = new Wallet_history();
            $wallethistory->user_id = Auth::user()->id;
            $wallethistory->value = Crypt::encryptString($request->price);
            $wallethistory->title = $request['title'];
            $wallethistory->save();

            $title = $request->title;
            $price = (int)$request->price;
            $user = Auth::user();
            $history = (new WalletHistoryController())->history($user->id);

            $invoice = new Invoice();
            $invoice->amount($price);

            $paymentId = md5(uniqid());
            $transaction = $user->wallettransactions()->create([
                'user_id' => $user->id,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice,
                'peyment_id' => $paymentId,
            ]);

            $callbackUrl = route('walletPurchase.result', [$user->id, 'peyment_id' => $paymentId,]);
            $payment = Payment::callbackUrl($callbackUrl);

            $payment->purchase($invoice, function ($driver, $transactionid) use ($transaction) {
                $transaction->transaction_id = $transactionid;
                $transaction->save();
            });
            /*dd($payment->pay()->render());*/
            return $payment->pay()->render();
        } catch (PurchaseFailedException | Exception | \SoapFault $e) {
            $transaction->transaction_result = $e;
            $transaction->status = WalletTransaction::STATUS_FAILED;
            $transaction->save();


            return view('profile.wallet')->with([
                'user' => auth()->user(),
                'history' => $history,
                'status' => 'failed'
            ]);
        }
    }

    public function status_failed()
    {
        $user_id = Auth::user()->id;
        $history = (new WalletHistoryController())->history($user_id);
        return view('profile.wallet')->with([
            'user' => auth()->user(),
            'history' => $history,
            'status' => 'failed'
        ]);
    }

    public function result(Request $request)
    {
        $user = Auth::user();
        $history = (new WalletHistoryController())->history($user->id);
        $wallet_history = Wallet_history::where('user_id', '=', $user->id)->orderBy('updated_at', 'desc')->first();


        if ($request->missing('peyment_id')) {
            $this->status_failed();
        }

        $transaction = WalletTransaction::where('peyment_id', $request->peyment_id)->first();

        if (empty($transaction)) {
            $this->status_failed();
        }

        if ($transaction->user_id <> Auth::id()) {
            $this->status_failed();
        }

        if ($transaction->status <> WalletTransaction::STATUS_PENDING) {
            $this->status_failed();
        }

        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        try {
            $receipt = Payment::amount((int)Crypt::decryptString($wallet_history->value))
                ->transactionId($request->Authority)
                ->verify();
            $transaction->transaction_result = $receipt;
            $transaction->status = WalletTransaction::STATUS_SUCCESS;
            $transaction->save();

            if ($wallet->value != "0") {
                $new_wallet_val = (int)Crypt::decryptString($wallet->value) + (int)Crypt::decryptString($wallet_history->value);
            } else {
                $new_wallet_val = (int)Crypt::decryptString($wallet_history->value);
            }

            $new_wallet_val = Crypt::encryptString($new_wallet_val);
            Wallet::update([
                'value' => Crypt::encryptString($new_wallet_val),
            ]);
            Wallet_history::update([
                'transaction_id' => $transaction->id,
                'status' => true
            ]);


            return view('profile.wallet')
                ->with([
                    'message' => "عملیات پرداخت با موفقیت انجام شد.",
                    'code' => 100,
                    'user' => auth()->user(),
                    'history' => $history,
                    'wallet' => $wallet,
                ]);
        } catch (Exception | \SoapFault | InvalidPaymentException $e) {

            if ($e->getCode() < 0) {
                $transaction->status = WalletTransaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];
                $transaction->save();

                $wallet_history->transaction_id = $transaction->id;
                $wallet_history->update();

                /*
                 * For manage error use this code ****
                 * */
                return view('profile.wallet')
                    ->with([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode(),
                        'user' => auth()->user(),
                        'history' => $history,
                        'wallet' => $wallet,
                    ]);
            }
        }

    }
}
