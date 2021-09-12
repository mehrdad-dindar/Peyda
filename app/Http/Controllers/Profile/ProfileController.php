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
use App\Models\Wallet;
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
            'wallet' => $wallet
        ]);
    }

    public function profile()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        return view('profile.profile')->with([
            'wallet' => $wallet
        ]);

    }

    public function edit_profile()
    {

        $flag=1;
        $cities = city::all();
        $phone_brands = Phone_brand::all();
        $phone_models = Phone_model::all();
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        if(auth()->user()->status==0){
            $flag=0;
        }else{
            $flag=1;
        }
        return view('profile.edit_profile')
            ->with(['cities'=>$cities,
                    'flag'=>$flag,
                    'phone_brands'=>$phone_brands,
                    'phone_models'=>$phone_models,
                    'wallet' => $wallet
                   ]);
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

        //dd($request->all());
        $user->f_name = $request['f_name'];
        $user->l_name = $request['l_name'];
        $user->birthday = $v;
        $user->melli_code = $request['melli_code'];
        $user->phone_num = $request['phone_num'];
        $user->city_id = $request['city_id'];
        $user->address = $request['address'];
        $user->postal_code = $request['postal_code'];
        $user->phone_model_id = $request['phone_model_id'];
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
