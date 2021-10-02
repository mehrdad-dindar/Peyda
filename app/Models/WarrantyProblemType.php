<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyProblemType extends Model
{
    use HasFactory;

    public function warrantyproblems()
    {
        return $this->hasMany(WarrantyProblem::class);
    }

}
