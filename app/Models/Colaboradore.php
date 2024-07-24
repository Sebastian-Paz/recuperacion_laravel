<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradore extends Model
{
    use HasFactory;

    public function proyectos(){
        return $this->belongsToMany('proyecto::class');
    }

    public function pagos(){
        return $this->hasMany('Pago::class');
    }

}
