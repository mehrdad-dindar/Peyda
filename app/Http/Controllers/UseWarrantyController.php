<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\MobileImage;
use App\Models\WarrantyUse;
use Illuminate\Http\Request;

class UseWarrantyController extends Controller
{
    public function index($id)
    {
        return view('profile.warranty.use',['user'=>auth()->user(),
                                                  'notification'=>self::getNotification(auth()->user()->id),
                                                  'warranty_id'=>$id]);
    }

    public function store(Request $request)
    {

        $descriptions=$request->get('descriptions');
        $title=$request->get('title');
        $images=$request->input('document_id');

        $imageList=$prefix='';
        foreach ($images as $row){
            $image=MobileImage::query()->where('URL','=',$row)->first();

            $imageList .= $prefix  . $image->id ;
            $prefix = ',';
        }
        $warranty=$request->get('warranty_id');

        $warrantyUse=WarrantyUse::create([
            'descriptions' => $descriptions,
            'images'=>$imageList,
            'warranty_id'=>$warranty,
            'title'=>$title

        ]);

        if($warrantyUse!=null){
            return redirect()->back()->with('msg','درخواست شما با موفقیت ثبت شد!');
        }else{
            return redirect()->back()->with('msg','متاسفانه درخواست شما ثبت نشد!');
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
