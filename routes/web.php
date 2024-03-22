<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MacetaController;

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
Route::controller(MacetaController::class)->group(function(){

    Route::get('/','index')->name('inicio');
    Route::resource('macetas', MacetaController::class);
});

        // Articulos deportivos
        Route::get('/admin/articulo-deportivo', [ArtDeportController::class, 'IndexArticuloDeportivo'])->name('nuevo_articulo');
        Route::post('/admin/articulo-deportivo', [ArtDeportController::class, 'agregar_articulo_deportivo'])->name('añadir_articulo');
        Route::delete('/admin/articulo-deportivo/{id}',[ArtDeportController::class, 'eliminar_articulo'] )->name('eliminar_articulo');
        Route::get('/admin/articulo-deportivo/editar/{id}', [ArtDeportController::class, 'EditArtDeport'])->name('EditarArtDep');
        Route::put('/articulos/{id}', [ArtDeportController::class, 'actualizarArtDeport'])->name('articulos.actualizar');
        Route::get('/accesorio', [ArtDeportController::class, 'busquedaAjaxArtDeportAccesorio']);
        Route::get('/calzado', [ArtDeportController::class, 'busquedaAjaxArtDeportCalzado']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
