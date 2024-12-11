<?php

use App\Http\Controllers\ActualizaController;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function(){
    Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
    Route::get('/register',[App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/registrar',[App\Http\Controllers\AuthController::class, 'registrar'])->name('registrar');
    Route::post('/logear',[App\Http\Controllers\AuthController::class, 'logear'])->name('logear');
    Route::get('/access-denied', function(){
        return view('access-denied');
    })->name('access.denied');
});


Route::middleware("auth")->group(function(){
    Route::get('/home',[App\Http\Controllers\AuthController::class, 'home'])->name('home');
    Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/trees',[App\Http\Controllers\TreesController::class, 'index'])->name('trees');
    Route::post('/verArboles',[App\Http\Controllers\TreesController::class, 'verArboles'])->name('verArboles');
    Route::get('/comprar/{id}',[App\Http\Controllers\ComprarController::class, 'mostrarCompra'])->name('mostrarCompra');
    Route::post('/comprar',[App\Http\Controllers\ComprarController::class,'comprar'])->name('comprar');
    Route::get('/mis_compras',[App\Http\Controllers\MisComprasController::class, 'index'])->name('mis_compras');
    Route::post('/verCompras',[App\Http\Controllers\MisComprasController::class,'verCompras'])->name('verCompras');
    Route::get('/detalle',[App\Http\Controllers\DetallesController::class,'index'])->name('index');
    Route::get('/compra/detalles/{id}', [App\Http\Controllers\DetallesController::class, 'verDetalles'])->name('compra.detalles');
    Route::get('/history',[App\Http\Controllers\HistoryControler::class,'index'])->name('index');
    Route::get('/compras/history/{id}',[App\Http\Controllers\HistoryControler::class,'history'])->name('compra.history');
    Route::get('/compras/history',[App\Http\Controllers\HistoryControler::class,'history'])->name('history');
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/operadorDash', [App\Http\Controllers\OperadorController::class,'dash'])->name('operadorDash');
    Route::get('/verHistorial',[App\Http\Controllers\VerHistoryController::class, 'index'])->name('verHistorial');
    Route::post('/Verhistory',[App\Http\Controllers\VerHistoryController::class,'Verhistory'])->name('Verhistory');
    Route::get('/trees', [App\Http\Controllers\TreesController::class, 'index'])->name('trees');
    Route::get('/addTree', [App\Http\Controllers\TreesController::class, 'addTree'])->name('addTree');
    Route::post('/storeTree', [App\Http\Controllers\TreesController::class, 'storeTree'])->name('storeTree');
    Route::get('/Historial/actualiza/{id}', [ActualizaController::class, 'mostrarActualizacion'])->name('Historial.actualiza');
    Route::post('/store', [ActualizaController::class, 'store'])->name('store');
});