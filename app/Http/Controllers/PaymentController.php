<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Wallet_history;
use Crypt;
use Exception;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\Mobile_warranty;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use SoapFault;
use App\Traits\UserMobileWarranties;

class PaymentController extends Controller
{
    use UserMobileWarranties;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function purchase($invoice_id, Request $request)
    {
        $user = Auth::user();
        $mobilewarranty = Mobile_warranty::find($invoice_id);
        $phone_model = $mobilewarranty->phone_model->name;
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $fire_addition_price = 0;
        if ($mobilewarranty->addition_fire_commitment_id != null) {
            $fire_addition_price = $mobilewarranty->Fire_commitment_ceiling->price;
        }
        $amount = (int)$fire_addition_price + (int)$mobilewarranty->Commitment_ceiling->price;
        $invoice = new Invoice();
        $invoice->amount($amount);
        $paymentId = md5(uniqid());

        if ($request->pay_methode == 1) {
            try {
                $transaction = $user->transactions()->create([
                    'user_id' => $user->id,
                    'mobile_warranty_id' => $invoice_id,
                    'paid' => $invoice->getAmount(),
                    'invoice_details' => $invoice,
                    'peyment_id' => $paymentId,
                ]);

                $callbackUrl = route('purchase.result', [$invoice_id, 'peyment_id' => $paymentId]);
                $payment = Payment::callbackUrl($callbackUrl);
                $payment->config('description', 'خرید فراگارانتی ' . $phone_model);

                $payment->purchase($invoice, function ($driver, $transactionid) use ($transaction) {
                    $transaction->transaction_id = $transactionid;
                    $transaction->save();
                });

                $this->updateWalletHistory($user,$transaction,$phone_model,$amount,$mobilewarranty);
                $warranties = Mobile_warranty::where('owner_id',auth()->id())->orderBy('created_at', 'desc')->get();

                return $payment->pay()->render();
            } catch (PurchaseFailedException | Exception | SoapFault $e) {
                $transaction->transaction_result = $e;
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->save();

                $mobilewarranty->status_id = 8;
                $mobilewarranty->save();

                /*return redirect()->route('bimeh_all')->with([
                    'status' => 'failed',
                    'wallet' => $wallet,
                    'warranties' => $warranties,
                ]);*/
                return view('')->with([
                    'wallet' => $wallet,
                    'status' => 'failed',

                ]);
            }
        } else {
            $msg = "موجودی کیف پول کافی نیست";
            $mobilewarranty->status_id = 3;
            $mobilewarranty->save();

            if ($invoice->getAmount() > Crypt::decryptString($wallet->value)) {
                $warranties = Mobile_warranty::where('owner_id',auth()->id())->orderBy('created_at', 'desc')->get();

                return redirect()->route('bimeh_all')->with([
                    'status' => 'failed',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'warranties' => $warranties,
                    'code' => -41,
                ]);
            } else {
                $transaction = $user->transactions()->create([
                    'user_id' => $user->id,
                    'mobile_warranty_id' => $invoice_id,
                    'paid' => $invoice->getAmount(),
                    'invoice_details' => $invoice,
                    'peyment_id' => $paymentId,
                ]);

                $mobilewarranty->status_id = 5;
                $mobilewarranty->save();

                $this->updateWalletHistory($user,$transaction,$phone_model,$amount,$mobilewarranty);
                $warranties = Mobile_warranty::where('owner_id',auth()->id())->orderBy('created_at', 'desc')->get();

                $new_wallet_val = Crypt::decryptString($wallet->value)-$amount;
                $user->wallet()->update([
                    'value' => Crypt::encryptString($new_wallet_val),
                /*Crypt::encryptString((int)Crypt::decryptString($wallet->value) - (int)$amount),*/
                ]);

                $msg = "سفارش شما با موفقیت ثبت شد.";
                return redirect()->route('bimeh_all')->with([
                    'status' => 'success',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'warranties' => $warranties,
                    'code' => 100,
                ]);
            }
        }
    }

    public function updateWalletHistory(User $user,Transaction $transaction,$phone_model,$amount,Mobile_warranty $mobilewarranty)
    {

        $wallet_history = new Wallet_history();
        $wallet_history->user_id = $user->id;
        $wallet_history->transaction_id = $transaction->id;
        $wallet_history->title = 'خرید فراگارانتی ' . $phone_model;
        $wallet_history->value = Crypt::encryptString(0-$amount);
        $wallet_history->status = Transaction::STATUS_SUCCESS;
        $transaction->status = Transaction::STATUS_SUCCESS;
        $mobilewarranty->status_id = 5;
        $transaction->save();
        $wallet_history->save();
        $mobilewarranty->save();
    }

    public function status_failed()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $warranties = Mobile_warranty::where('owner_id',auth()->id())->orderBy('updated_at', 'desc')->get();
        return view('profile.bimeh_all')->with([
            'status' => 'failed',
            'warranties' => $warranties,
            'wallet' => $wallet,
        ]);
    }

    public function result(Request $request, $invoice_id)
    {
        $transaction = Transaction::where('peyment_id', $request->peyment_id)->first();
        $mobilewarranty = Mobile_warranty::find($invoice_id);
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $wallet_history = Wallet_history::where('user_id', '=', auth()->id())->orderBy('created_at', 'desc')->first();
        $warranties = Mobile_warranty::where('owner_id',auth()->id())->orderBy('created_at', 'desc')->get();

        if ($request->missing('peyment_id')) {
            $this->status_failed();
        }

        if (empty($transaction)) {
            $this->status_failed();
        }

        if ($transaction->user_id <> Auth::id()) {
            $this->status_failed();
        }

        if ($transaction->mobile_warranty_id <> $mobilewarranty->id) {
            $this->status_failed();
        }
        if ($transaction->status <> Transaction::STATUS_PENDING) {
            $this->status_failed();
        }

        try {
            $price_range = Commitment_ceiling::find($mobilewarranty->commitment_ceiling_id)->price;

            $fire_addition_price = 0;
            if ($mobilewarranty->addition_fire_commitment_id != 0) {
                $fire_addition_price = Fire_commitment_ceiling::find($mobilewarranty->addition_fire_commitment_id)->price;
            }
            $amount = $fire_addition_price + $price_range;
            $receipt = Payment::amount($amount)
                ->transactionId($request->Authority)
                ->verify();

            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();
            $mobilewarranty->status_id = 5;
            $mobilewarranty->save();


            /*return redirect()->route('bimeh_all')->with([
                    'message' => "عملیات پرداخت با موفقیت انجام شد.",
                    'code' => 100,
                    'user' => auth()->user(),
                    'wallet' => $wallet,
                    'warranties' => $warranties,
                ]);*/
            /*dd($transaction->toArray());*/
            return view('profile.warranty.peyment_result')->with([
                'wallet' => $wallet,
                'status' => 'success',
                'transaction'=>$transaction,

            ]);
        } catch (Exception | InvalidPaymentException $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];
                $transaction->save();
                $mobilewarranty->status_id = 8;
                $mobilewarranty->save();

                /*
                 * For manage error use this code ****
                 * */
                $wallet_history->status = Transaction::STATUS_FAILED;
                $wallet_history->update();
                return view('profile.warranty.peyment_result')->with([
                    'wallet' => $wallet,
                    'status' => 'failed',
                    'error'  => $e
                ]);
            }
        }

    }
}
