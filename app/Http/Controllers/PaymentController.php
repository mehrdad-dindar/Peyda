<?php

namespace App\Http\Controllers;

use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\Mobile_warranty;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

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
        }catch (PurchaseFailedException|\Exception|\SoapFault $e){
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
        $receipt->dd();
    }
}
