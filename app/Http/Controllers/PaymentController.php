<?php

namespace App\Http\Controllers;

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

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function purchase($invoice_id, Request $request)
    {
        $user = Auth::user();
        $wallet = Wallet::where('user_id', "=", auth()->user()->id)->first();
        $cart_detail = Mobile_warranty::find($invoice_id);
        $price_range = Commitment_ceiling::find($cart_detail->price_range)->price;
        $fire_addition_price = 0;
        if ($cart_detail->addition_fire_commitment_id != 0) {
            $fire_addition_price = Fire_commitment_ceiling::find($cart_detail->addition_fire_commitment_id)->price;
        }
        $amount = $fire_addition_price + $price_range;
        $invoice = new Invoice();
        $invoice->amount($amount);
        $paymentId = md5(uniqid());
        $phone_brand = Phone_brand::find($cart_detail->phone_brand_id)->name;
        $phone_model = Phone_model::find($cart_detail->phone_model_id)->name;

        if ($request->pay_methode == 1) {
            try {
                $wallet_history = Wallet_history::where('user_id', '=', $user->id)->orderBy('created_at', 'desc')->first();

                /*dd($amount);*/

                $transaction = $user->transactions()->create([
                    'user_id' => $user->id,
                    'mobile_warranty_id' => $invoice_id,
                    'paid' => $invoice->getAmount(),
                    'invoice_details' => $invoice,
                    'peyment_id' => $paymentId,
                ]);

                $callbackUrl = route('purchase.result', [$invoice_id, 'peyment_id' => $paymentId]);
                $payment = Payment::callbackUrl($callbackUrl);
                $payment->config('description', 'خرید فراگارانتی ' . $phone_brand . "/" . $phone_model);

                $payment->purchase($invoice, function ($driver, $transactionid) use ($transaction) {
                    $transaction->transaction_id = $transactionid;
                    $transaction->save();
                });
                $wallet_history->status = Transaction::STATUS_SUCCESS;
                $wallet_history->update();
                return $payment->pay()->render();
            } catch (PurchaseFailedException | Exception | SoapFault $e) {
                $transaction->transaction_result = $e;
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->save();

                $wallet = Wallet::where('user_id', "=", auth()->id())->first();
                return view('profile.bimeh_all')->with([
                    'user' => auth()->user(),
                    'status' => 'failed',
                    'wallet' => $wallet,
                ]);
            }
        } else {
            $msg = "موجودی کیف پول کافی نیست";
            if ($invoice->getAmount() > Crypt::decryptString($wallet->value)) {
                return view('profile.bimeh_all')->with([
                    'user' => auth()->user(),
                    'status' => 'failed',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'code' => -41
                ]);
            } else {
                $transaction = $user->transactions()->create([
                    'user_id' => $user->id,
                    'mobile_warranty_id' => $invoice_id,
                    'paid' => $invoice->getAmount(),
                    'invoice_details' => $invoice,
                    'peyment_id' => $paymentId,
                ]);

                $wallet_history = new Wallet_history();
                $wallet_history->user_id = $user->id;
                $wallet_history->transaction_id = $transaction->id;
                $wallet_history->title = 'خرید فراگارانتی ' . $phone_brand . "/" . $phone_model;
                $wallet_history->value = Crypt::encryptString(0 - $amount);
                $wallet_history->status = Transaction::STATUS_SUCCESS;
                $wallet_history->save();

                $user->wallet()->update([
                    'value'     =>      Crypt::encryptString((int)Crypt::decryptString($wallet->value) -  (int)$amount),
                ]);

                $wallet = Wallet::where('user_id', "=", auth()->user()->id)->first();
                $msg = "سفارش شما با موفقیت ثبت شد.";
                return view('profile.bimeh_all')->with([
                    'user' => auth()->user(),
                    'status' => 'success',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'code' => 100
                ]);
            }
        }
    }

    public function status_failed()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.bimeh_all')->with([
            'user' => auth()->user(),
            'status' => 'failed',
            'wallet' => $wallet
        ]);
    }

    public function result(Request $request, $invoice_id)
    {
        if ($request->missing('peyment_id')) {
            $this->status_failed();
        }

        $transaction = Transaction::where('peyment_id', $request->peyment_id)->first();
        if (empty($transaction)) {
            $this->status_failed();
        }

        if ($transaction->user_id <> Auth::id()) {
            $this->status_failed();
        }

        if ($transaction->mobile_warranty_id <> $invoice_id) {
            $this->status_failed();
        }
        if ($transaction->status <> Transaction::STATUS_PENDING) {
            $this->status_failed();
        }

        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
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

            return view('profile.bimeh_all')
                ->with([
                    'message' => "عملیات پرداخت با موفقیت انجام شد.",
                    'code' => 100,
                    'user' => auth()->user(),
                    'wallet' => $wallet,
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
                return view('profile.bimeh_all')
                    ->with([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode(),
                        'user' => auth()->user(),
                        'wallet' => $wallet,
                    ]);
            }
        }

    }
}
