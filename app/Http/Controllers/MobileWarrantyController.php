<?php

namespace App\Http\Controllers;

use App\Http\Requests\MobileWarrantyRequest;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\Mobile_warranty;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobileWarrantyController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function bimeh_add($error='')
    {
        $myPhone = Phone_model::join('phone_brands as pb','phone_models.brand_id','=','pb.id')
                                ->join('users as u', 'phone_models.id', '=', 'u.phone_model_id')
                                ->first(['pb.name as pb_name','phone_models.name as pm_name',
                                    'phone_models.id as pm_id','pb.id as pb_id']);

        $brands=Phone_brand::all();
        $phone_brand_first = Phone_brand::query()->first();
        $phone_model_first = Phone_model::query()->where('brand_id', '=', $phone_brand_first->id)->get();
        $commitment_ceilings = Commitment_ceiling::all();
        $fire_commitment_ceilings = Fire_commitment_ceiling::all();
        return view('profile.bimeh_add')
            ->with('user', auth()->user())
            ->with('myPhone', $myPhone)
            ->with('brands',$brands)
            ->with('models_first',$phone_model_first)
            ->with('commitment_ceilings', $commitment_ceilings)
            ->with('fire_commitment_ceilings', $fire_commitment_ceilings)
            ->with('error',$error);
        //return $phones;
    }

    public function bimeh_all()
    {
        return view('profile.bimeh_all')->with('user', auth()->user());
    }
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'imei1' => ['required', 'digits:15'],
            'imei2' => ['digits:15'],
            'price_range' => ['required'],
        ]);
    }

    public function save(Request $request)
    {
        /*dd($request);*/
        if ($request['warranty_type'] == 2){
            if ($request['new_phone_brand'] == null || $request['new_phone_model'] == null){

                $this->bimeh_add('new_phone_error');

            }
        }
        if ($request['price_range'] == null){

            $this->bimeh_add('price_range');

        }
        /*if ($request['imei1'] == null || strlen($request['imei1'])!=15){
            $phone_brands = Phone_brand::all();
            $phone_models = Phone_model::all();
            $commitment_ceilings = Commitment_ceiling::all();
            $fire_commitment_ceilings = Fire_commitment_ceiling::all();

            return view('profile.bimeh_add')
                ->with('imei_error','imei')
                ->with('user', auth()->user())
                ->with('phone_brands', $phone_brands)
                ->with('phone_models', $phone_models)
                ->with('commitment_ceilings', $commitment_ceilings)
                ->with('fire_commitment_ceilings', $fire_commitment_ceilings);
        }*/


        function RandomString()
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 10; $i++) {
                $randstring = $characters[rand(0, strlen($characters)-1)];
            }
            return $randstring;
        }
        $activation_code = "P_".RandomString().time();
        /*$expiry_date = date('Y-m-d H:i:s',strtotime('+1 years'));*/


        $phone_brand_id = '';
        $phone_model_id = '';
        if ($request['warranty_type'] == 1) {
            $phone_brand_id = $request['my_phone_brand'];
            $phone_model_id = $request['my_phone_model'];
        } else {
            $phone_brand_id = $request['new_phone_brand'];
            $phone_model_id = $request['new_phone_model'];
        }
        $data = Mobile_warranty::create([
            'owner_id' => $request['owner_id'],
            'phone_model_id' => $phone_model_id,
            'expiry_date'=>null,
            'activation_code' => $activation_code,
            'activation_date' => null,
            'transfer_code'=>null,
            'price_range'=>$request['price_range'],
            'fire_gift'=>true,
            'status'=>false,
            'addition_fire_commitment_id'=>$request['fire_addition_price'],
        ]);
        $data->save();
        return $this->cart($request,$data->id);
    }

    public function cart(Request $request,$id)
    {
        $invoice_details = $request;
        $phone_brands = Phone_brand::all();
        $phone_models = Phone_model::all();
        $fire_addition_prices = Fire_commitment_ceiling::all();
        $phone_brand = "";
        $phone_model = "";
        $fire_addition_price = "0 تومان";
        if ($invoice_details['warranty_type'] == 2) {
            $phone_brand = Phone_brand::find($invoice_details['new_phone_brand'])->name;
            $phone_model = Phone_model::find($invoice_details['new_phone_model'])->name;
        }
        if ($invoice_details['fire_addition_price'] != 0) {
            $fire_addition_price = Fire_commitment_ceiling::find($invoice_details['fire_addition_price'])->price;
        }
        $price_range = Commitment_ceiling::find($invoice_details['price_range'])->price;

        return view('profile.cart')
            ->with('user', auth()->user())
            ->with('invoice_details', $invoice_details)
            ->with('phone_brand', $phone_brand)
            ->with('phone_model', $phone_model)
            ->with('fire_addition_price', $fire_addition_price)
            ->with('price_range', $price_range)
            ->with('invoice_id',$id);
    }
}
