<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferWarranty extends Model
{
    use HasFactory;
    protected $table='transfer_warranties';
    protected $fillable=['sender_id', 'receiver_id', 'warranty_id'];

    public function userrequests()
    {
        return $this->morphMany(UserRequest::class,'user_requestable');
    }

}
