<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    const EXPIRATION_TIME = 30; // minutes

    use HasFactory;
    protected $guarded=[];

    public function emailable()
    {
        return $this->morphTo();
    }

    public function isExpired()
    {
        return $this->created_at->diffInMinutes(Carbon::now()) > static::EXPIRATION_TIME;
    }

    public function isUsed()
    {
        return $this->used;
    }

    public function isValid()
    {
        return !$this->isUsed() && !$this->isExpired();
    }

}
