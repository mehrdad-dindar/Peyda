<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageField extends Model
{
    use HasFactory;
    protected $table='image_fields';

    public function MobileImages(){
        return $this->hasMany(MobileImage::class);
    }

}
