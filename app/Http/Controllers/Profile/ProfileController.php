<?php

namespace App\Http\Controllers\Profile;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use App\Models\city;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\User;
use App\Models\UserRequest;
use App\Models\Wallet;
use Carbon\Carbon;
use Crypt;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.index')->with([
            'wallet' => $wallet,
        ]);
    }

    public function profile()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.profile')->with([
            'wallet' => $wallet,
        ]);

    }

    public function edit_profile()
    {
        //$id=auth()->user()->phone_model->phone_brand->id;
        $flag = 1;
        $cities = city::all();
        $phone_brands = Phone_brand::all();
        $phone_models = Phone_model::all();
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        //dd($phone_brands->toArray());

        if (auth()->user()->status == 0) {
            $flag = 0;
        } else {
            $flag = 1;
        }

        //dd($birthday_timestamp);

        return view('profile.edit_profile')
            ->with(['cities' => $cities,
                'flag' => $flag,
                'phone_brands' => $phone_brands,
                'phone_models' => $phone_models,
                'wallet' => $wallet,
            ]);
    }

    public function validator(Request $request)
    {
        return Validator::make($request, [
            'f_name' => 'max:20',
            'l_name' => 'max:20',
            'melli_code' => 'max:10|melliCode',
            'avatar' => 'dimensions:max_width=150,max_height=150'
        ]);

    }

    protected function save_profile(EditProfileRequest $request)
    {
        $v = verta()
            ->timestamp($request['birthday_tmp'] / 1000)
            ->formatGregorian('Y-m-d 09:i:s');
        $user = User::findOrFail($request['id']);

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = time() . $avatar->getClientOriginalName();
            $avatar->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/avatars/', $avatar_name);
            $user->avatar = $avatar_name;
        }
        if ($request->file('melli_card')) {
            $melli_card = $request->file('melli_card');
            $melli_card_name = time() . $melli_card->getClientOriginalName();
            $melli_card->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_name);
            $user->melli_card = $melli_card_name;
        }
        if ($request->file('melli_card_back')) {
            $melli_card_back = $request->file('melli_card_back');
            $melli_card_back_name = time() . $melli_card_back->getClientOriginalName();
            $melli_card_back->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_back_name);
            $user->melli_card_back = $melli_card_back_name;
        }
        if ($request->get('phone_model_id') == 'others') {
            $phone_model = $request['other_model'];
            $other_model = $request['other_phone_model'];
        } else {
            $phone_model = $request['phone_model_id'];
            $other_model = null;
        }


        //dd($request->all());
        $user->f_name = $request['f_name'];
        $user->l_name = $request['l_name'];
        if ($request['birthday_tmp'] != null) {
            $user->birthday = $v;
        }

        $user->melli_code = $request['melli_code'];
        $user->city_id = $request['city_id'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        $user->postal_code = $request['postal_code'];
        $user->phone_model_id = $phone_model;
        $user->phone_model_other = $other_model;
        $user->save();

        $userrequest = UserRequest::query()
            ->where([['user_requestable_type', '=', 'App\Models\User'],
                ['user_requestable_id', '=', $user->id]])->first();

        if ($userrequest == null) {
            //dd('else');
            $userrequest1 = new UserRequest();
            $user->userrequests()->save($userrequest1);
        }
        $msg = 'اطلاعات پروفایل کاربری توسط شما تکمیل شد؛ پس از بررسی و در صورت تایید اطلاعات، پروفایل کاربری شما فعال خواهد شد و می‌توانید از کلیه امکانات پیدا سرویس ماندگار بهره‌مند شوید. نتیجه از طریق پیامک برای شما ارسال خواهد شد.';
        //dd($birthday_timestamp);
        $wallet = Wallet::where('user_id',  auth()->id())->first();
        return view('profile.profile')->with([
            'wallet' => $wallet,
            'msg'=>$msg
        ]);
    }

    public function mobile_change(Request $request)
    {

        $options = [];
        $array = array();
        $html = '';
        $id = $request->get('id');
        if (isset($id)) {
            // Capture selected country

            $result = Phone_model::query()->where('phone_brand_id', '=', $id)->get();

            foreach ($result as $row) {

                $model_id = $row->id;
                $model_name = $row->name;

                $html .= "<option value='" . $model_id . "'>
                " . $model_name . "</option>";

            }
            $html .= "<option value='others'>سایر</option>";
            array_push($options, $html);

            $array = array(
                'options' => $options,
                'other_model' => $result[0]['id']
            );
        }
        $out = array_values($array);
        return json_encode($out);

    }


}
