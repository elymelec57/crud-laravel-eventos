<?php

use Illuminate\Support\Facades\Route;
use App\Models\Evento;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $eventos = Evento::all();
    return view('index', compact('eventos'));
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

//Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'show'])->name('eventos.inicio');

Route::get('/Registrar-evento', [App\Http\Controllers\HomeController::class, 'create'])->name('eventos.create');

Route::post('/Registrar-evento', [App\Http\Controllers\HomeController::class, 'store'])->name('eventos.store');

Route::get('/evento/{evento}',[App\Http\Controllers\HomeController::class,'edit'])->name('eventos.edit');

Route::put('/evento/{evento}',[App\Http\Controllers\HomeController::class,'update'])->name('eventos.update');

Route::delete('/evento/{evento}',[App\Http\Controllers\HomeController::class,'destroy'])->name('eventos.destroy');