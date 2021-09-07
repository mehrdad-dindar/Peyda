<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WarrantyUse;
use Illuminate\Http\Request;

class UseWarrantyController extends Controller
{
    public function index($id)
    {
        return view('profile.warranty.use',['user'=>auth()->user(),'notification'=>self::getNotification(auth()->user()->id)]);
    }

    public function store(Request $request)
    {

        return $request->all();
//        return view('profile.warranty.use',['user'=>auth()->user(),'notification'=>self::getNotification(auth()->user()->id)]);
    }
}
