<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_brand extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function phone_models()
    {
        return $this->hasmany(Phone_model::class,'brand_id');
    }
}
