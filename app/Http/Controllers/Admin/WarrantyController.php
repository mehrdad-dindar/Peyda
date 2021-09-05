<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\FlashMessage;
use App\Models\Mobile_warranty;
use App\Http\Controllers\Controller;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect;

class WarrantyController extends Controller
{
    public function index()
    {
        $warranties=Mobile_warranty::join('fire_commitment_ceilings as fc', 'mobile_warranties.addition_fire_commitment_id', '=','fc.id')
            ->join('users as u', 'mobile_warranties.owner_id', '=', 'u.id')
            ->join('commitment_ceilings as cc', 'mobile_warranties.price_range', '=', 'cc.id')
            ->join('phone_models as pm', 'mobile_warranties.phone_model_id', '=', 'pm.id')
            ->get(['u.email','u.f_name','u.l_name','pm.name as pm_name','cc.price_range','fc.addition_price','activation_code']);

        /*$warranties = Mobile_warranty::query()
            ->join('commitment_ceilings as cc', 'mobile_warranties.price_range', '=', 'cc.id')
            ->join('users as u', 'owner_id', '=', 'u.id')
            ->join('phone_brands as pb','phone_brand_id','=','pb.id')
            ->get(['u.f_name','u.l_name','cc.price_range','pb.name as pb_name','activation_code']);*/

        return view('dashboard.warranty.all', compact('warranties'));
        //return $warranties;

    }

    public function create()
    {
        $phone_brands = Phone_brand::all();
        $phone_brand_first = Phone_brand::query()->first();
        $phone_model_first = Phone_model::query()->where('brand_id', '=', $phone_brand_first->id)->get();
        $commitment_ceilings = Commitment_ceiling::all();
        $fire_commitment_ceilings = Fire_commitment_ceiling::all();
        $users=User::all();
        return view('dashboard.warranty.add')
            ->with(['user'=> auth()->user(),
                    'users'=>$users,
                    'phone_brands'=> $phone_brands,
                    'phone_models'=> $phone_model_first,
                    'commitment_ceilings'=> $commitment_ceilings,
                    'fire_commitment_ceilings'=> $fire_commitment_ceilings]);

        //return $phone_model_first;
    }

    public function store(Request $request)
    {
        /*dd($request);*/

        //$data = $request->get('imei1');
        #create or update your data here

        //return $data;
        //$msg=$request->get('owner_id');

        $phone_model = $request->get('phone_model');
        if ($request->get('price_range') == null) {
            $phone_brands = Phone_brand::all();
            $phone_brand_first = Phone_brand::query()->first();
            $phone_model_first = Phone_model::query()->where('brand_id', '=', $phone_brand_first->id)->get();
            $commitment_ceilings = Commitment_ceiling::all();
            $fire_commitment_ceilings = Fire_commitment_ceiling::all();
            return view('dashboard.add')
                ->with('price_range_error', 'price_range')
                ->with('user', auth()->user())
                ->with('phone_brands', $phone_brands)
                ->with('phone_models', $phone_model_first)
                ->with('commitment_ceilings', $commitment_ceilings)
                ->with('fire_commitment_ceilings', $fire_commitment_ceilings);
        }
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

        $data = Mobile_warranty::create([
            'owner_id' => $request->get('owner_id'),
            'phone_model_id' => $phone_model,
            'expiry_date'=>null,
            'activation_code' => $activation_code,
            'activation_date' => null,
            'transfer_code'=>null,
            'price_range'=>$request->get('price_range'),
            'fire_gift'=>true,
            'status'=>false,
            'addition_fire_commitment_id'=>$request->get('fire_addition_price'),
        ]);
        $data->save();

        if($data!=null || !empty($data)){
            $msg=FlashMessage::query()->where('title','AdminWarranty_create_success')->first();
        }else{
            $msg=FlashMessage::query()->where('title','AdminWarranty_create_fail')->first();
        }
        return $msg->value;
    }


    }
