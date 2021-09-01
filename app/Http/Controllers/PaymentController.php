<?php

namespace App\Http\Controllers;

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

    public function purchase($invoice_id)
    {
        try {
            $cart_detail = Mobile_warranty::find($invoice_id);
            $price_range = Commitment_ceiling::find($cart_detail->price_range)->price;
            $phone_brand = Phone_brand::find($cart_detail->phone_brand_id)->name;
            $phone_model = Phone_model::find($cart_detail->phone_model_id)->name;


            $fire_addition_price = 0;
            if ($cart_detail->addition_fire_commitment_id != 0) {
                $fire_addition_price = Fire_commitment_ceiling::find($cart_detail->addition_fire_commitment_id)->price;
            }
            $amount = $fire_addition_price + $price_range;
            /*dd($amount);*/
            $invoice = new Invoice();
            $invoice->amount($amount);

            $user = Auth::user();
            $paymentId = md5(uniqid());
            $transaction = $user->transactions()->create([
                'user_id' => $user->id,
                'mobile_warranty_id' => $invoice_id,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice,
                'peyment_id' => $paymentId,
            ]);

            $callbackUrl = route('purchase.result', [$invoice_id, 'peyment_id' => $paymentId]);
            $payment = Payment::callbackUrl($callbackUrl);
            $payment->config('description', 'خرید فراگارانتی '.$phone_brand."/".$phone_model);

            $payment->purchase($invoice, function ($driver, $transactionid) use ($transaction) {
                $transaction->transaction_id = $transactionid;
                $transaction->save();
            });
            return $payment->pay()->render();
        }catch (PurchaseFailedException|Exception|SoapFault $e){
            $transaction->transaction_result = $e;
            $transaction->status = Transaction::STATUS_FAILED;
            $transaction->save();
        }
    }

    public function result(Request $request, $invoice_id)
    {
        if ($request->missing('peyment_id')){
            return view('purchase_result')->with('status','failed');
        }

        $transaction = Transaction::where('peyment_id' , $request->peyment_id)->first();
        if (empty($transaction)){
            return view('purchase_result')->with('status','failed');
        }

        if ($transaction->user_id <> Auth::id()){
            return view('purchase_result')->with('status','failed');
        }

        if ($transaction->mobile_warranty_id <> $invoice_id){
            return view('purchase_result')->with('status','failed');
        }
        if ($transaction->status <> Transaction::STATUS_PENDING){
            return view('purchase_result')->with('status','failed');
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
        }catch (Exception|InvalidPaymentException $e){
            if ($e->getCode() < 0){
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result =[
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
