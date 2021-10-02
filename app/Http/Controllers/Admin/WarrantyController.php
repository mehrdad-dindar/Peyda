<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\FlashMessage;
use App\Models\ImageField;
use App\Models\Mobile_warranty;
use App\Http\Controllers\Controller;
use App\Models\MobileImage;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\Status;
use App\Models\User;
use App\Models\UserRequest;
use App\Models\WarrantyProblem;
use App\Models\WarrantyProblemType;
use App\Models\WarrantyUse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use App\Traits\Notifications;

class WarrantyController extends Controller
{
    use Notifications;

    public function acceptedIndex()
    {
        return view('dashboard.warranty.accepted',
            ['accepts' => self::getAcceptedWarranties()]);
    }

    public function addImages(Request $request,$id)
    {

        //dd($request->all());

        $key=0;

        $imageFields=ImageField::all();
        $prefix = $imageList = '';

        if (sizeof($request->toArray()) > 9 && sizeof($request->toArray())<= 22 ) {
            //$i++;
            //dd($i);
            foreach ($imageFields as $row) {

                if ($request->file($row->html_id)) {
                    $file = $request->file($row->html_id);
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/warranty_images/', $file_name);
                    $file_pic = MobileImage::create(['URL' => $file_name, 'type' => (int)$request['type_' . $row->html_id]]);


                }else{
                    $file_pic = MobileImage::find(str_replace('hidden_','',$request['hidden_'.$row->html_id]));
                }
                $imageList .= $prefix . $file_pic->id;
                $prefix = ',';
                $key++;
            }


        }
        if($key==7){

            Mobile_warranty::query()->where('id', $id)->update([
                'images' => $imageList,
                'status_id' => 6
            ]);

            $key=0;
            return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
        }else{
            $key=0;
            return redirect()->back()->with('error', 'خطایی در اعمال تغییرات رخ داده است!');
        }
    }

    public function incompleteIndex()
    {
        //dd(self::getIncompleteWarranties());
        return view('dashboard.warranty.incomplete',
            ['incompletes' => self::getIncompleteWarranties()]);
    }

    public function index()
    {
        $warranties = Mobile_warranty::all();

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
        $users = User::all();
        return view('dashboard.warranty.add')
            ->with(['user' => auth()->user(),
                'users' => $users,
                'phone_brands' => $phone_brands,
                'phone_models' => $phone_model_first,
                'commitment_ceilings' => $commitment_ceilings,
                'fire_commitment_ceilings' => $fire_commitment_ceilings]);

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
                $randstring = $characters[rand(0, strlen($characters) - 1)];
            }
            return $randstring;
        }

        $activation_code = "P_" . RandomString() . time();

        $data = Mobile_warranty::create([
            'owner_id' => $request->owner_id,
            'phone_model_id' => $phone_model,
            'expiry_date' => null,
            'activation_code' => $activation_code,
            'activation_date' => null,
            'transfer_code' => null,
            'commitment_ceiling_id' => $request->price_range,
            'fire_gift' => true,
            'status' => 1,
            'addition_fire_commitment_id' => $request->fire_addition_price,
        ]);
        $data->save();

        if ($data != null || !empty($data)) {
            $msg = FlashMessage::query()->where('title', 'AdminWarranty_create_success')->first();
        } else {
            $msg = FlashMessage::query()->where('title', 'AdminWarranty_create_fail')->first();
        }
        return $msg->value;
    }

    public function show($id)
    {

        $warranty = Mobile_warranty::find($id);
        $warranty['phoneBrand'] = $warranty->phone_model->phone_brand->name;
        $warrantyProblemTypes=WarrantyProblemType::all();

        if ($warranty->phone_model_other != null) {
            $phoneModel = $warranty->phone_model_other;
        } else {
            $phoneModel = $warranty->phone_model->name;
        }

        $commitment_ceilings=Commitment_ceiling::all();

        $warranty['phoneModel'] = $phoneModel;
        $imageFields=ImageField::all();

        if ($warranty != null) {

            $images = Helpers::getImageFromDb($warranty->images);

            //dd($images);
            return view('dashboard.warranty.show', ['warranty' => $warranty, 'images' => $images, 'commitment_ceilings'=>$commitment_ceilings,'imageFields'=>$imageFields,'warrantyProblemTypes'=>$warrantyProblemTypes]);
        } else {
            abort(404);
        }
    }

    public function admit(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_id = $request->get('warranty_id');

        if($status==1){
            $descriptions = 'فراگارانتی شما تایید شده است.';
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => Status::query()->where('text', 'فعال')->first()->id,
                'activation_date' => Carbon::now()->toDateTimeString()
            ]);
            $done = 1;
            WarrantyProblem::query()->create([
               'mobile_warranty_id'=>$warranty_id,
               'warranty_problem_type_id'=>$status,
            ]);
        }elseif ($status==2){
            $descriptions = $request->get('descriptions');
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => 7
            ]);
            WarrantyProblem::query()->create([
                'mobile_warranty_id'=>$warranty_id,
                'warranty_problem_type_id'=>$status,
            ]);
            $done = 0;
        }elseif ($status==3 || $status==5){
            $descriptions = $request->get('descriptions_1');
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => 7
            ]);
            WarrantyProblem::query()->create([
                'mobile_warranty_id'=>$warranty_id,
                'warranty_problem_type_id'=>$status,
                'price'=>abs($request['bedehi_price'])
            ]);
            $done = 0;
        }else{
            $descriptions = $request->get('descriptions_2');
            Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'status_id' => 7
            ]);
            WarrantyProblem::query()->create([
                'mobile_warranty_id'=>$warranty_id,
                'warranty_problem_type_id'=>$status,
                'price'=>abs($request['talab_price'])
            ]);
            $done = 0;
        }

        Mobile_warranty::query()->where('id',$warranty_id)->update([
            'commitment_ceiling_id'=>$request['commitment_ceilings']
        ]);
        $mobile_warranty=Mobile_warranty::find($warranty_id);

        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile';

        $notif = new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(2);
        $notif->setTitle('بررسی فراگارانتی تلفن همراه '.$mobile_warranty->getPhoneName($mobile_warranty));
        $notif->setLink($link);
        $notif->setBody($descriptions);

        $userNotif = new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif, $userNotif);

        $warranty = Mobile_warranty::find($warranty_id);

        $userrequest = UserRequest::query()
            ->where([['user_requestable_type', '=', 'App\Models\Mobile_warranty'],
                ['user_requestable_id', '=', $warranty_id]])->first();

        if ($userrequest != null) {
            $warranty->userrequests()->update(['updated_at' => Carbon::now()->toDateTimeString(), 'admin_id' => $admin_id, 'done' => $done]);
        }

        return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
    }

    public function useWarranty()
    {
        $uses = WarrantyUse::all();

        /*foreach ($uses as $use){

            dd($use->userrequests()->exists());
        }*/
        //die();
        /*
                $uses=WarrantyUse::query()->join('mobile_warranties as mw','mw.id','=','warranty_uses.warranty_id')
                    ->join('phone_models as pm','pm.id','=','mw.phone_model_id')
                    ->join('commitment_ceilings as cc','cc.id','=','mw.price_range')
                    ->get(['warranty_uses.id as wu_id','mw.activation_code','pm.name as pm_name','cc.price_range','warranty_uses.title']);*/

        return view('dashboard.warranty.uses', ['uses' => $uses]);
    }

    public function show_admit($id)
    {
        $warranty = WarrantyUse::find($id);
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


        if ($warranty != null) {

            //dd('if');
            $images = Helpers::getImageFromDb($warranty->images);

            //dd(print_r($images));
            return view('dashboard.warranty.show_use', ['use_warranty' => $warranty, 'images' => $images]);
        } else {
            //dd('else');
            abort(404);
        }
    }

    public function admit_use(Request $request)
    {
        $done = 0;
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $warranty_use_id = $request->get('warranty_use_id');
        $warranty_id = WarrantyUse::find($warranty_use_id)->Mobile_warranty->id;
        $warranty = Mobile_warranty::find($warranty_id);
        $percentage = $request->get('percentage');
        //dd($warranty->usable_percentage-$percentage);
        if ($warranty->usable_percentage - $percentage >= 0) {
            if ($status == 1) {
                $descriptions = 'استفاده از فراگارانتی شما تایید شده است.';
                $warranty_use = WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                    'percentage' => $percentage,
                    'status' => true
                ]);
                $done = 1;
                $warranty->update([
                    'usable_percentage' => $warranty->usable_percentage - $percentage
                ]);
            }else {
                $warranty_use = WarrantyUse::query()->where('id', '=', $warranty_use_id)->update([
                    'status' => false
                ]);
                $descriptions = $request->get('descriptions');
                $done = 0;
            }
        }
        $admin_id = auth()->user()->id;
        $link = '/panel/warranty/mobile/uses';

        $userrequest = UserRequest::query()
            ->where([['user_requestable_type', '=', 'App\Models\WarrantyUse'],
                ['user_requestable_id', '=', $warranty_use_id]])->first();

        $warranty_use = WarrantyUse::find($warranty_use_id);
        if ($userrequest != null) {
            $warranty_use->userrequests()->update(['updated_at' => Carbon::now()->toDateTimeString(), 'admin_id' => $admin_id, 'done' => $done]);
        }

        $notif = new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(3);
        $notif->setTitle('بررسی استفاده از فراگارانتی');
        $notif->setBody($descriptions);
        $notif->setLink($link);

        $userNotif = new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif, $userNotif);

        return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
    }

    public function waitingIndex()
    {
        return view('dashboard.warranty.waiting',
            ['waitings' => self::getWaitingWarranties()]);
    }

}
