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
            'seen',
            'body'];

    public function notificationusers()
    {
        return $this->hasMany(NotificationUser::class,'notification_id','id');
    }


    public function getSenderId(){

        return "{$this->sender_id}";
    }

    public function getType(){

        return "{$this->type}";
    }

    public function getTitle(){

        return "{$this->title}";
    }

    public function getBody(){

        return "{$this->body}";
    }

    public function getLink(){

        return "{$this->link}";
    }

    public function setSenderId($value){

        $this->attributes['sender_id'] = $value;
    }

    public function setType($value){
        $this->attributes['type'] = $value;
    }

    public function setTitle($value){
        $this->attributes['title'] = $value;
    }

    public function setBody($value){
        $this->attributes['body'] = $value;

    }

    public function setLink($value){
        $this->attributes['link'] = $value;

    }

    public function notification_types()
    {
        return $this->belongsTo( NotifactionType::class);
    }

}
