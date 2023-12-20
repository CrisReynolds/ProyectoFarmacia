<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\VentaController;

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
Route::get('/mostrarCategoria',[CategoriaController::class,'index']);
Route::get('/mostrarProducto',[ProductoController::class,'index']);
// Route::get('/mostrar',[UserController::class,'index']);
// Route::delete('/usuario/eliminar/{id}',[UserController::class,'destroy']);
// Route::post('/usuario/nuevo',[UserController::class,'store']);
// Route::put('/usuario/actualizar/{id}',[UserController::class,'update']);


Route::resource('/usuario',UserController::class);//CRUD
Route::resource('/cliente',ClienteController::class);
Route::resource('/venta',VentaController::class);
Route::resource('/transaccion',TransaccionController::class);
Route::post('/usuario/imagen',[UserController::class,'imageUpload']);
Route::get('/usuario/imagen/{nombre}',[UserController::class,'image']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
