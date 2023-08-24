<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ManCategory;

class SubCategroyModel extends Model
{
    use HasFactory;

    public function getCategroy(){
        return $this->belongsTo('App\Models\ManCategory','ForenKey','id');
    }
}



