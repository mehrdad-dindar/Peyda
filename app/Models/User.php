<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'user_type',
        'avatar',
        'city_id',
        'address',
        'phone_num',
        'melli_code',
        'melli_card',
        'birthday',
        'bank_card',
        'bank_id',
        'bank_shaba',
        'phone_brand_id',
        'phone_model_id',
        'email',
        'password',
    ];

    use HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userTypeAuth()
    {
        return $this->user_type;
    }

    public function city()
    {
        return $this->belongsTo(city::class);
    }

    public function Phone_brand()
    {
        return $this->belongsTo(Phone_brand::class,'phone_brand_id');
    }

    public function phone_model()
    {
        return $this->belongsTo(Phone_model::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class,'user_id');
    }
    public function wallettransactions()
    {
        return $this->hasMany(WalletTransaction::class,'user_id');
    }

    public function mobile_warranties()
    {
        return $this->hasMany(Mobile_warranty::class,'owner_id');
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    public function wallet_history()
    {
        return $this->hasMany(Wallet_history::class);
    }
}
