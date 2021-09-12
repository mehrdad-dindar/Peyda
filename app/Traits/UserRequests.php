<?php
namespace App\Traits;
use App\Models\UserRequest;

trait UserRequests{

    public function addRequest(UserRequest $request)
    {
        $result=0;
        $request=UserRequest::query()->create([

            'requestable_id'=>$request->getRequestableId(),
            'requestable_type'=>$request->getRequestableType(),

        ]);
        if ($request!=null){
            $result=1;
        }else{
            $result=0;
        }
        return $result;
    }

    public function getRequests(){

        $warranties=Mobile_warranty::join('commitment_ceilings as cc', 'mobile_warranties.price_range', '=', 'cc.id')
            ->join('status as s','mobile_warranties.status','=','s.id')
            ->where('owner_id','=',auth()->user()->id)
            ->get(['cc.price as cc_price','mobile_warranties.*','s.id as s_id','s.text as s_name']);

        return $warranties;

    }
}
