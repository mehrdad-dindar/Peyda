<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table='statuses';

    public function mobile_warranty()
    {
        return $this->hasMany(Status::class);
    }
}
