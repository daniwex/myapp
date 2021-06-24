<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    public function getOccapation(){
        return $this -> hasOne('App\Models\Occupation');
    }
}
