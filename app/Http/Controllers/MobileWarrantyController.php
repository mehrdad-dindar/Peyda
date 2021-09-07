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
            ->with('notification', self::getNotification(auth()->user()->id))
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
        $warranties=Mobile_warranty::join('commitment_ceilings as cc', 'mobile_warranties.price_range', '=', 'cc.id')
                                    ->join('status as s','mobile_warranties.status','=','s.id')
                                    ->where('owner_id','=',auth()->user()->id)
                                    ->get(['cc.price as cc_price','mobile_warranties.*','s.id as s_id','s.text as s_name']);

        return view('profile.bimeh_all')->with(['warranties'=> $warranties,
                                                'notification'=> self::getNotification(auth()->user()->id),
                                                'user'=>auth()->user()]);
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
        $phone_model_id = '';
        /*dd($request);*/
        if ($request['warranty_type'] == 2){
            if ($request['new_phone_model'] == null){

                $this->bimeh_add('لطفا فیلد مدل گوشی را انتخاب کنید.');

            }else{
                $phone_model_id = $request['new_phone_model'];
            }
        }
        if ($request['price_range'] == null){

            return $this->bimeh_add('لطفا فیلد بازه قیمت را انتخاب کنید.');

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


        if ($request['warranty_type'] == 1) {
            $phone_brand_id = $request['my_phone_brand'];
            $phone_model_id = $request['my_phone_model'];
        } else {
            $phone_brand_id = $request['new_phone_brand'];
            $phone_model_id = $request['new_phone_model'];
        }
        if($request['warranty_type']!=null && $request['price_range']!=null) {
            $data = Mobile_warranty::create([
                'owner_id' => $request['owner_id'],
                'phone_model_id' => $phone_model_id,
                'expiry_date' => null,
                'activation_code' => $activation_code,
                'activation_date' => null,
                'transfer_code' => null,
                'price_range' => $request['price_range'],
                'fire_gift' => true,
                'status' => 1,
                'addition_fire_commitment_id' => $request['fire_addition_price'],
            ]);
            $data->save();
            return $this->cart($request, $data->id);
        }else{
            $this->bimeh_add('لطفا همه فیلدها را با دقت پرکنید.');
        }
    }

    public function cart(Request $request,$id)
    {
        $invoice_details = $request;
        $phone_brands = Phone_brand::all();
        $phone_models = Phone_model::all();
        $fire_addition_prices = Fire_commitment_ceiling::all();
        //$phone_model = "";
        $fire_addition_price = "0 تومان";
            //$phone_brand = Phone_brand::find($invoice_details['new_phone_brand'])->name;
        $phone_model = Phone_model::join('phone_brands as pb', 'phone_models.brand_id', '=', 'pb.id')
                                    ->where('pb.id','=',$invoice_details['new_phone_brand'])
                                    ->first(['phone_models.name as pm_name','phone_models.id as pm_id', 'pb.name as pb_name', 'pb.id as pb_id']);

        if ($invoice_details['fire_addition_price'] != 0) {
            $fire_addition_price = Fire_commitment_ceiling::find($invoice_details['fire_addition_price'])->price;
        }
        $price_range = Commitment_ceiling::find($invoice_details['price_range'])->price;

        return view('profile.cart')
            ->with('user', auth()->user())
            ->with('notification', self::getNotification(auth()->user()->id))
            ->with('invoice_details', $invoice_details)
            ->with('phone_model', $phone_model)
            ->with('fire_addition_price', $fire_addition_price)
            ->with('price_range', $price_range)
            ->with('invoice_id',$id);
    }
}
