<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_model extends Model
{
    use HasFactory;

    protected $fillable=['name','brand_id'];

    public function phone_brand()
    {
        return $this->belongsTo(Phone_brand::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function mobile_warranty()
    {
        return $this->hasMany(Mobile_warranty::class);
    }
}
