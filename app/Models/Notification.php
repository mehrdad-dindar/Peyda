<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable=[
            'sender_id',
            'link',
            'title',
            'type',
            'body'];

    public function notificationuser()
    {
        return $this->belongsTo(NotificationUser::class);
    }

}
