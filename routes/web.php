<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\CitasController;

//Clientes
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/create/cliente', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/store/cliente', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/edit/cliente/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/update/cliente/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/show/cliente/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::delete('/delete/cliente/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
    

//Mascotas
Route::get('/mascotas', [MascotasController::class, 'index'])->name('mascotas.index');
Route::get('/create/mascota', [MascotasController::class, 'create'])->name('mascotas.create');
Route::post('/store/mascota', [MascotasController::class, 'store'])->name('mascotas.store');
Route::get('/edit/mascota/{id}', [MascotasController::class, 'edit'])->name('mascotas.edit');
Route::put('/update/mascota/{id}', [MascotasController::class, 'update'])->name('mascotas.update');
Route::get('/show/mascota/{id}', [MascotasController::class, 'show'])->name('mascotas.show');
Route::delete('/delete/mascota/{id}', [MascotasController::class, 'destroy'])->name('mascotas.destroy');



//Citas
Route::get('/citas', [CitasController::class, 'index'])->name('citas.index');
Route::get('/create/cita', [CitasController::class, 'create'])->name('citas.create');
Route::get('/citas/citas_fecha', [CitasController::class, 'citas_fecha'])->name('citas.citas_fecha');
Route::post('/store/cita', [CitasController::class, 'store'])->name('citas.store');
Route::get('/edit/cita/{id}', [CitasController::class, 'edit'])->name('citas.edit');
Route::put('/update/cita/{id}', [CitasController::class, 'update'])->name('citas.update');
Route::get('/show/cita/{id}', [CitasController::class, 'show'])->name('citas.show');
Route::delete('/delete/cita/{id}', [CitasController::class, 'destroy'])->name('citas.destroy');
Route::get('/calendario', [CitasController::class, 'index_calendario'])->name('citas.calendario');
//Route::get('/calendario/mostrar', [CitasController::class, 'mostrar_calendario'])->name();


