<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/facturas/all', function () {
    return 'Bienvenido';
});

Route::get('/facturas/byId/{id}', function () {
    return 'Bienvenido';
});

Route::post('/facturas/insert', function () {
    return 'Bienvenido';
});

Route::put('/facturas/update', function () {
    return 'Bienvenido';
});

Route::delete('/facturas/delete/{id}', function () {
    return 'Bienvenido';
});

Route::get('clientes', [ClientesController::class, 'index']);

Route::get('clientes/byId/{id}', [ClientesController::class, 'show']);

Route::get('clientes/create', [ClientesController::class, 'create']);

Route::post('clientes/store', [ClientesController::class, 'store']);

Route::get('clientes/edit/{id}', [ClientesController::class, 'edit']);

Route::put('clientes/update', [ClientesController::class, 'update']);

Route::get('clientes/destroy/{id}', [ClientesController::class, 'destroy']);

Route::delete('clientes/delete', [ClientesController::class, 'delete']);