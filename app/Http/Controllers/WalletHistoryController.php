<?php

namespace App\Http\Controllers;

use App\Models\Wallet_history;
use Illuminate\Http\Request;

class WalletHistoryController extends Controller
{
    public function history()
    {
        return Wallet_history::where('user_id' , auth()->id())->orderBy('created_at', 'desc')->get();
    }
}
