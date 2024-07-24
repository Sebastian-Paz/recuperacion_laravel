<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    public function colaboradore(){
        return $this->belongsTo('Colaboradore::class');
    }

    public function tipo_pagos(){
        return $this->hasMany('Tipo_pago::class');
    }
}   
