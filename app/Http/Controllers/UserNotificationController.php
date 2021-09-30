<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Redirect;

class UserNotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function check_notif(Request $request)
    {

        $redirect='';
        $notifid=$request->get('notifid');
        $dismiss=$request->get('dismiss');

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
    public function index($id)
    {
        $notifications=NotificationUser::where('receiver_id',auth()->user()->id)->get();

        $wallet = Wallet::where('user_id', auth()->id())->first();
        return view('profile.notifications.index',['notifications'=>$notifications,'wallet'=>$wallet]);
    }
}
