<?php

namespace App\Models;
use App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public function restaurants()
    {
        return $this->belongsTo( Restaurant::class,'restaurant_id','id');
    }
}
