<?php

namespace App\Http\Controllers;

use App\Models\Mobile_warranty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front');
    }

    public function validation(Request $request)
    {
        $warranty = Mobile_warranty::where('activation_code' ,$request->validation_id)->first();
        $isValid = 0;

        if ($warranty != '' && $warranty->status_id == 2){
            $isValid = 1;
            $warranty['phone_name'] = $warranty->getPhoneName($warranty);
        }
        return view('validation')->with([
            'req' => $request,
            'warranty'=>$warranty,
            'isValid' => $isValid
        ]);
    }
}
