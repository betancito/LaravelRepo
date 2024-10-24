<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/{id}', [UserController::class, 'show'])->name('usuarios.show');
Route::delete('usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
Route::get('usuarios/edit/{id}', [UserController::class,  'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');

