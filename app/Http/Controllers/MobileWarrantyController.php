<?php

namespace App\Http\Controllers;

use App\Casts\EncryptCast;
use App\Http\Requests\MobileWarrantyRequest;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\Mobile_warranty;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\Wallet;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\UserMobileWarranties;

class MobileWarrantyController extends Controller
{

    use UserMobileWarranties;

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function bimeh_add($error = '')
    {
        $myPhone = Phone_model::join('phone_brands as pb', 'phone_models.phone_brand_id', '=', 'pb.id')
            ->join('users as u', 'phone_models.id', '=', 'u.phone_model_id')
            ->first(['pb.name as pb_name', 'phone_models.name as pm_name',
                'phone_models.id as pm_id', 'pb.id as pb_id']);
        $crypt = new EncryptCast();
        $brands = Phone_brand::all();
        $phone_brand_first = Phone_brand::query()->first();
        $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $phone_brand_first->id)->get();
        $commitment_ceilings = Commitment_ceiling::all();
        $fire_commitment_ceilings = Fire_commitment_ceiling::all();
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.bimeh_add')
            ->with('myPhone', $myPhone)
            ->with('brands', $brands)
            ->with('models_first', $phone_model_first)
            ->with('commitment_ceilings', $commitment_ceilings)
            ->with('fire_commitment_ceilings', $fire_commitment_ceilings)
            ->with('wallet', $wallet)
            ->with('error', $error)
            ->with('crypt', $crypt);
        //return $phones;
    }

    public function bimeh_all()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $warranties = Mobile_warranty::where('owner_id', auth()->id())->orderBy('updated_at', 'desc')->get();
        $crypt = new EncryptCast();
        return view('profile.bimeh_all')->with([
            'warranties' => $warranties,
            'wallet' => $wallet,
            'crypt' => $crypt
        ]);
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
        /*ddd($request->toArray());*/
        $phone_model_id = '';
        /*dd($request);*/
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        if ($request['warranty_type'] == 2) {
            if ($request['new_phone_model'] == null) {

                $this->bimeh_add('لطفا فیلد مدل گوشی را انتخاب کنید.');

            } else {
                $phone_model_id = $request['new_phone_model'];
            }
        }
        if ($request['price_range'] == null) {

            return $this->bimeh_add('لطفا فیلد بازه قیمت را انتخاب کنید.');

        }


        $activation_code = "P_" . self::RandomString() . time();
        /*$expiry_date = date('Y-m-d H:i:s',strtotime('+1 years'));*/


        if ($request['warranty_type'] == 1) {
            $phone_model_id = $request['my_phone_model'];
        } else {
            $phone_model_id = $request['new_phone_model'];
        }
        if ($request['warranty_type'] != null && $request['price_range'] != null) {
            $data = Mobile_warranty::create([
                'owner_id' => $request['owner_id'],
                'phone_model_id' => $phone_model_id,
                'expiry_date' => null,
                'activation_code' => $activation_code,
                'activation_date' => null,
                'transfer_code' => null,
                'commitment_ceiling_id' => $request['price_range'],
                'fire_gift' => true,
                'status_id' => 3,
                'addition_fire_commitment_id' => $request['fire_addition_price'],
            ]);
            $data->save();
            return $this->cart();
        } else {
            $this->bimeh_add('لطفا همه فیلدها را با دقت پرکنید.');
        }
    }

    public function cart($id = null)
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        if ($id == null) {
            $invoice = Mobile_warranty::where('owner_id', auth()->user()->id)->orderBy('updated_at', 'desc')->first();
        }else{
            $invoice = Mobile_warranty::find($id);
        }
        $crypt = new EncryptCast();
        return view('profile.cart')
            ->with([
                'invoice' => $invoice,
                'wallet' => $wallet,
                'crypt' => $crypt
            ]);
    }
}
