<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserRequest;
use App\Traits\Notifications;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Notifications;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        /*$users = User::query()->leftJoin('user_notifications as un', 'users.id','=','un.receiver_id')
            ->leftJoin('notifications as n','n.id','=','un.notification_id')->where([['users.id', '!=',auth()->user()->id],['users.user_type','!=','admin']])->groupBy('users.id')->get(['users.*','n.sender_id']);*/

        $users=User::query()->where('role_id','!=',1)->orderBy('id','desc')->get();
        /*$users=User::find(2);
        dd($users=$users->userrequests->toArray());*/

        return view('dashboard.users.all', compact(['users']));
        //return $usersAuth;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($id,$auth='')
    {
        $user = User::find($id);

        $userrequest=UserRequest::query()
            ->where([['user_requestable_type','=','App\Models\User'],
                ['user_requestable_id','=',$id]])->first();

        if($userrequest->admin_id==null){
            $user->userrequests()->update(['admin_id'=>auth()->user()->id]);

            $link = '/panel/edit_profile';

            $notif=new Notification();
            $notif->setSenderId(auth()->user()->id);
            $notif->setType(1);
            $notif->setLink($link);

            $userNotif=new NotificationUser();
            $userNotif->setReceiverId($user->id);

            $this->addNotif($notif,$userNotif);

        }

        return view('dashboard.users.create', ['user'=>$user,'auth'=>$auth]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        if ($status == 1) {
            $descriptions = 'احراز هویت شما تایید شده است.';
            $user=User::query()->where('id', '=', $user_id)->update([
                'status' => 1
            ]);


            User::find($user_id)->userrequests()->update(['done'=>1]);
        } else {
            $descriptions = $request->get('descriptions');
        }
        $admin_id = $request->get('admin_id');
        $link = '/panel/edit_profile';

        $notifUser=Notification::query()->join('user_notifications as un','un.notification_id','=','notifications.id')->where([['un.receiver_id','=',$user_id],['notifications.type','=',1]])->first(['notifications.id']);

        if(sizeof($notifUser->toArray())==0) {

            //dd('if');

            $notif=new Notification();
            $notif->setSenderId($admin_id);
            $notif->setType(1);
            $notif->setTitle('احراز هویت');
            $notif->setBody($descriptions);
            $notif->setLink($link);

            $userNotif=new NotificationUser();
            $userNotif->setReceiverId($user_id);

            $this->addNotif($notif,$userNotif);

        }else{

            $notification = Notification::find($notifUser->id)->update([

                'body' => $descriptions,
                'title'=>'احراز هویت'

            ]);
            //dd($notification);
        }

        return redirect()->back()->with('success', 'تغییرات با موفقیت اعمال شد.');
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
