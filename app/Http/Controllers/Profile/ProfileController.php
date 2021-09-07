<?php

namespace App\Http\Controllers\Profile;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;

class ProfileController extends Controller
{
    public static function getNotification($id)
    {
        $notification=NotificationUser::query()->where('receiver_id','=',$id)
            ->join('notifications as n', 'user_notifications.notification_id', '=', 'n.id')
            ->join('notification_types as nt','n.type','=','nt.id')
            ->where('n.seen','=',0)
            ->whereNotNull('n.title')
            ->get(['n.*','nt.name as nt_name']);

        return $notification;
    }

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $notif=self::getNotification(auth()->user()->id);
        return view('profile.index')->with(['user'=>auth()->user(),
                                                'notification'=>$notif]);
    }

    public function profile()
    {
        $user=auth()->user();

        $notif=self::getNotification(auth()->user()->id);
        return view('profile.profile')->with(['user'=>$user,
                                                    'notification'=>$notif]);
    }
    public function edit_profile()
    {
        $notif=self::getNotification(auth()->user()->id);

        $cities = city::all();
        $phone_brands = Phone_brand::all();
        $phone_models = Phone_model::all();
        return view('profile.edit_profile')
            ->with(['user'=>auth()->user(),
                    'cities'=>$cities,
                    'phone_brands'=>$phone_brands,
                    'phone_models'=>$phone_models,
                    'notification'=>$notif]);
    }

    public function validator(Request $request)
    {
        return Validator::make($request, [
            'f_name' => 'max:20',
            'l_name' => 'max:20',
            'avatar' => 'dimensions:max_width=150,max_height=150'
        ]);

    }
    protected function save_profile(Request $request)
    {
        /*$this->validator();*/
        /*dd($request['birthday_tmp']);*/
        $v = verta()
            ->timestamp($request['birthday_tmp']/1000)
            ->formatGregorian('Y-m-d 09:i:s');
        $user = User::findOrFail($request['id']);
        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = time() . $avatar->getClientOriginalName();
            $avatar->move($_SERVER["DOCUMENT_ROOT"] . '/avatars/', $avatar_name);
            $user->avatar = $avatar_name;
        }
        if ($request->file('melli_card')) {
            $melli_card = $request->file('melli_card');
            $melli_card_name = time() . $melli_card->getClientOriginalName();
            $melli_card->move($_SERVER["DOCUMENT_ROOT"] . '/melli_cards/', $melli_card_name);
            $user->melli_card = $melli_card_name;
        }
        $user->f_name = $request['f_name'];
        $user->l_name = $request['l_name'];
        $user->birthday = $v;
        $user->melli_code = $request['melli_code'];
        $user->phone_num = $request['phone_num'];
        $user->city_id = $request['city_id'];
        $user->address = $request['address'];
        $user->postal_code = $request['postal_code'];
        $user->phone_brand_id = $request['phone_brand_id'];
        $user->phone_model_id = $request['phone_model_id'];
        $user->bank_shaba = $request['bank_shaba'];
        $user->bank_card = $request['bank_card'];
        $user->bank_id = $request['bank_id'];
        $user->save();
        return back();

    }

    public function mobile_change(Request $request)
    {

        $id=$request->get('id');
        if(isset($id)){
            // Capture selected country

            $result=Phone_model::query()->where('brand_id','=',$id)->get();

            foreach($result as $row) {

                $model_id=$row->id;
                $model_name=$row->name;

                $html="<option value='".$model_id."'>
                ".$model_name."</option>";

                echo $html;
            }
        }
    }


}
