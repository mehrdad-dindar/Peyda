<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'importance',
        'unit_id',
        'sender_id'
    ];

    public function ticketdetails()
    {
        return $this->hasMany(TicketDetail::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'sender_id','id');
    }

}
