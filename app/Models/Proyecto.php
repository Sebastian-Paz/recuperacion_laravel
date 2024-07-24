<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    public function clientes(){
        return $this->hasMany('Cliente::class');
    }

    public function colaboradores(){
        return $this->belongsToMany('Colaboradore::class');
    }
    
}
