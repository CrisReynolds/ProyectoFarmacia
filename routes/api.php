<?php

use App\Http\Controllers\AuthController;
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
//Route::get('/mostrarCategoria',[CategoriaController::class,'index']);
//Route::get('/mostrarProducto',[ProductoController::class,'index']);
// Route::get('/mostrar',[UserController::class,'index']);
// Route::delete('/usuario/eliminar/{id}',[UserController::class,'destroy']);
// Route::post('/usuario/nuevo',[UserController::class,'store']);
// Route::put('/usuario/actualizar/{id}',[UserController::class,'update']);

Route::post('login',[AuthController::class,'login']);

// return $request->user();

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

Route::resource('/cliente',ClienteController::class);
Route::resource('/usuario',UserController::class);//CRUD
Route::post('/usuario/imagen',[UserController::class,'imageUpload']);
// Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/categoria',CategoriaController::class);
    Route::resource('/producto',ProductoController::class);
    Route::resource('/venta',VentaController::class);
    Route::get('/venta/detalle/{fecha}/{userId}/{clienteId}',[VentaController::class,'detalle']);
    Route::resource('/transaccion',TransaccionController::class);
    Route::get('/categoria/productos/{id}',[CategoriaController::class,'productos']);
    Route::get('/producto/meses/{gestion}',[ProductoController::class,'meses']);
// });
Route::get('/usuario/imagen/{nombre}',[UserController::class,'image']);
