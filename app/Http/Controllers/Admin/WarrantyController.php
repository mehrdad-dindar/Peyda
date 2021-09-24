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
use App\Models\Status;
use App\Models\User;
use App\Models\UserRequest;
use App\Models\WarrantyUse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use App\Traits\Notifications;

class WarrantyController extends Controller
{
    use Notifications;

    public function index()
    {
        $warranties=Mobile_warranty::all();

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
        $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $phone_brand_first->id)->get();
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
            $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $phone_brand_first->id)->get();
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
            'owner_id' => $request->owner_id,
            'phone_model_id' => $phone_model,
            'expiry_date'=>null,
            'activation_code' => $activation_code,
            'activation_date' => null,
            'transfer_code'=>null,
            'commitment_ceiling_id'=>$request->price_range,
            'fire_gift'=>true,
            'status'=>1,
            'addition_fire_commitment_id'=>$request->fire_addition_price,
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

        $warranty=Mobile_warranty::find($id);

        if($warranty!=null) {

            $images=Helpers::getImageFromDb($warranty->images);

            //dd($images);
            return view('dashboard.warranty.show', ['warranty' => $warranty, 'images' => $images]);
        }else{
            abort(404);
        }
    }

    public function admit(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_id=$request->get('warranty_id');
        if ($status == 1) {
            $descriptions = 'فراگارانتی شما تایید شده است.';
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => Status::query()->where('text','فعال')->first()->id
            ]);
            $done=1;
        } else {
            $descriptions = $request->get('descriptions');
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => 7
            ]);
            $done=0;
        }
        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile';

        $notif=new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(2);
        $notif->setTitle('بررسی فراگارانتی');
        $notif->setBody($descriptions);

        $userNotif=new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif,$userNotif);

        $warranty=Mobile_warranty::find($warranty_id);

        $userrequest=UserRequest::query()
            ->where([['user_requestable_type','=','App\Models\Mobile_warranty'],
                ['user_requestable_id','=',$warranty_id]])->first();

        if($userrequest!=null){
            $warranty->userrequests()->update(['updated_at'=>Carbon::now()->toDateTimeString(),'admin_id'=>$admin_id,'done'=>$done]);
        }

        return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
    }

    public function useWarranty()
    {
        $uses=WarrantyUse::all();

        /*foreach ($uses as $use){

            dd($use->userrequests()->exists());
        }*/
        //die();
/*
        $uses=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
            ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
            ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
            ->get(['warranty_uses.id as wu_id','mw.activation_code','pm.name as pm_name','cc.price_range','warranty_uses.title']);*/

        return view('dashboard.warranty.uses',['uses'=>$uses]);
    }

    public function show_admit($id)
    {
        $warranty=WarrantyUse::find($id);
        /*$warranty=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
            ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
            ->join('phone_brands as pb','pb.id','=','pm.phone_brand_id')
            ->join('users as u','u.id','=','mw.owner_id')
            ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
            ->join('fire_commitment_ceilings as fc','fc.id','=','mw.addition_fire_commitment_id')
            ->where('warranty_uses.id','=',$id)
            ->first(['warranty_uses.id as wu_id','warranty_uses.images as wu_images','warranty_uses.title as wu_title','warranty_uses.descriptions as wu_descriptions',
                'warranty_uses.images as wu_images','warranty_uses.created_at as wu_date',
                'mw.*','pm.name as pm_name','pb.name as pb_name',
                'u.f_name','u.l_name','u.melli_code','u.id as u_id',
                'cc.price_range as cc_price','fc.addition_price as fc_price']);*/

        //////////////

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
            $images=Helpers::getImageFromDb($warranty->images);

            //dd(print_r($images));
            return view('dashboard.warranty.show_use', ['use_warranty' => $warranty, 'images' => $images]);
        }else{
            //dd('else');
            abort(404);
        }
    }

    public function admit_use(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_use_id=$request->get('warranty_use_id');
        if ($status == 1) {
            $percentage=$request->get('percentage');
            $descriptions = 'استفاده از فراگارانتی شما تایید شده است.';
            $warranty_use=WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                'percentage' => $percentage,
                'status'=>true
            ]);
            $done=1;
        } else {
            $warranty_use=WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                'status'=>false
            ]);
            $descriptions = $request->get('descriptions');
            $done=0;
        }
        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile/uses';

        $userrequest=UserRequest::query()
            ->where([['user_requestable_type','=','App\Models\WarrantyUse'],
                ['user_requestable_id','=',$warranty_use_id]])->first();

        $warranty_use=WarrantyUse::find($warranty_use_id);
        if($userrequest!=null){
            $warranty_use->userrequests()->update(['updated_at'=>Carbon::now()->toDateTimeString(),'admin_id'=>$admin_id,'done'=>$done]);
        }

        $notif=new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(3);
        $notif->setTitle('بررسی استفاده از فراگارانتی');
        $notif->setBody($descriptions);
        $notif->setLink($link);

        $userNotif=new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif,$userNotif);

        return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
    }

    public function waitingIndex()
    {
        return view('dashboard.warranty.waiting',
            ['waitings'=>self::getWaitingWarranties()]);
    }

}
