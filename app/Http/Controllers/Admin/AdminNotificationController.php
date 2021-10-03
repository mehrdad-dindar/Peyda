<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function index()
    {
        $notifications=NotificationUser::all();
        return view('dashboard.notifications.index',['notifications'=>$notifications]);
    }
}
