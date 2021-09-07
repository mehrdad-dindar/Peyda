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
}
