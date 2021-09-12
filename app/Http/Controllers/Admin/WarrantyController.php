<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\FlashMessage;
use App\Models\Mobile_warranty;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\User;
use App\Models\WarrantyUse;
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
            ->get(['u.email','u.f_name','u.l_name','pm.name as pm_name','cc.price_range','fc.addition_price','activation_code','mobile_warranties.id as mw_id']);

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
            'status'=>1,
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

    public function show($id)
    {

        $warranty=Mobile_warranty::query()->join('phone_models as pm','pm.id','=','mobile_warranties.phone_model_id')
            ->join('phone_brands as pb','pb.id','=','pm.brand_id')
            ->join('users as u','u.id','=','mobile_warranties.owner_id')
            ->join('commitment_ceilings as cc','cc.id','=','mobile_warranties.price_range')
            ->join('fire_commitment_ceilings as fc','fc.id','=','mobile_warranties.addition_fire_commitment_id')
            ->where('mobile_warranties.id','=',$id)
            ->first(['mobile_warranties.*','pm.name as pm_name','pb.name as pb_name',
                'u.f_name','u.l_name','u.melli_code','u.id as u_id',
                'cc.price_range as cc_price','fc.addition_price as fc_price']);


        if($warranty!=null) {

            $images=Helpers::getImageFromDb($warranty->images);

            return view('dashboard.warranty.show', ['warranty' => $warranty, 'images' => $images]);
        }else{
            return abort(404);
        }
    }

    public function admit(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_id=$request->get('warranty_id');
        if ($status == 1) {
            $descriptions = 'بیمه نامه شما تایید شده است.';
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status' => 1
            ]);
        } else {
            $descriptions = $request->get('descriptions');
        }
        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile';

        $notif=new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(2);
        $notif->setTitle('بررسی بیمه نامه');
        $notif->setBody($descriptions);

        $userNotif=new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif,$userNotif);

        return redirect()->back()->with('error', 'تغییرات با موفقیت اعمال شد.');
    }

    public function useWarranty()
    {
        $uses=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
            ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
            ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
            ->get(['warranty_uses.id as wu_id','mw.activation_code','pm.name as pm_name','cc.price_range','warranty_uses.title']);

        return view('dashboard.warranty.uses',['uses'=>$uses]);
    }

    public function show_admit($id)
    {
        $warranty=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
            ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
            ->join('phone_brands as pb','pb.id','=','pm.brand_id')
            ->join('users as u','u.id','=','mw.owner_id')
            ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
            ->join('fire_commitment_ceilings as fc','fc.id','=','mw.addition_fire_commitment_id')
            ->where('warranty_uses.id','=',$id)
            ->first(['warranty_uses.id as wu_id','warranty_uses.images as wu_images','warranty_uses.title as wu_title','warranty_uses.descriptions as wu_descriptions',
                'warranty_uses.images as wu_images','warranty_uses.created_at as wu_date',
                'mw.*','pm.name as pm_name','pb.name as pb_name',
                'u.f_name','u.l_name','u.melli_code','u.id as u_id',
                'cc.price_range as cc_price','fc.addition_price as fc_price']);

        /*$warranty=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
            ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
            ->join('phone_brands as pb','pb.id','=','pm.brand_id')
            ->join('users as u','u.id','=','mw.owner_id')
            ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
            ->join('fire_commitment_ceilings as fc','fc.id','=','mw.addition_fire_commitment_id')
            ->where('mw.id','=',$id)
            ->first(['warranty_uses.id as wu_id','warranty_uses.images as wu_images','warranty_uses.title as wu_title','warranty_uses.descriptions as wu_descriptions',
                'warranty_uses.images as wu_images','warranty_uses.created_at as wu_date',
                'mw.*','pm.name as pm_name','pb.name as pb_name',
                'u.f_name','u.l_name','u.melli_code','u.id as u_id',
                'cc.price_range as cc_price','fc.addition_price as fc_price']);*/


        if($warranty!=null) {

            //dd('if');
            $images=Helpers::getImageFromDb($warranty->wu_images);

            //dd(print_r($images));
            return view('dashboard.warranty.show_use', ['use_warranty' => $warranty, 'images' => $images]);
        }else{
            //dd('else');
            return abort(404);
        }
    }

    public function admit_use(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_use_id=$request->get('warranty_use_id');
        if ($status == 1) {
            $percentage=$request->get('percentage');
            $descriptions = 'استفاده از بیمه نامه شما تایید شده است.';
            WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                'percentage' => $percentage,
                'status'=>true
            ]);
        } else {
            WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                'status'=>false
            ]);
            $descriptions = $request->get('descriptions');
        }
        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile';

        $notif=new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(3);
        $notif->setTitle('بررسی استفاده از بیمه نامه');
        $notif->setBody($descriptions);
        $notif->setLink($link);

        $userNotif=new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif,$userNotif);

        return redirect()->back()->with('error', 'تغییرات با موفقیت اعمال شد.');
    }

}
