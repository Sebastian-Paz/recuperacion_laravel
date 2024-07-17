<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gole extends Model
{
    use HasFactory;
    public function jugadore(){
        return $this->belongsTo(Jugadore::class);
    }

    public function partidos(){
        return $this->hasMany(Partido::class);
    }
}
