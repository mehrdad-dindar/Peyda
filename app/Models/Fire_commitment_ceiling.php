<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fire_commitment_ceiling extends Model
{
    use HasFactory;

    public function Mobile_warranty()
    {
        $this->hasMany(Mobile_warranty::class);
    }
}
