<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mobile_warranty;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\TransferWarranty;
use App\Models\Wallet;
use DateTime;
use Illuminate\Http\Request;
use App\Traits\Notifications;

class TransferWarrantyController extends Controller
{

    use Notifications;

    public function index($id)
    {
        $check_warranty = Mobile_warranty::where([['owner_id', '=', auth()->user()->id], ['id', '=', $id]])->get();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        if (sizeof($check_warranty) > 0) {

            return view('profile.warranty.transfer',
                [
                    'warranty_id' => $id,
                    'wallet'=>$wallet,
                ]);
        } else {
            return redirect()->back();
        }
    }

    public function transfer_store(Request $request)
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $warranty_id = $request->get('warranty_id');
        //dd($warranty_id);
        /*$transfer=TransferWarranty::query()->where([['warranty_id','=',$warranty_id],['sender_id','=',auth()->user()->id]])->get();

        return $transfer;*/
        $transfer = TransferWarranty::query()->where([['warranty_id', '=', $warranty_id], ['sender_id', '=', auth()->user()->id], ['receiver_id', '=', null]])->whereRaw('DATEDIFF(Now(),created_at)<1')->first();

        //return $transfer;


        if ($transfer != null) {
            //dd('null nist');
            $transfer_code = Mobile_warranty::query()->find($warranty_id);
            //dd($warranty_id,$transfer_code->toArray());
            return view('profile.warranty.transfer',
                [
                    'transfer_code' => $transfer_code->transfer_code,
                    'warranty_id' => $warranty_id,
                    'wallet'=>$wallet,
                ]);
        } else {
            //dd('null hast');

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
                    'wallet'=>$wallet,
                ]);
        }

    }

    public function receive_create()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        return view('profile.warranty.receive',[
            'wallet' =>$wallet,
        ]);
    }

    public function receive_store(Request $request)
    {
        //dd('inja');
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
                    $notif->setTitle('دریافت فراگارانتی');
                    $notif->setBody('فراگارانتی مورد نظر با موفقیت دریافت شد.');
                    $notif->setLink('/panel/warranty/mobile/');

                    $userNotif = new NotificationUser();
                    $userNotif->setReceiverId(auth()->user()->id);

                    $this->addNotif($notif, $userNotif);

                    $notif = new Notification();
                    $notif->setSenderId(auth()->user()->id);
                    $notif->setType(4);
                    $notif->setTitle('انتقال فراگارانتی');
                    $notif->setBody('فراگارانتی مورد نظر با موفقیت انتقال داده شد.');
                    $notif->setLink('/panel/warranty/mobile/');

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
        $wallet = Wallet::where('user_id', auth()->id())->first();
        return redirect()->back()->with(
            [
                $msg => 'done',
                'transfer_code' => $transfer_code,
                'wallet'=>$wallet]);
    }

}
