<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mobile_warranty;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\TransferWarranty;
use DateTime;
use Illuminate\Http\Request;

class TransferWarrantyController extends Controller
{

    public function index($id)
    {
        $check_warranty=Mobile_warranty::where([['owner_id','=',auth()->user()->id],['id','=',$id]])->get();


        if(sizeof($check_warranty)>0) {

            return view('profile.warranty.transfer',
                ['user' => auth()->user(),                                                                                             'notification' => self::getNotification(auth()->user()->id),
                    'warranty_id' => $id]);
        }else{
            return redirect()->back();
        }
    }

    public function transfer_store(Request $request)
    {
        $warranty_id=$request->get('warranty_id');
        /*$transfer=TransferWarranty::query()->where([['warranty_id','=',$warranty_id],['sender_id','=',auth()->user()->id]])->get();

        return $transfer;*/
        $transfer=TransferWarranty::query()->where([['warranty_id','=',$warranty_id],['sender_id','=',auth()->user()->id],['receiver_id','=',null]])->whereRaw('DATEDIFF(Now(),created_at)<1')->first();

        //return $transfer;


        if($transfer!=null){
            $transfer_code=Mobile_warranty::find($warranty_id)->first()->transfer_code;
            return view('profile.warranty.transfer',
                ['user' => auth()->user(),
                    'transfer_code'=>$transfer_code,                                                                                        'notification' => self::getNotification(auth()->user()->id),
                    'warranty_id' => $warranty_id]);
        }else{

            $transfer_code = "T_".self::RandomString().time();

            $warranty_up=Mobile_warranty::query()->where('id','=',$warranty_id)->update([
                'transfer_code'=>$transfer_code
            ]);

            $timestamp = strtotime("tomorrow");

            TransferWarranty::create(['sender_id'=>auth()->user()->id,
                'warranty_id' => $warranty_id]);

            if($warranty_up!=null){
                $msg='success';
            }else{
                $msg='error';
            }
            return view('profile.warranty.transfer',
                ['user' => auth()->user(),
                    $msg => 'done',
                    'transfer_code'=>$transfer_code,                                                                                        'notification' => self::getNotification(auth()->user()->id),
                    'warranty_id' => $warranty_id]);
        }

    }

    public function receive_create()
    {
        return view('profile.warranty.receive',
            ['user' => auth()->user(),                                                                                       'notification' => self::getNotification(auth()->user()->id)]);
    }

    public function receive_store(Request $request)
    {
        $transfer_code=$request->get('transfer_code');

        $transfer=Mobile_warranty::query()->join('transfer_warranties as tw','tw.warranty_id','=','mobile_warranties.id')->where([['tw.receiver_id','=',null],['mobile_warranties.transfer_code','=',$transfer_code]])->whereRaw('DATEDIFF(Now(),tw.created_at)<1')->first(['mobile_warranties.*','tw.sender_id as sender_id']);

        if($transfer!=null){
            $transfer_up=TransferWarranty::query()->update(['receiver_id'=>auth()->user()->id]);
            if($transfer_up!=null){
                $mobile_warranty=Mobile_warranty::query()->where('transfer_code','=',$transfer_code)->update(['owner_id'=>auth()->user()->id]);
                if($mobile_warranty!=null){
                    $notification=Notification::query()->create(['sender_id'=>auth()->user()->id,
                                                    'type'=>4,
                                                    'title'=>'دریافت بیمه نامه',
                                                    'body'=>'بیمه نامه مورد نظر با موفقیت دریافت شد.']);
                    NotificationUser::query()->create([
                        'notification_id' => $notification->id,
                        'receiver_id'=>auth()->user()->id
                    ]);
                    Notification::query()->create(['sender_id'=>auth()->user()->id,
                                                    'type'=>4,
                                                    'title'=>'انتقال بیمه نامه',
                                                    'body'=>'بیمه نامه مورد نظر با موفقیت انتقال داده شد.']);
                    NotificationUser::query()->create([
                        'notification_id' => $notification->id,
                        'receiver_id'=>$transfer->sender_id
                    ]);
                    $msg='success';
                }else{
                $msg='error';
            }
            }else{
                $msg='error';
            }
        }else{
            $msg='error';
        }
        return view('profile.warranty.receive',
            ['user' => auth()->user(),
                $msg => 'done',
                'transfer_code'=>$transfer_code,                                                                                      'notification' => self::getNotification(auth()->user()->id)]);
    }

}
