<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/publicaciones', [PublicacionesController::class, 'index'])->name('publicaciones.index');
Route::get('/publicaciones/create', [PublicacionesController::class, 'create'])->name('publicaciones.create');
Route::post('/publicaciones', [PublicacionesController::class, 'store'])->name('publicaciones.store');
