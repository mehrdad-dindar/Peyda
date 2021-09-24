<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Mobile_warranty;
use App\Models\MobileImage;
use App\Models\TransferWarranty;
use App\Models\Wallet;
use App\Models\WarrantyUse;
use App\Models\Notification;
use App\Models\NotificationUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use App\Models\UserRequest;
use App\Traits\UserMobileWarranties;
use App\Traits\UserRequests;
use App\Traits\Notifications;

class UseWarrantyController extends Controller
{
    use UserMobileWarranties;
    use UserRequests;
    use Notifications;

    public function index($id)
    {

        $check_warranty = Mobile_warranty::where([['owner_id', '=', auth()->user()->id], ['id', '=', $id]])->get();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        //dd($check_warranty->toArray());

        if (sizeof($check_warranty) > 0) {

            return view('profile.warranty.use', [
                'warranty_id' => $id,
                'wallet' => $wallet,
            ]);

        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request, $edit = null)
    {

        $descriptions = $request->get('descriptions');
        $title = $request->get('title');
        $images = $request->input('document_id');
        $wallet = Wallet::where('user_id', auth()->id())->first();

        $imageList = $prefix = '';

        if (is_array($images)) {
            foreach ($images as $row) {
                $image = MobileImage::query()->where('URL', '=', $row)->firstOrFail();

                $imageList .= $prefix . $image->id;
                $prefix = ',';
            }
        } else {
            $images = MobileImage::query()->where('URL', '=', $images)->firstOrFail();

            $imageList .= $prefix . $images->id;
            $prefix = ',';
        }
        $warranty = $request->get('warranty_id');

        if ($edit == null) {
            $warrantyUse = WarrantyUse::create([
                'descriptions' => $descriptions,
                'images' => $imageList,
                'warranty_id' => $warranty,
                'title' => $title

            ]);
            $request_use_warranty_id = $warrantyUse->id;

            $userrequest = new UserRequest();

            $addReq = $warrantyUse->userrequests()->save($userrequest);

        } else {

            $warranty_use = $request->get('use_warranty_id');

            $warrantyUse = WarrantyUse::query()->where('id', '=', $warranty_use)->update([
                'descriptions' => $descriptions,
                'images' => $imageList,
                'warranty_id' => $warranty,
                'title' => $title

            ]);

            $request_use_warranty_id = $warranty_use;

            $userrequest=UserRequest::query()
                ->where([['user_requestable_type','=','App\Models\WarrantyUse'],
                    ['user_requestable_id','=',$warranty_use],
                    ['done','=',0]])->first();

            if($userrequest!=null){
                $addReq = WarrantyUse::find($warranty_use)->userrequests()->update(['updated_at'=>Carbon::now()->toDateTimeString()]);
            }
        }
        $msg = null;
        if ($warrantyUse != null) {

            $notif = new Notification();
            $notif->setSenderId(auth()->user()->id);
            $notif->setType(3);
            $notif->setTitle('ثبت درخواست');
            $notif->setBody('درخواست استفاده از فراگارانتی شما با موفقیت ثبت شد.');

            $userNotif = new NotificationUser();
            $userNotif->setReceiverId(auth()->user()->id);

            $this->addNotif($notif, $userNotif);

            if ($addReq != null) {
                $msg = 'success';
            } else {
                $msg = 'error';
            }


//            return redirect()->back()->withErrors(['success'=>'درخواست شما با موفقیت ثبت شد!']);
            return redirect(route('use_all',$msg));

        } else {
//            return redirect()->back()->withErrors(['error'=>'متاسفانه درخواست شما ثبت نشد!']);
            return redirect(route('use_all','error'));

        }

//        return view('profile.warranty.use',['user'=>auth()->user(),'notification'=>self::getNotification(auth()->user()->id)]);
    }

    public function storeMedia(Request $request)
    {

        $image = $request->file('file');
        $image_name = time() . $image->getClientOriginalName();

        $mobile_image = MobileImage::create([
            'URL' => $image_name
        ]);

        $image->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/use_images/', $image_name);

        return response()->json([
            'name' => $image_name,
            'id' => $mobile_image->id,
            'original_name' => $image->getClientOriginalName(),
        ]);

        /*$ok=array();
        foreach ($request->input('document', []) as $file) {
            array_push($ok,'OK-');
        }
        return $ok;*/
    }

    public function useAll($msg='')
    {
        //dd($msg);
        $wallet = Wallet::where('user_id', auth()->id())->first();

        $useWarranty = WarrantyUse::query()->join('mobile_warranties as mw', 'mw.id', '=', 'warranty_uses.warranty_id')
            ->where('mw.owner_id', '=', auth()->user()->id)
            ->get(['warranty_uses.*']);

        /*foreach ($useWarranty as $item){
            echo $item->id;
        }
        die();
        dd($useWarranty->toArray());*/

        if ($msg!='')
            return view('profile.warranty.use_all')
                ->with([
                    'useWarranty' => $useWarranty,
                    'wallet' => $wallet,
                    $msg=>'msg',
                ]);

        else
        return view('profile.warranty.use_all')
            ->with([
                'useWarranty' => $useWarranty,
                'wallet' => $wallet,
            ]);
    }

    public function use_edit($id)
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $useWarranty = WarrantyUse::find($id);
        $images = Helpers::getImageFromDb($useWarranty->images);
        return view('profile.warranty.use_edit', [
            'warrantyUse' => $useWarranty,
            'images' => $images,
            'wallet' => $wallet,
        ]);
    }
}
