<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone_brand extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name'];

    public function phone_models()
    {
        return $this->hasMany(Phone_model::class,'brand_id');
    }
}
