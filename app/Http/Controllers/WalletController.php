<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Http\Controllers\WalletHistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WalletController extends Controller
{
    public function index()
    {
        $history = (new WalletHistoryController())->history(1);
        return view('profile.wallet')->with([
            'user'      =>      auth()->user(),
            'history'   =>      $history,
        ]);
    }

    public function increase(Request $request)
    {
        $wallet = Wallet::where('user_id' , "=" ,auth()->id())->first();
        $wallet_val = $wallet->value;
        $new_wallet_val = 0;
        if ($wallet_val != "0"){
            $new_wallet_val = (int)Crypt::decryptString($wallet->value) + (int)$request['price'];
        }else{
            $new_wallet_val = (int)$request['price'];
        }

        $new_wallet_val = Crypt::encryptString($new_wallet_val);
        /*$wallet->value = Crypt::encryptString($new_wallet_val);*/
        Wallet::update([
            'value' => Crypt::encryptString($new_wallet_val),
            'title' => $request['title'],
        ]);
    }
}
