<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable=[
        'requestable_id',
        'requestable_type',
        'done',
        'admin_id'];

    public function getRequestableId(){

        return "{$this->requestable_id}";
    }

    public function getRequestableType(){

        return "{$this->requestable_type}";
    }

    public function getAdminId(){

        return "{$this->admin_id}";
    }

    public function setRequestableId($value){

        $this->attributes['requestable_id'] = $value;
    }

    public function setRequestableType($value){

        $this->attributes['requestable_type'] = $value;
    }

    public function setAdminId($value){

        $this->attributes['admin_id'] = $value;
    }

}
