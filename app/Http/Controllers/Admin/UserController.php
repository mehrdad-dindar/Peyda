<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserRequest;
use App\Traits\Notifications;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Notifications;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($status='')
    {
        /*$users = User::query()->leftJoin('user_notifications as un', 'users.id','=','un.receiver_id')
            ->leftJoin('notifications as n','n.id','=','un.notification_id')->where([['users.id', '!=',auth()->user()->id],['users.user_type','!=','admin']])->groupBy('users.id')->get(['users.*','n.sender_id']);*/

        if($status!=null) {
            if ($status == 1) {
                $users = User::query()->where([['role_id', '!=', 1], ['status',1]])->orderBy('id', 'desc')->get();
            }elseif($status==0){
                $users = User::query()->where([['role_id', '!=', 1], ['status',0]])->orderBy('id', 'desc')->get();
            }else{
                $users = User::query()->where([['role_id', '!=', 1], ['status',0]])->orderBy('id', 'desc')->get();
                $users=$this->userNewRequestCheck($users,0);
            }
        }else {
            $users = User::query()->where('role_id', '!=', 1)->orderBy('id', 'desc')->get();
            $users=$this->userNewRequestCheck($users);
        }


        /*$users=User::find(2);
        dd($users=$users->userrequests->toArray());*/

        return view('dashboard.users.all', compact(['users']));
        //return $usersAuth;
    }

    public function userNewRequestCheck($users,$taeed=1)
    {
        foreach ($users as $key=>$user) {
            $userrequest = $user->userrequests()->first();
            if ($userrequest != null) {
                $userrequest_update = $userrequest->updated_at;
                $user_update = $user->updated_at;

                if ($userrequest_update->lte($user_update)) {
                    if ($userrequest->done == 0) {
                        $users[$key]['new'] = 1;

                    } else {
                        $users[$key]['new'] = 0;
                    }
                } else {
                    $users[$key]['new'] = 0;
                }
            }
        }

        return $users;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($id,$auth='')
    {
        $user = User::find($id);

        $phoneName=User::getPhoneName($user);
        $user['phoneName']=$phoneName;
        //dd($user['phoneName']);

        $userrequest=UserRequest::query()
            ->where([['user_requestable_type','=','App\Models\User'],
                ['user_requestable_id','=',$id]])->first();

        if($userrequest!=null) {
            if ($userrequest->admin_id == null) {
                $user->userrequests()->update(['admin_id' => auth()->user()->id]);

                $link = '/panel/edit_profile';

                $notif = new Notification();
                $notif->setSenderId(auth()->user()->id);
                $notif->setType(1);
                $notif->setLink($link);

                $userNotif = new NotificationUser();
                $userNotif->setReceiverId($user->id);

                $this->addNotif($notif, $userNotif);

            }
        }

        return view('dashboard.users.create', ['user'=>$user,'auth'=>$auth,'users']);
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
        $userRec=User::find($user_id);

        if ($status == 1) {
            $descriptions = 'احراز هویت شما تایید شده است.';
            $user=User::query()->where('id', '=', $user_id)->update([
                'status' => 1
            ]);

            User::find($user_id)->userrequests()->update(['done'=>1]);
            $this->sendPattern($userRec,'6ki49gc097',['name'=>$userRec->getFullNameAttribute($userRec)]);
        } else {
            $descriptions = $request->get('descriptions');
            $this->sendPattern($userRec,'y8j4i7ebrl',['name'=>$userRec->getFullNameAttribute($userRec)]);
        }
        $admin_id = $request->get('admin_id');
        $link = '/panel/edit_profile';

        $notifUser=Notification::query()->join('user_notifications as un','un.notification_id','=','notifications.id')->where([['un.receiver_id','=',$user_id],['notifications.type','=',1]])->first(['notifications.id']);

        $notif=new Notification();
        $notif->setSenderId($admin_id);
        $notif->setType(1);
        $notif->setTitle('احراز هویت');
        $notif->setBody($descriptions);
        $notif->setLink($link);

        $userNotif=new NotificationUser();
        $userNotif->setReceiverId($user_id);

        $this->addNotif($notif,$userNotif);


        $user=User::find($user_id);

        $user->userrequests()->update(['updated_at'=>Carbon::now()->toDateTimeString()]);
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
