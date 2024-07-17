<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function jugadore(){
        return $this->belongsTo(Jugadore::class);
    }

    public function presidente(){
        return $this->hasOne(Presidente::class);
    }
   
    public function partidos(){
        return $this->belongsToMany(Partido::class);
    }

}
