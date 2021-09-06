<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationUser extends Model
{
    use HasFactory;
    protected $table='user_notifications';

    protected $fillable=[

        'receiver_id',
        'notification_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
