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
        'sender_id',
        'closed'
    ];

    public function ticketdetails()
    {
        return $this->hasMany(TicketDetail::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

}
