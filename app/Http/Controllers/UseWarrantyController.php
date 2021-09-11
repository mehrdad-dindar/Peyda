<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Mobile_warranty;
use App\Models\MobileImage;
use App\Models\TransferWarranty;
use App\Models\WarrantyUse;
use App\Models\Notification;
use App\Models\NotificationUser;
use Illuminate\Http\Request;
use Redirect;
use App\Models\UserRequest;
use App\Traits\UserMobileWarranties;
use App\Traits\UserRequests;

class UseWarrantyController extends Controller
{
    use UserMobileWarranties;
    use UserRequests;

    public function index($id)
    {
        $check_warranty=Mobile_warranty::where([['owner_id','=',auth()->user()->id],['id','=',$id]])->get();

        //dd($check_warranty->toArray());

        if(sizeof($check_warranty)>0) {

            return view('profile.warranty.use', [
                'warranty_id' => $id]);

        }else{
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {

        $descriptions = $request->get('descriptions');
        $title = $request->get('title');
        $images = $request->input('document_id');

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

        $warrantyUse = WarrantyUse::create([
            'descriptions' => $descriptions,
            'images' => $imageList,
            'warranty_id' => $warranty,
            'title' => $title

        ]);
        $msg = null;
        if ($warrantyUse != null) {

            $notif=Notification::create([
                'sender_id' => auth()->user()->id,
                'title' => 'ثبت درخواست',
                'type'=>3,
                'body' => 'درخواست استفاده از فراگارانتی شما با موفقیت ثبت شد.']);

            NotificationUser::create([
                'notification_id'=> $notif->id,
                'receiver_id'=> auth()->user()->id
            ]);

            $requestable=new UserRequest();
            $requestable->setRequestableId($warrantyUse->id);
            $requestable->setRequestableType('App\Models\WarrantyUse');

            $addReq=$this->addRequest($requestable);

            if($addReq==1){
                $msg='success';
            }else{
                $msg='error';
            }


//            return redirect()->back()->withErrors(['success'=>'درخواست شما با موفقیت ثبت شد!']);
            return view('profile.bimeh_all', [
                $msg => 'msg',
                'warranties' => $this->getWarranties()]);

        } else {
//            return redirect()->back()->withErrors(['error'=>'متاسفانه درخواست شما ثبت نشد!']);

            return view('profile.bimeh_all', [
                'error' => 'no',
                'warranties' => $this->getWarranties()]);

        }

//        return view('profile.warranty.use',['user'=>auth()->user(),'notification'=>self::getNotification(auth()->user()->id)]);
    }

    public function storeMedia(Request $request)
    {

        $image = $request->file('file');
        $image_name = time() . $image->getClientOriginalName();

        $mobile_image=MobileImage::create([
            'URL' => $image_name
        ]);

        $image->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/use_images/', $image_name);

        return response()->json([
            'name'          => $image_name,
            'id'          => $mobile_image->id,
            'original_name' => $image->getClientOriginalName(),
        ]);

        /*$ok=array();
        foreach ($request->input('document', []) as $file) {
            array_push($ok,'OK-');
        }
        return $ok;*/
    }
}
