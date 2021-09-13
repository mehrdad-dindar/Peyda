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
        $wallet = Wallet::where('user_id', "=", auth()->user()->id)->first();
        $phone_model = $mobilewarranty->phone_model->name;
        /*dd($mobilewarranty->phone_model->name);*/
        /*$mobilewarranty = Mobile_warranty::where('owner_id', "=", auth()->user()->id)->orderBy('updated_at', 'desc')->first();*/
        /*$price_range = Commitment_ceiling::find($cart_detail->price_range)->price;*/
        /*$phone_brand = Phone_brand::find($cart_detail->phone_brand_id)->name;*/
        $fire_addition_price = 0;
        if ($mobilewarranty->addition_fire_commitment_id != 0) {
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

                $wallet_history = new Wallet_history();
                $wallet_history->user_id = $user->id;
                $wallet_history->transaction_id = $transaction->id;
                $wallet_history->title = 'خرید فراگارانتی ' . $phone_model;
                $wallet_history->value = Crypt::encryptString(0 - $amount);
                $wallet_history->status = Transaction::STATUS_PENDING;
                $wallet_history->save();
                $mobilewarranty->status = 5;
                $mobilewarranty->save();
                return $payment->pay()->render();
            } catch (PurchaseFailedException | Exception | SoapFault $e) {
                $transaction->transaction_result = $e;
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->save();

                $mobilewarranty->status = 8;
                $mobilewarranty->save();

                $wallet = Wallet::where('user_id', "=", auth()->id())->first();
                return view('profile.bimeh_all')->with([
                    'status' => 'failed',
                    'wallet' => $wallet,
                    'warranties' => $this->getWarranties(),
                ]);
            }
        } else {
            $msg = "موجودی کیف پول کافی نیست";

            $mobilewarranty->status = 3;
            $mobilewarranty->save();
            if ($invoice->getAmount() > Crypt::decryptString($wallet->value)) {
                return view('profile.bimeh_all')->with([
                    'status' => 'failed',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'warranties' => $this->getWarranties(),
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
                $wallet_history->title = 'خرید فراگارانتی ' . $phone_model;
                $wallet_history->value = Crypt::encryptString(0 - $amount);
                $wallet_history->status = Transaction::STATUS_SUCCESS;
                $wallet_history->save();

                $mobilewarranty->status = 5;
                $mobilewarranty->save();

                $user->wallet()->update([
                    'value' => Crypt::encryptString((int)Crypt::decryptString($wallet->value) - (int)$amount),
                ]);

                $wallet = Wallet::where('user_id', "=", auth()->user()->id)->first();
                $msg = "سفارش شما با موفقیت ثبت شد.";
                return view('profile.bimeh_all')->with([
                    'status' => 'success',
                    'wallet' => $wallet,
                    'message' => $msg,
                    'warranties' => $this->getWarranties(),
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
            'warranties' => $this->getWarranties(),
            'wallet' => $wallet
        ]);
    }

    public function result(Request $request, $invoice_id)
    {
        $transaction = Transaction::where('peyment_id', $request->peyment_id)->first();
        $mobilewarranty = Mobile_warranty::where('owner_id', "=", auth()->user()->id)->orderBy('updated_at', 'desc')->first();
        if ($request->missing('peyment_id')) {
            $this->status_failed();
        }

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
        $wallet_history = Wallet_history::where('user_id', '=', auth()->id())->orderBy('created_at', 'desc')->first();
        try {
            $cart_detail = Mobile_warranty::find($invoice_id);
            $price_range = Commitment_ceiling::find($cart_detail->commitment_ceiling_id)->price;

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
            $mobilewarranty->status = 5;
            $mobilewarranty->save();


            return view('profile.bimeh_all')
                ->with([
                    'message' => "عملیات پرداخت با موفقیت انجام شد.",
                    'code' => 100,
                    'user' => auth()->user(),
                    'wallet' => $wallet,
                    'warranties' => $this->getWarranties(),
                ]);
        } catch (Exception | InvalidPaymentException $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];
                $transaction->save();
                $mobilewarranty->status = 8;
                $mobilewarranty->save();

                /*
                 * For manage error use this code ****
                 * */
                $wallet_history->status = Transaction::STATUS_FAILED;
                $wallet_history->update();
                return view('profile.bimeh_all')
                    ->with([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode(),
                        'user' => auth()->user(),
                        'wallet' => $wallet,
                        'warranties' => $this->getWarranties(),
                    ]);
            }
        }

    }
}
