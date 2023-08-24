<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManCategory extends Model
{
    use HasFactory;
    public function getSubCategroy(){
        return $this->hasOne('App\Models\SubCategroyModel','ForenKey','id');
    }
}



