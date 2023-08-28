<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('Registrar', [UsuariosController::class, 'Registrar']);
Route::post('Login', [UsuariosController::class, 'Login']);
Route::group(['middleware'=>["auth:sanctum"]],function(){
    Route::get('PerfilUsuario', [UsuariosController::class, 'PerfilUsuario']);
    Route::get('LogOut', [UsuariosController::class, 'LogOut']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
