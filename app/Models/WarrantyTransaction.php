<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyTransaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'mobile_warranty_id',
        'wallet_history_id',
        'transaction_id'
    ];
}
