<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
    use HasFactory;
    public function equipos(){
        return $this->hasMany(Equipo::class);
    }

    public function goles(){
        return $this->hasMany(Gole::class);
    }


}
