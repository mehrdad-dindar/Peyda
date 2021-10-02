<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile_warranty extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    protected $fillable = [
        'owner_id',
        'buyer_id',
        'phone_model_id',
        'expiry_date',
        'activation_code',
        'activation_date',
        'phone_model_other',
        'transfer_code',
        'commitment_ceiling_id',
        'fire_gift',
        'status_id',
        'addition_fire_commitment_id',
        'usable_percentage'
    ];
    /**
     * @var mixed
     */

    public function Fire_commitment_ceiling()
    {
        return $this->belongsTo(Fire_commitment_ceiling::class,'addition_fire_commitment_id');
    }

    public function Commitment_ceiling()
    {
        return $this->belongsTo(Commitment_ceiling::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class,'owner_id');
    }

    public function BuyerUser()
    {
        return $this->belongsTo(User::class,'buyer_id');
    }

    public function phone_model()
    {
        return $this->belongsTo(Phone_model::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function userrequests()
    {
        return $this->morphMany(UserRequest::class,'user_requestable');
    }

    public function warrantyuses()
    {
        return $this->hasMany(WarrantyUse::class,'warranty_id','id');
    }

    public function getPhoneName(Mobile_warranty $mobile_warranty)
    {
        $phone_brand=$mobile_warranty->phone_model->phone_brand->name;
        if($mobile_warranty->phone_model_other!=null){
            $phone_model=$mobile_warranty->phone_model_other;
        }else{
            $phone_model=$mobile_warranty->phone_model->name;
        }

        return $phone_brand.' / '.$phone_model;
    }
}
