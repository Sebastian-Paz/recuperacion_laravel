<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente/create',[ClienteController::class,'create']);
 Route::post('cliente/store', [ClienteController::class,'store'])->name('cliente.store');
  Route::get('cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
  Route::get('cliente/{cliente}',[ClienteController::class,'show'])->name('cliente.show');
  Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');
  Route::delete('cliente/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');
  Route::get('cliente/{cliente}/editar',[ClienteController::class,'edit'])->name('cliente.edit');