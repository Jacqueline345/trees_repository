<?php

use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function(){
    Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
    Route::get('/register',[App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/registrar',[App\Http\Controllers\AuthController::class, 'registrar'])->name('registrar');
    Route::post('/logear',[App\Http\Controllers\AuthController::class, 'logear'])->name('logear');
});

Route::middleware("auth")->group(function(){
    Route::get('/home',[App\Http\Controllers\AuthController::class, 'home'])->name('home');
    Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});


