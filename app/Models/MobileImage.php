<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileImage extends Model
{
    use HasFactory;
    protected $table='mobile_images';

    public function ImageFields()
    {
        return $this->belongsTo(ImageFields::class);
    }
}
