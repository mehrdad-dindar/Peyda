<?php
namespace App\Traits;
use App\Models\Mobile_warranty;

trait UserMobileWarranties{
    public function getWarranties(){

        $warranties=Mobile_warranty::join('commitment_ceilings as cc', 'mobile_warranties.price_range', '=', 'cc.id')
        ->join('status as s','mobile_warranties.status','=','s.id')
        ->where('owner_id','=',auth()->user()->id)
        ->get(['cc.price as cc_price','mobile_warranties.*','s.id as s_id','s.text as s_name']);

        return $warranties;

    }
}
