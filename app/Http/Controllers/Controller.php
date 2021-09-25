<?php

namespace App\Http\Controllers;

use App\Models\Mobile_warranty;
use App\Models\NotificationUser;
use App\Models\Status;
use App\Models\UserRequest;
use App\Models\WarrantyUse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }

    public static function getNotification($id)
    {
        $notification=NotificationUser::query()->where('receiver_id','=',$id)
            ->join('notifications as n', 'user_notifications.notification_id', '=', 'n.id')
            ->join('notification_types as nt','n.type','=','nt.id')
            ->where([['n.seen','=',0],['n.title','!=','']])
            ->whereNotNull('n.title')
            ->orderBy('id','desc')
            ->get(['n.*','nt.name as nt_name']);

        return $notification;
    }
    public static function getAdminNotification($id)
    {
        $notificationSeen=NotificationUser::query()->where('receiver_id','=',$id)
            ->rightJoin('notifications as n', 'user_notifications.notification_id', '=', 'n.id')
            ->rightJoin('notification_types as nt','n.type','=','nt.id')
            ->where('user_notifications.done','=',0);

        $notification=NotificationUser::query()
            ->rightJoin('notifications as n', 'user_notifications.notification_id', '=', 'n.id')
            ->rightJoin('notification_types as nt','n.type','=','nt.id')
            ->whereNull('receiver_id')
            ->where('user_notifications.done','=',0)
            ->union($notificationSeen)
            ->get();

        return $notification;
    }

    public static function getWaitingWarranties()
    {
        $waitings=Mobile_warranty::query()->where('status_id','=',6)->get();

        return $waitings;
    }

    public static function getUsesWarraties()
    {
        $key=0;
        $uses=WarrantyUse::query()->where('status','=',null)->orWhere('status','=',0)
            ->get();

        foreach ($uses as $use){
            if($use->userrequests()->exists()) {
                if ($use->userrequests->toArray()[0]['done'] == 0) {
                    $key++;
                }
            }

        }

        return $key;
    }

}
