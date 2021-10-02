<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class SubscriberController extends Controller
{
    public function subscription(Request $request)
    {
        /*dd($request->toArray());*/
        $this->validate($request, [
            'email' => 'required|email|unique:subscribers',
            //TODO فعال سازی ریکپچا
            /*'g-recaptcha-response' => ['required',new Recaptcha()],*/
        ]);
        $subscriber = new Subscriber();
        if (Auth::check()){
            $subscriber->user_id = Auth::user()->id;
        }
        $subscriber->email = $request->email;
        $subscriber->save();
        return redirect('/')->with('success');

    }
}
