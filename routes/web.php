<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MacetaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/ventas/pdf/{id}', [VentaController::class, 'pdf'])->name('pdf-ventas');

Route::controller(MacetaController::class)->group(function(){
    Route::get('/precios', 'precios')->name('precios');
    Route::get('/','index')->name('inicio');
});
Route::resource('macetas', MacetaController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentaController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');