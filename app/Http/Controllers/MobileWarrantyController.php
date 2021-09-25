<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Requests\MobileWarrantyRequest;
use App\Models\Commitment_ceiling;
use App\Models\Fire_commitment_ceiling;
use App\Models\ImageField;
use App\Models\Mobile_warranty;
use App\Models\MobileImage;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use App\Models\UserRequest;
use App\Models\Wallet;
use Carbon\Carbon;
use Crypt;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\UserMobileWarranties;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MobileWarrantyController extends Controller
{

    use UserMobileWarranties;

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function print($id)
    {
        $warranty=Mobile_warranty::find($id);
        if($warranty->owner_id==auth()->user()->id) {
            $wallet = Wallet::where('user_id', \auth()->user()->id)->first();
            return view('profile.print', compact('wallet'));
        }else{
            abort(404);
        }
    }

    public function bimeh_add($error = '')
    {
        $myPhoneDisplay = '';

        //dd(auth()->user()->phone_model_other);
        if (auth()->user()->phone_model_other != null) {
            //dd($myPhone->other_model);
            $pb_name = Phone_model::find(auth()->user()->phone_model_id)->phone_brand;
            $myPhoneDisplay = $pb_name->name . " / " . auth()->user()->phone_model_other;
        }

        $brands = Phone_brand::all();
        $phone_brand_first = Phone_brand::query()->first();
        $phone_model_first = Phone_model::query()->where('phone_brand_id', '=', $phone_brand_first->id)->get();
        $commitment_ceilings = Commitment_ceiling::all();
        $fire_commitment_ceilings = Fire_commitment_ceiling::all();
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        return view('profile.bimeh_add')
            ->with('myPhoneName', $myPhoneDisplay)
            ->with('brands', $brands)
            ->with('models_first', $phone_model_first)
            ->with('commitment_ceilings', $commitment_ceilings)
            ->with('fire_commitment_ceilings', $fire_commitment_ceilings)
            ->with('wallet', $wallet)
            ->with('error', $error);
        //return $phones;
    }

    public function bimeh_all()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $warranties = Mobile_warranty::where('owner_id', auth()->id())->orderBy('updated_at', 'desc')->get();

        foreach ($warranties as $warranty) {
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

    public function save(Request $request)
    {
        //dd($request->all());
        /*ddd($request->toArray());*/
        //$phone_model_id = '';
        /*dd($request);*/
        $other_model = null;
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();

        if ($request['price_range'] == null) {

            return $this->bimeh_add('لطفا فیلد بازه قیمت را انتخاب کنید.');

        }


        $activation_code = "P_" . self::RandomString() . time();
        /*$expiry_date = date('Y-m-d H:i:s',strtotime('+1 years'));*/

        if ($request['warranty_type'] == 1) {
            $phone_model_id = $request['my_phone_model'];
            $phone_model_id = auth()->user()->phone_model_id;
            if(auth()->user()->phone_model_other!=null){
                $other_model = auth()->user()->phone_model_other;
            }else{
                $other_model = null;
            }
        } else {
            if ($request['new_phone_model'] == null) {

                $this->bimeh_add('لطفا فیلد مدل گوشی را انتخاب کنید.');

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
            $data = Mobile_warranty::create([
                'owner_id' => $request['owner_id'],
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
        } else {
            $invoice = Mobile_warranty::find($id);
        }

        if ($invoice->phone_model_other != null) {
            $modelName = $invoice->phone_model_other;
        } else {
            $modelName = $invoice->phone_model->name;
        }

        $phoneName = $invoice->phone_model->phone_brand->name . " / " . $modelName;
        $invoice['phone_name']=$phoneName;

        return view('profile.cart')
            ->with([
                'invoice' => $invoice,
                'wallet' => $wallet,
            ]);
    }

    public function uploadPhoto($id, $err = '')
    {
        $msg = '';
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $warranty = Mobile_warranty::find($id)->first();
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
            $msg => $err
        ]);
    }

    public function insertPhotos(Request $request, $id)
    {
        //dd($request->all(),$id);
        $prefix = $imageList = '';
        $imageFields = ImageField::all();
        $key = 0;

        if (sizeof($request->toArray()) - 13 == 6) {
            foreach ($imageFields as $row) {

                if ($request->file($row->html_id)) {
                    $file = $request->file($row->html_id);
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/warranty_images/', $file_name);
                    $file_pic = MobileImage::create(['URL' => $file_name, 'type' => (int) $request['type_'.$row->html_id]]);

                    $imageList .= $prefix . $file_pic->id;
                    $prefix = ',';

                    $key++;
                }
            }
        }

        if ($key == 6) {

            $mobileWarranty=Mobile_warranty::find($id);

            Mobile_warranty::query()->where('id', $id)->update([
                'images' => $imageList,
                'status_id' => 6
            ]);

            $userrequest=UserRequest::query()
                ->where([['user_requestable_type','=','App\Models\Mobile_warranty'],
                    ['user_requestable_id','=',$id]])->first();

            if($userrequest!=null){
                $mobileWarranty->userrequests()->update(['updated_at'=>Carbon::now()->toDateTimeString()]);
                //dd('if');
            }else{

                $userrequest1= new UserRequest();
                $mobileWarranty->userrequests()->save($userrequest1);
            }

            return redirect(route('bimeh_all'))->with(['success' => 'عکس های موبایل با موفقیت آپلود شد.']);

        } else {
            return $this->uploadPhoto($id, 'لطفا همه عکس ها رو آپلود کنید!');
        }

    }
}
