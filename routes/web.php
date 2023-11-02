<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudNoticiasController;
use App\Http\Controllers\CrudAutoresController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Ruta para ir a la pantalla principal
Route::get('/', [HomeController::class, 'get_pantalla_inicial']);

//Noticias
Route::get('/Noticias', [CrudNoticiasController::class, 'index'])->name('noticias');
Route::get('/Noticias/FormularioAlta',[CrudNoticiasController::class,'create'])->name('formulario_de_alta');
Route::get('/Noticias/FormularioBaja',[CrudNoticiasController::class,'destroy'])->name('formulario_de_baja');
Route::get('/Noticias/FormularioEdicion',[CrudNoticiasController::class,'edit'])->name('formulario_de_edicion');

//Autores
Route::get('/Autores', [CrudAutoresController::class, 'index'])->name('autores');
Route::get('/Autores/FormularioAlta',[CrudAutoresController::class,'create'])->name('formulario_de_alta_autores');
Route::get('/Autores/FormularioBaja',[CrudNoticiasController::class,'destroy'])->name('formulario_de_baja_autores');
Route::get('/Autores/FormularioEdicion',[CrudNoticiasController::class,'edit'])->name('formulario_de_edicion_autores');