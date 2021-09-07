<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Redirect;

class UserNotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function check_notif($notifid, $dismiss='')
    {

        $redirect='';
        $notif=Notification::find($notifid);
        $notif->update([
            'seen'=>1
        ]);

        if($dismiss==0 || $dismiss==null){
            return Redirect::to($notif->link);
        }else{
            return redirect()->back();
        }
        //return Redirect::to($notif->link);
    }
}
