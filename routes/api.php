<?php

use App\Http\Controllers\ParteTrabajoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\LineaFacturaController;
use App\Http\Controllers\InventarioMaterialesController;
use \App\Http\Controllers\ControlHorarioController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/users', [UserController::class, 'index']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::post('/clientes/store', [ClienteController::class, 'store']);
    Route::get('/clientes/{id}', [ClienteController::class, 'find']);
    Route::put('/clientes/{id}', [ClienteController::class, 'update']);
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

    Route::get('/obras', [ObraController::class, 'index']);
    Route::post('/obras/store', [ObraController::class, 'store']);
    Route::get('/obras/{id}', [ObraController::class, 'find']);
    Route::put('/obras/{id}', [ObraController::class, 'update']);
    Route::delete('/obras/{id}', [ObraController::class, 'destroy']);

    Route::get('/facturas', [FacturaController::class, 'index']);
    Route::post('/facturas/store', [FacturaController::class, 'store']);
    Route::get('/facturas/{id}', [FacturaController::class, 'findById']);
    Route::put('/facturas/{id}', [FacturaController::class, 'update']);
    Route::delete('/facturas/{id}', [FacturaController::class, 'destroy']);

    Route::get('/lineas-factura', [LineaFacturaController::class, 'index']);
    Route::post('/lineas-factura/store', [LineaFacturaController::class, 'store']);
    Route::get('/lineas-factura/{id}', [LineaFacturaController::class, 'getById']);
    Route::put('/lineas-factura/{id}', [LineaFacturaController::class, 'update']);
    Route::delete('/lineas-factura/{id}', [LineaFacturaController::class, 'destroy']);


    Route::get('/inventario', [InventarioMaterialesController::class, 'index']);
    Route::post('/inventario/store', [InventarioMaterialesController::class, 'store']);
    Route::get('/inventario/find', [InventarioMaterialesController::class, 'find']);
    Route::put('/inventario/{id}', [InventarioMaterialesController::class, 'update']);
    Route::delete('/inventario/{id}', [InventarioMaterialesController::class, 'destroy']);


    Route::get('/partes', [ParteTrabajoController::class, 'index']);
    Route::post('/partes/store', [ParteTrabajoController::class, 'store']);
    Route::get('/partes/{fecha}', [ParteTrabajoController::class, 'find']);
    Route::put('/partes/{id}', [ParteTrabajoController::class, 'update']);
    Route::delete('/partes/{id}', [ParteTrabajoController::class, 'destroy']);

    Route::get('/tareas', [TareaController::class, 'index']);
    Route::post('/tareas/store', [TareaController::class, 'store']);
    Route::get('/tareas/{id}', [TareaController::class, 'find']);
    Route::put('/tareas/{id}', [TareaController::class, 'update']);
    Route::delete('/tareas/{id}', [TareaController::class, 'destroy']);

    /*Route::get('/registro', [ControlHorarioController::class, 'index']);
    Route::post('/registro/store', [ControlHorarioController::class, 'store']);
    Route::get('/registro/{id}', [ControlHorarioController::class, 'find']);
    Route::put('/registro/{id}', [ControlHorarioController::class, 'update']);
    Route::delete('/registro/{id}', [ControlHorarioController::class, 'destroy']);*/

});


