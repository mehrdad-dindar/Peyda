<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationUser extends Model
{
    use HasFactory;
    protected $table='user_notifications';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
