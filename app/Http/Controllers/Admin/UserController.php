<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->leftJoin('user_notifications as un', 'users.id','=','un.receiver_id')
            ->leftJoin('notifications as n','n.id','=','un.notification_id')->get(['users.*','n.sender_id']);

        return view('dashboard.users.all', compact(['users']));
        //return $usersAuth;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::find($id);
        $notifUser=Notification::query()->join('user_notifications as un','un.notification_id','notifications.id')->where('un.receiver_id','=',$id)->count();

        if($notifUser<=0) {

            $notif = Notification::create([

                'sender_id' => auth()->user()->id,
                'type' => 1
            ]);
            NotificationUser::create([
                'receiver_id' => $user->id,
                'notification_id' => $notif->id
            ]);
        }


        return view('dashboard.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        if ($status == 1) {
            $descriptions = 'احراز هویت شما تایید شده است.';
            User::query()->where('id', '=', $user_id)->update([
                'status' => 1
            ]);
        } else {
            $descriptions = $request->get('descriptions');
        }
        $admin_id = $request->get('admin_id');
        $link = '/panel/edit_profile';

        $notification = Notification::create([
            'sender_id' => $admin_id,
            'link' => $link,
            'type'=>1,
            'title' => 'احراز هویت',
            'body' => $descriptions
        ]);

        NotificationUser::create([
            'receiver_id' => $user_id,
            'notification_id' => $notification->id
        ]);

        return redirect()->back()->with('error', 'تغییرات با موفقیت اعمال شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
