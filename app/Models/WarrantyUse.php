<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyUse extends Model
{
    use HasFactory;

    protected $fillable=['title','descriptions','images','warranty_id','percentage','status'];

    public function userrequests()
    {
        return $this->morphMany(UserRequest::class,'user_requestable');
    }

    public function Mobile_warranty()
    {
        return $this->belongsTo(Mobile_warranty::class,'warranty_id','id');
    }

}
