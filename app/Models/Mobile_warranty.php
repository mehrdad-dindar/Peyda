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
        'phone_brand_id',
        'phone_model_id',
        'expiry_date',
        'imei1',
        'imei2',
        'activation_code',
        'activation_date',
        'transfer_code',
        'price_range',
        'fire_gift',
        'status',
        'addition_fire_commitment_id',
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
        return $this->belongsTo(User::class);
    }
}
