<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\NotificationUser;
use App\Models\Wallet;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index($id)
    {
        $notifications=NotificationUser::where('receiver_id',auth()->user()->id)->get();

        $wallet = Wallet::where('user_id', auth()->id())->first();
        return view('profile.notifications.index',['notifications'=>$notifications,'wallet'=>$wallet]);
    }
}
