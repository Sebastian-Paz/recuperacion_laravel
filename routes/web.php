<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('gole/create',[GoleController::class,'create']);
Route::post('gole/store', [GoleController::class,'store'])->name('gole.store');
 Route::get('gole/listar',[GoleController::class,'index'])->name('gole.index');
 Route::get('gole/{gole}',[GoleController::class,'show'])->name('gole.show');
 Route::put('gole/{gole}',[GoleController::class,'update'])->name('gole.update');
 Route::delete('gole/{gole}',[GoleController::class,'destroy'])->name('gole.destroy');
 Route::get('gole/{gole}/editar',[GoleController::class,'edit'])->name('gole.edit');