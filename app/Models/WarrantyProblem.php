<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyProblem extends Model
{
    use HasFactory;

    protected $fillable=[
      'mobile_warranty_id',
      'warranty_problem_type_id',
      'price'
    ];


    public function Mobile_warranty()
    {
        return $this->belongsTo(Mobile_warranty::class,'mobile_warranty_id','id');
    }

    public function warrantyproblemtype()
    {
        return $this->belongsTo(WarrantyProblemType::class);
    }

}
