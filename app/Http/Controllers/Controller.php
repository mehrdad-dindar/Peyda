<?php

namespace App\Http\Controllers;

use App\Models\NotificationUser;
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
            ->where('n.seen','=',0)
            ->whereNotNull('n.title')
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

}
