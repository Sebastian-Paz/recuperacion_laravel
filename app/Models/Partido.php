<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function gole(){
        return $this->belongsTo(Gole::class);
    }

    public function equipos(){
        return $this->belongsToMany(Equipo::class);
    }

}
