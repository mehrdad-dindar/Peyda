<?php

namespace App\Http\Controllers\Profile;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use App\Mail\verifyAccount;
use App\Mail\verifyEmail;
use App\Models\city;
use App\Models\Email;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\PanelSlider;
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
use Mail;
use Redirect;
use App\Traits\Emails;
use App\Traits\Sms;
use function Symfony\Component\String\u;

class ProfileController extends Controller
{

    use Emails,Sms;
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index($msg='',$msgBody='')
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $panelSliders=PanelSlider::all();
        return view('profile.index')->with([
            'wallet' => $wallet,
            'panelSliders'=>$panelSliders,
            $msg=>$msgBody
        ]);
    }



    public function profile($msg='',$msgBody='')
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $user=User::find(auth()->user()->id);
        return view('profile.profile')->with([
            'wallet' => $wallet,
            'user'=>$user,
            $msg=>$msgBody
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
        //dd($request->all());
        /*$v = verta()
            ->timestamp($request['birthday_tmp'] / 1000)
            ->formatGregorian('Y-m-d 09:i:s');*/
        /*$v->year = $request['year'];
        $v->month = $request['month']; // عدد 13 برای ثبت سال آینده اولین ماه
        $v->day = $request['day'];*/
        $user = User::findOrFail($request['id']);

        /*$this->sendPattern($user,'4altcglgrs',['name'=>$user->f_name]);*/
        $this->sendPattern($user,'6ki49gc097',['name'=>$user->getFullNameAttribute($user)]);

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = time() . $avatar->getClientOriginalName();
            $avatar->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/avatars/', $avatar_name);
            $user->avatar = $avatar_name;
        }
        /*if ($request->file('melli_card')) {
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
        }*/
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
        $v = verta();
        $v = $v->setDateTime($request['year'], $request['month'], $request['day'], null,null,null);
        $userBirthday=Carbon::instance($v->datetime());

        if($request['year']!=null && $request['month']!=null && $request['day']!=null)  {
            $user->birthday = $userBirthday;
        }else{
            $user->birthday=null;
        }

        $user->melli_code = $request['melli_code'];
        $user->city_id = $request['city_id'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        $user->postal_code = $request['postal_code'];
        $user->phone_model_id = $phone_model;
        $user->phone_model_other = $other_model;
        $user->status=1;
        $user->save();

        if(auth()->user()->email!=null) {
            $var = new verifyAccount(auth()->user());
            self::sendEmail(auth()->user(), $var);
            $this->addEmail(auth()->user());
        }

        $userrequest = UserRequest::query()
            ->where([['user_requestable_type', '=', 'App\Models\User'],
                ['user_requestable_id', '=', $user->id]])->first();

        if ($userrequest == null) {
            //dd('else');
            $userrequest1 = new UserRequest();
            $userrequest1->done=1;
            $user->userrequests()->save($userrequest1);
        }
        $msg = 'پروفایل کاربری شما فعال شد. اکنون میتوانید از همه امکانات پنل خود استفاده نمایید.';

        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $panelSliders=PanelSlider::all();
        return view('profile.index')->with([
            'wallet' => $wallet,
            'panelSliders'=>$panelSliders,
            'success'=>$msg
        ]);

        /*return $this->index('success',$msg);*/
        /*return redirect()->route('panel')->with('success',$msg);*/
        //dd($birthday_timestamp);
        /*return view('profile.profile')->with([
            'wallet' => $wallet,
            'msg'=>$msg
        ]);*/

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

    public function doVerifyEmail(Request $request)
    {
        $user = $request->user();

        $rand=Rand(1000,9999);

        $code=md5($rand);
        $var=new verifyEmail($user,$code);

        self::sendEmail($user,$var);

        $email=$this->addEmail($user);
        if (!$email->isValid())
            return redirect()->back()->withErrors(['کد تأیید منقضی شده است.']);

        $email?->update(['code' => $code]);

        return view('emails.sendVerifyNotice');
    }

    public function checkVerifyEmail($userid,$hash)
    {
        //dd('465636eb4a7ff4b267f3b765d07a02da'== $hash);
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $email=Email::query()->where([['emailable_id',$userid],['emailable_type','App\Models\User'],['code',$hash]])->orderBy('updated_at','desc')->first();
        //dd($email);
        if($email!=null){
            User::query()->where('id',$userid)->update(['email_verified_at'=>Carbon::now()->toDateTimeString()]);
            return view('emails.emailVerifyCallback',
                ['status'=>'success',
                'wallet'=>$wallet
            ]);
        }else{
            return view('emails.emailVerifyCallback',['error'=>'خطا','status'=>'failed',
                'wallet'=>$wallet]);
        }
    }
}
