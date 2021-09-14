<?php

namespace App\Http\Controllers;

use App\Casts\EncryptCast;
use App\Http\Controllers\Controller;
use App\Models\Mobile_warranty;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\TransferWarranty;
use App\Models\Wallet;
use DateTime;
use Illuminate\Http\Request;

class TransferWarrantyController extends Controller
{

    public function index($id)
    {
        $check_warranty = Mobile_warranty::where([['owner_id', '=', auth()->user()->id], ['id', '=', $id]])->get();
        $crypt = new EncryptCast();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        if (sizeof($check_warranty) > 0) {

            return view('profile.warranty.transfer',
                [
                    'warranty_id' => $id,
                    'crypt' => $crypt,
                    'wallet'=>$wallet,
                ]);
        } else {
            return redirect()->back();
        }
    }

    public function transfer_store(Request $request)
    {
        $crypt = new EncryptCast();
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $warranty_id = $request->get('warranty_id');
        /*$transfer=TransferWarranty::query()->where([['warranty_id','=',$warranty_id],['sender_id','=',auth()->user()->id]])->get();

        return $transfer;*/
        $transfer = TransferWarranty::query()->where([['warranty_id', '=', $warranty_id], ['sender_id', '=', auth()->user()->id], ['receiver_id', '=', null]])->whereRaw('DATEDIFF(Now(),created_at)<1')->first();

        //return $transfer;


        if ($transfer != null) {
            $transfer_code = Mobile_warranty::find($warranty_id)->first()->transfer_code;
            return view('profile.warranty.transfer',
                [
                    'transfer_code' => $transfer_code,
                    'warranty_id' => $warranty_id,
                    'crypt'=>$crypt,
                    'wallet'=>$wallet,
                ]);
        } else {

            $transfer_code = "T_" . self::RandomString() . time();

            $warranty_up = Mobile_warranty::query()->where('id', '=', $warranty_id)->update([
                'transfer_code' => $transfer_code
            ]);

            $timestamp = strtotime("tomorrow");

            TransferWarranty::create(['sender_id' => auth()->user()->id,
                'warranty_id' => $warranty_id]);

            if ($warranty_up != null) {
                $msg = 'success';
            } else {
                $msg = 'error';
            }
            return view('profile.warranty.transfer',
                [
                    $msg => 'done',
                    'transfer_code' => $transfer_code,
                    'warranty_id' => $warranty_id,
                    'crypt' => $crypt,
                    'wallet'=>$wallet,
                ]);
        }

    }

    public function receive_create()
    {
        $crypt = new EncryptCast();
        $wallet = Wallet::where('user_id', auth()->id())->first();
        return view('profile.warranty.receive',[
            'crypt' => $crypt,
            'wallet' =>$wallet,
        ]);
    }

    public function receive_store(Request $request)
    {
        $transfer_code = $request->get('transfer_code');

        $transfer = Mobile_warranty::query()->join('transfer_warranties as tw', 'tw.warranty_id', '=', 'mobile_warranties.id')->where([['tw.receiver_id', '=', null], ['mobile_warranties.transfer_code', '=', $transfer_code]])->whereRaw('DATEDIFF(Now(),tw.created_at)<1')->first(['mobile_warranties.*', 'tw.sender_id as sender_id']);

        if ($transfer != null) {
            $transfer_up = TransferWarranty::query()->update(['receiver_id' => auth()->user()->id]);
            if ($transfer_up != null) {
                $mobile_warranty = Mobile_warranty::query()->where('transfer_code', '=', $transfer_code)->update(['owner_id' => auth()->user()->id]);
                if ($mobile_warranty != null) {

                    $notif = new Notification();
                    $notif->setSenderId(auth()->user()->id);
                    $notif->setType(4);
                    $notif->setTitle('دریافت بیمه نامه');
                    $notif->setBody('بیمه نامه مورد نظر با موفقیت دریافت شد.');

                    $userNotif = new NotificationUser();
                    $userNotif->setReceiverId(auth()->user()->id);

                    $this->addNotif($notif, $userNotif);

                    $notif = new Notification();
                    $notif->setSenderId(auth()->user()->id);
                    $notif->setType(4);
                    $notif->setTitle('انتقال بیمه نامه');
                    $notif->setBody('بیمه نامه مورد نظر با موفقیت انتقال داده شد.');

                    $userNotif = new NotificationUser();
                    $userNotif->setReceiverId($transfer->sender_id);

                    $this->addNotif($notif, $userNotif);

                    $msg = 'success';
                } else {
                    $msg = 'error';
                }
            } else {
                $msg = 'error';
            }
        } else {
            $msg = 'error';
        }
        return view('profile.warranty.receive',
            [
                $msg => 'done',
                'transfer_code' => $transfer_code]);
    }

}
