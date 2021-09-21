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
        return $this->belongsTo(User::class,'receiver_id','id');
    }

    public function notifications()
    {
        return $this->belongsTo(Notification::class,'notification_id','id');
    }


    public function getReceiverId(){

        return "{$this->receiver_id}";
    }

    public function getNotificationId(){

        return "{$this->notification_id}";
    }

    public function setReceiverId($value){

        $this->attributes['receiver_id'] = $value;
    }

    public function setNotificationId($value){

        $this->attributes['notification_id'] = $value;
    }

}
