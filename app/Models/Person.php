<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function accidents(){
        return $this->hasMany(Accident::class);
    }

    public function vehicles(){
        return $this->belongsToMany(Vehicle::class);
    }
}
