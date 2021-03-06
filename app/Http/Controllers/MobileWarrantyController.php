<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Requests\MobileWarrantyRequest;
use App\Mail\addDocumentsEmail;
use App\Mail\warrantyActivation;
use App\Models\city;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\ImageField;
use App\Models\Mobile_warranty;
use App\Models\MobileImage;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\User;
use App\Models\UserRequest;
use App\Models\Wallet;
use App\Models\WarrantyProblem;
use App\Models\WarrantyProblemType;
use Carbon\Carbon;
use Crypt;
use DateTime;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\UserMobileWarranties;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Traits\Sms;
use App\Traits\Emails;

class MobileWarrantyController extends Controller
{

    use UserMobileWarranties,Sms,Emails;

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function print($id)
    {

        $warranty = self::getPrintWarranty($id)['warranty'];
        $uses = self::getPrintWarranty($id)['uses'];

        if ($warranty->owner_id == auth()->user()->id) {
            $wallet = Wallet::where('user_id', \auth()->user()->id)->first();
            return view('profile.print', compact(['wallet', 'warranty', 'uses']));
        } else {
            abort(404);
        }
    }

    public function edit(Request $request, $id)
    {

        //dd($request->all());
        $other_model = null;
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        if ($request['warranty_type'] == 1) {
            $phone_model_id = $request['my_phone_model'];
            $phone_model_id = auth()->user()->phone_model_id;
            if (auth()->user()->phone_model_other != null) {
                $other_model = auth()->user()->phone_model_other;
            } else {
                $other_model = null;
            }
        } else {
            if ($request['new_phone_model'] == null) {

                $this->bimeh_add('???????? ???????? ?????? ???????? ???? ???????????? ????????.');

            } elseif ($request['new_phone_model'] == 'others') {
                //dd('esleif');
                $phone_model_id = $request['other_model'];
                $other_model = $request['other_phone_model'];
            } else {
                //dd('else');
                $phone_model_id = $request['new_phone_model'];
                $other_model = null;
            }
        }

        if ($request['warranty_type'] != null && $request['price_range'] != null) {
            $data = Mobile_warranty::query()->where('id', $id)->update([
                'phone_model_id' => $phone_model_id,
                'phone_model_other' => $other_model,
                'commitment_ceiling_id' => $request['price_range'],
                'status_id' => 7,
                'addition_fire_commitment_id' => $request['fire_addition_price'],
            ]);
            $data = Mobile_warranty::find($id);

            $price_with_discount=($data->Commitment_ceiling->price-($data->Commitment_ceiling->discount*$data->Commitment_ceiling->price)/100);

            if ($data->addition_fire_commitment_id != null) {
                $data->tax = ($data->Fire_commitment_ceiling->price + $price_with_discount) * (9 / 100);
                $data->save();
            } else {
                $data->tax = $price_with_discount * (9 / 100);
                $data->save();
            }

            //$mobile_images=Helpers::getImageFromDb($data->images);

            return $this->uploadPhoto($id, 1);
        } else {
            $this->bimeh_add('???????? ?????? ???????????? ???? ???? ?????? ????????????.');
        }
    }

    public function bimeh_add($editId = 0, $error = '')
    {
        $mobile_warranty = '';

        $cities = city::all();
        $phone_brand_first = Phone_brand::query()->first();
        $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $phone_brand_first->id)->get();
        if ($editId != 0) {
            $mobile_warranty = Mobile_warranty::find($editId);
            if ($mobile_warranty != null) {
                if ($mobile_warranty->owner_id != auth()->user()->id) {
                    $mobile_warranty = null;
                } else {
                    $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $mobile_warranty->phone_model->phone_brand->id)->get();
                }
            } else {
                abort(404);
            }
        }

        $pb_name = Phone_model::find(auth()->user()->phone_model_id)->phone_brand;
        $myPhoneDisplay = $pb_name->name . " / " . auth()->user()->phone_model->name;

        //dd(auth()->user()->phone_model_other);
        if (auth()->user()->phone_model_other != null) {
            //dd($myPhone->other_model);
            $myPhoneDisplay = $pb_name->name . " / " . auth()->user()->phone_model_other;
        }

        $brands = Phone_brand::all();
        $commitment_ceilings = Commitment_ceiling::all();
        $fire_commitment_ceilings = Fire_commitment_ceiling::all();
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        return view('profile.bimeh_add')
            ->with('cities', $cities)
            ->with('myPhoneName', $myPhoneDisplay)
            ->with('brands', $brands)
            ->with('models_first', $phone_model_first)
            ->with('commitment_ceilings', $commitment_ceilings)
            ->with('fire_commitment_ceilings', $fire_commitment_ceilings)
            ->with('wallet', $wallet)
            ->with('error', $error)
            ->with('mobile_warranty', $mobile_warranty);
        //return $phones;
    }

    public function bimeh_all($status = '')
    {
        $warrantyProblemType = null;
        $wallet = Wallet::where('user_id', auth()->id())->first();

        if ($status != '') {
            $warranties = Mobile_warranty::where([['owner_id', auth()->id()], ['status_id', $status]])->orderBy('updated_at', 'desc')->get();
        } else {
            $warranties = Mobile_warranty::where('owner_id', auth()->id())->orderBy('updated_at', 'desc')->get();
        }
        foreach ($warranties as $key => $warranty) {
            $warrantyProblem = WarrantyProblem::query()->where('mobile_warranty_id', $warranty->id)->orderBy('updated_at', 'desc')->first();
            if ($warrantyProblem != null) {
                $warranty['problem_price'] = $warrantyProblem->price;
                $warranty['problem_id'] = $warrantyProblem->id;
                $warranty['warrantyProblemType'] = $warrantyProblem->warranty_problem_type_id;
                $warrantyproblemtype = WarrantyProblemType::query()->join('warranty_problems as pm', 'pm.warranty_problem_type_id', 'warranty_problem_types.id')->where('pm.id', $warrantyProblem->id)->first();
                $warranty['warrantyProblemTypeName'] = $warrantyproblemtype->name;
            } else {
                $warrantyProblemType = null;
            }
            if ($warranty->phone_model_other != null) {
                $pm_name = $warranty->phone_model_other;
            } else {
                $pm_name = $warranty->phone_model->name;
            }
            $pb_brand = $warranty->phone_model->phone_brand->name;
            $warranty['phone_name'] = $pb_brand . " / " . $pm_name;
        }


        return view('profile.bimeh_all')->with([
            'warranties' => $warranties,
            'wallet' => $wallet,
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

    public function save(MobileWarrantyRequest $request)
    {
        $owner_id = auth()->id();
        $other_model = null;
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        if ($request['price_range'] == null) {

            return $this->bimeh_add('???????? ???????? ???????? ???????? ???? ???????????? ????????.');

        }


        $activation_code = "P_" . self::RandomString() . time();
        /*$expiry_date = date('Y-m-d H:i:s',strtotime('+1 years'));*/

        if ($request['warranty_type'] == 1) {
            $phone_model_id = $request['my_phone_model'];
            $phone_model_id = auth()->user()->phone_model_id;
            if (auth()->user()->phone_model_other != null) {
                $other_model = auth()->user()->phone_model_other;
            } else {
                $other_model = null;
            }
        } else {
            if ($request['new_phone_model'] == null) {

                $this->bimeh_add('???????? ???????? ?????? ???????? ???? ???????????? ????????.');

            } elseif ($request['new_phone_model'] == 'others') {
                //dd('esleif');
                $phone_model_id = $request['other_model'];
                $other_model = $request['other_phone_model'];
            } else {
                //dd('else');
                $phone_model_id = $request['new_phone_model'];
                $other_model = null;
            }
        }
        $v = verta();

        //dd($request['warranty_owner']);
        if ($request['warranty_owner'] == 1) {

            $email = User::where([['email', $request['email']],['id','!=',auth()->id()]])->first();
            if ($email && $email->email!=null) {
                return redirect()
                    ->back()
                    ->withErrors(['???????? ?????????? ???????????? ???????? ??????????.']);
            } else {


                $v = $v->setDateTime($request['year'], $request['month'], $request['day'], null, null, null);
                $user = auth()->user();
                $user->f_name = $request['f_name'];
                $user->l_name = $request['l_name'];
                $userBirthday = Carbon::instance($v->datetime());

                if ($request['year'] != null && $request['month'] != null && $request['day'] != null) {
                    $user->birthday = $userBirthday;
                }

                $user->melli_code = $request['melli_code'];
                $user->city_id = $request['city_id'];
                $user->address = $request['address'];
                $user->email = $request['email'];
                $user->postal_code = $request['postal_code'];
                $user->save();
            }
        } else {
            $email = User::where([['email', $request['email_other']],['id','!=',auth()->id()]])->first();
            //$phone_num = User::where('phone_num', $request['phone_num_other'])->first();
            if ($email && $email->email!=null) {
                return redirect()->back()->withErrors(['???????? ?????????? ???????????? ???????? ??????????!']);
            } else {

                $v = $v->setDateTime($request['year_other'], $request['month_other'], $request['day_other'], 0, 0, 0);

                //$userBirthday1 = null;
                $userBirthday = Carbon::parse($v->datetime())->toDateTimeString();


                $userBirthday1 = $userBirthday;

                $ownerUser=User::query()->where('phone_num',$request['phone_num_other'])->first();
                $ownerUserEmail=User::query()->where('email',$request['email_other'])->first();
                if($ownerUser!=null){
                    $ownerUser->update([
                       'f_name' => $request['f_name_other'],
                       'l_name' => $request['l_name_other'],
                       'birthday' => $userBirthday1,
                       'postal_code' => $request['postal_code_other'],
                       'melli_code' => $request['melli_code_other'],
                       'city_id' => $request['city_id_other'],
                       'address' => $request['address_other'],
                       'email' => $request['email_other'],
                    ]);
                }elseif ($ownerUserEmail!=null){

                    User::query()->where('id',$ownerUserEmail->id)->update([
                        'f_name' => $request['f_name_other'],
                        'l_name' => $request['l_name_other'],
                        'birthday' => $userBirthday1,
                        'postal_code' => $request['postal_code_other'],
                        'melli_code' => $request['melli_code_other'],
                        'city_id' => $request['city_id_other'],
                        'address' => $request['address_other'],
                        'email' => $request['email_other'],
                    ]);
                    $ownerUser=User::find($ownerUserEmail->id);
                }
                else {
                    //dd($userBirthday1);
                    $newUser= new User();
                    $newUser->f_name=$request['f_name_other'];
                    $newUser->l_name=$request['l_name_other'];
                    $newUser->birthday=$userBirthday1;
                    $newUser->role_id=2;
                    $newUser->phone_num=$request['phone_num_other'];
                    $newUser->postal_code=$request['postal_code_other'];
                    $newUser->melli_code=$request['melli_code_other'];
                    $newUser->city_id=$request['city_id_other'];
                    $newUser->address=$request['address_other'];
                    $newUser->email=$request['email_other'];
                    $newUser->phone_model_id=$phone_model_id;
                    $newUser->phone_model_other=$other_model;
                    $newUser->save();
                    $ownerUser=$newUser;

                    //dd($newUser->toArray());
                    Wallet::create([
                        'user_id' => $ownerUser->id,
                        'value'=>Crypt::encryptString('0')
                    ]);
                }
                $owner_id = $ownerUser->id;

            }
        }

        if ($request['warranty_type'] != null && $request['price_range'] != null) {
            $data = Mobile_warranty::create([
                'buyer_id' => auth()->id(),
                'owner_id' => $owner_id,
                'phone_model_id' => $phone_model_id,
                'phone_model_other' => $other_model,
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

            $this->sendPattern(auth()->user(),'ozv6axg5go',['name'=>auth()->user()->f_name,'phone_model'=>$data->getPhoneName($data)]);

            $price_with_discount=($data->Commitment_ceiling->price-($data->Commitment_ceiling->discount*$data->Commitment_ceiling->price)/100);

            if ($data->addition_fire_commitment_id != null) {
                $data->tax = ($data->Fire_commitment_ceiling->price + $price_with_discount) * (9 / 100);
                $data->save();
            } else {
                $data->tax = $price_with_discount * (9 / 100);
                $data->save();
            }

            return $this->cart($data->id);
        } else {
            $this->bimeh_add('???????? ?????? ???????????? ???? ???? ?????? ????????????.');
        }
    }

    public function bimeh_bought($status = '')
    {

        $warrantyProblemType = null;
        $wallet = Wallet::where('user_id', auth()->id())->first();

        if ($status != '') {
            $warranties = Mobile_warranty::where([['owner_id','!=', auth()->id()],['buyer_id',auth()->id()], ['status_id', $status]])->orderBy('updated_at', 'desc')->get();
        } else {
            $warranties = Mobile_warranty::where([['owner_id','!=', auth()->id()],['buyer_id',auth()->id()]])->orderBy('updated_at', 'desc')->get();
        }
        foreach ($warranties as $key => $warranty) {
            $warrantyProblem = WarrantyProblem::query()->where('mobile_warranty_id', $warranty->id)->orderBy('updated_at', 'desc')->first();
            if ($warrantyProblem != null) {
                $warranty['problem_price'] = $warrantyProblem->price;
                $warranty['warrantyProblemType'] = $warrantyProblem->warranty_problem_type_id;
                $warrantyproblemtype = WarrantyProblemType::query()->join('warranty_problems as pm', 'pm.warranty_problem_type_id', 'warranty_problem_types.id')->where('pm.id', $warrantyProblem->id)->first();
                $warranty['warrantyProblemTypeName'] = $warrantyproblemtype->name;
            } else {
                $warrantyProblemType = null;
            }
            if ($warranty->phone_model_other != null) {
                $pm_name = $warranty->phone_model_other;
            } else {
                $pm_name = $warranty->phone_model->name;
            }
            $pb_brand = $warranty->phone_model->phone_brand->name;
            $warranty['phone_name'] = $pb_brand . " / " . $pm_name;
        }


        return view('profile.bimeh_all')->with([
            'warranties' => $warranties,
            'wallet' => $wallet,
        ]);

    }

    public function cart($id = null)
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        $invoice = Mobile_warranty::find($id);


        if ($invoice->phone_model_other != null) {
            $modelName = $invoice->phone_model_other;
        } else {
            $modelName = $invoice->phone_model->name;
        }

        $phoneName = $invoice->phone_model->phone_brand->name . " / " . $modelName;
        $invoice['phone_name'] = $phoneName;

        return view('profile.cart')
            ->with([
                'invoice' => $invoice,
                'wallet' => $wallet,
                'user'=>$invoice->User
            ]);
    }

    public function uploadPhoto($id, $edit = 0, $err = '')
    {
        $msg = '';
        $warranty = Mobile_warranty::findOrFail($id);

        if($warranty->buyer_id==auth()->user()->id || $warranty->owner_id==auth()->user()->id) {


            if ($edit = 1) {
                $images = Helpers::getImageFromDb($warranty->images);
            } else {
                $images = null;
            }
            $wallet = Wallet::where('user_id', "=", auth()->id())->first();
            $warranty = Mobile_warranty::find($id);
            $imgs = ImageField::all();
            $qrcode = QrCode::size(250)->generate(md5($id . ' __ ' . $warranty->created_at));
            if ($err != '') {
                $msg = 'error';
            }
            return view('profile.warranty.photo_upload', [
                'id' => $id,
                'wallet' => $wallet,
                'imgs' => $imgs,
                'qrcode' => $qrcode,
                'images' => $images,
                $msg => $err
            ]);
        }else{
            abort(404);
        }
    }

    public function editPhoto($id, $err = '')
    {
        $msg = '';
        $warranty = Mobile_warranty::findOrFail($id);
        $user=User::find($warranty->owner_id);
        $images = Helpers::getImageFromDb($warranty->images);
        $qrcode = QrCode::size(250)->generate(md5($id . ' __ ' . $warranty->created_at));

        $imgs = ImageField::all();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        if ($err != '') {
            $msg = 'error';
        }

        return view('profile.warranty.photo_upload_edit', ['images' => $images, 'imgs' => $imgs,
            'qrcode' => $qrcode,
            'id' => $id,
            $msg => $err,
            'wallet' => $wallet,
            'user'=>$user]);
    }

    public function insertPhotos(Request $request, $id, $edit = 0)
    {
        //dd($request->all());
        //$i=0;
        $prefix = $imageList = '';
        $imageFields = ImageField::all();
        $key = 0;

        if ($edit == 0) {

            if (sizeof($request->toArray()) - (2 * sizeof($imageFields) + 3) == 9) {
                //dd('2');
                //$i++;
                foreach ($imageFields as $row) {

                    if ($request->file($row->html_id)) {
                        $file = $request->file($row->html_id);
                        $file_name = time() . $file->getClientOriginalName();
                        $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/warranty_images/', $file_name);
                        $file_pic = MobileImage::create(['URL' => $file_name, 'type' => (int)$request['type_' . $row->html_id]]);

                        $imageList .= $prefix . $file_pic->id;
                        $prefix = ',';

                        $key++;
                    }
                }
            }
        }
        if($request->has('melli_card')){
            $file = $request->file('melli_card');
            $melli_card_name = time() . $file->getClientOriginalName();
            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_name);
            $key++;
        }
        if($request->has('melli_card_back')){
            $file = $request->file('melli_card_back');
            $melli_card_back_name = time() . $file->getClientOriginalName();
            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_back_name);
            $key++;
        }

        //dd($key);
        //dd($i);

        //dd(sizeof($request->toArray()) - (3*sizeof($imageFields)+1));
        if ($key == 9) {

            $mobileWarranty = Mobile_warranty::find($id);

            Mobile_warranty::query()->where('id', $id)->update([
                'images' => $imageList,
                'status_id' => 6
            ]);

            User::query()->where('id',$mobileWarranty->owner_id)->update(['melli_card'=>$melli_card_name,'melli_card_back'=>$melli_card_back_name]);

            $userrequest = UserRequest::query()
                ->where([['user_requestable_type', '=', 'App\Models\Mobile_warranty'],
                    ['user_requestable_id', '=', $id]])->first();

            if ($userrequest != null) {
                $mobileWarranty->userrequests()->update(['updated_at' => Carbon::now()->toDateTimeString()]);
                //dd('if');
            } else {

                $userrequest1 = new UserRequest();
                $mobileWarranty->userrequests()->save($userrequest1);
            }
            $this->sendPattern(auth()->user(),'upn8fbro7f',['name'=>auth()->user()->f_name,'date'=>Verta::now()->format('Y/m/d')]);

            if(auth()->user()->email) {
                $var = new addDocumentsEmail(auth()->user());

                self::sendEmail(auth()->user(), $var);

                $this->addEmail(auth()->user());
            }
            return redirect()->route('panel')->with(['status' => '?????? ?????? ???????????? ???? ???????????? ?????????? ????.']);

        } else {
            return $this->uploadPhoto($id, 0, '???????? ?????? ?????? ???? ???? ?????????? ????????!');
        }

    }

    public function updatePhoto(Request $request, $id)
    {

        //dd($request);
        $prefix = $imageList = '';
        $imageFields = ImageField::all();
        $key = 0;

        if (sizeof($request->toArray()) - (2 * sizeof($imageFields) + 1) >= 0 && sizeof($request->toArray()) - (2 * sizeof($imageFields) + 1) <= 20) {
            //$i++;
            //dd($i);
            //dd('inja');
            foreach ($imageFields as $row) {

                if ($request->has($row->html_id)) {
                    $file = $request->file($row->html_id);
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/warranty_images/', $file_name);
                    $file_pic = MobileImage::create(['URL' => $file_name, 'type' => (int)$request['type_' . $row->html_id]]);

                    $imageList .= $prefix . $file_pic->id;
                    $prefix = ',';
                    $key++;

                } else {
                    $file_pic = MobileImage::find(str_replace('hidden_', '', $request['hidden_' . $row->html_id]));
                    if ($file_pic != null) {

                        $imageList .= $prefix . $file_pic->id;
                        $prefix = ',';
                        $key++;
                    }
                }
            }
        }
        $mobileWarranty = Mobile_warranty::find($id);


        if($request->has('melli_card')){
            $file = $request->file('melli_card');
            $melli_card_name = time() . $file->getClientOriginalName();
            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_name);
            $key++;
        }else{
            User::query()->where('id',$mobileWarranty->owner_id)->update(['melli_card'=>$request['hidden_melli_card']]);
            $key++;
        }

        if($request->has('melli_card_back')){
            $file = $request->file('melli_card_back');
            $melli_card_back_name = time() . $file->getClientOriginalName();
            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/melli_cards/', $melli_card_back_name);
            $key++;
        }else{
            User::query()->where('id',$mobileWarranty->owner_id)->update(['melli_card_back'=>$request['hidden_melli_card_back']]);
            $key++;
        }

        //dd($request->all(),$key);

        if ($key == 9) {

            Mobile_warranty::query()->where('id', $id)->update([
                'images' => $imageList,
                'status_id' => 6
            ]);

            $userrequest = UserRequest::query()
                ->where([['user_requestable_type', '=', 'App\Models\Mobile_warranty'],
                    ['user_requestable_id', '=', $id]])->first();

            if ($userrequest != null) {
                $mobileWarranty->userrequests()->update(['updated_at' => Carbon::now()->toDateTimeString()]);
                //dd('if');
            } else {
                $userrequest1 = new UserRequest();
                $mobileWarranty->userrequests()->save($userrequest1);
            }

            $this->sendPattern(auth()->user(),'upn8fbro7f',['name'=>auth()->user()->f_name,'date'=>Verta::now()->format('Y/m/d')]);

            return redirect(route('bimeh_all'))->with(['success' => '?????? ?????? ???????????? ???? ???????????? ?????????? ????.']);

        } else {
            return $this->editPhoto($id, '???????? ?????? ?????? ???? ???? ?????????? ????????!');
        }

    }

}
