<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifactionType extends Model
{
    use HasFactory;
    protected $table='notification_types';

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
