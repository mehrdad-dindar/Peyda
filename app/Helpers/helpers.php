<?php
namespace App\Helpers;
use App\Models\NotificationUser;

class Helpers
{
    public static function convertDateTimeToShamsi($created_at)
    {

        if($created_at!=null) {
            /*$d = date('Y-m-d-H-i-s', strtotime($created_at));

            $expD = explode("-", $d);

            $Year = $expD[0];
            $Month = $expD[1];
            $Day = $expD[2];
            $Hour = $expD[3];
            $Minute = $expD[4];
            $Second = $expD[5];*/

            $result =verta()->timestamp(strtotime($created_at))
                ->formatJalaliDatetime();
        }
        else{
            $result='بدون تاریخ';
        }

        return $result;
    }

    public static function getNotification($id)
    {
        $notification=NotificationUser::query()->where('receiver_id','=',$id)
            ->join('notifications as n', 'user_notifications.notification_id', '=', 'n.id')
            ->get(['n.*']);

        return $notification;
    }

}
