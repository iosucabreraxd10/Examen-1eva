<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DentistaController;
use App\Models\dentista;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dentista/index', [DentistaController::class, 'index']);
Route::get('/dentista/create', [DentistaController::class, 'create']);
Route::get('/dentista/edit/{id}', [DentistaController::class, 'edit']);
Route::post('/dentista/store', [DentistaController::class, 'store']);
Route::patch('/dentista/update/{id}', [DentistaController::class, 'update']);
Route::delete('/dentista/delete', [DentistaController::class, 'delete']);


Route::get('/cliente/index', [ClienteController::class, 'index']);
Route::get('/cliente/create', [ClienteController::class, 'create']);
Route::post('/cliente/store', [ClienteController::class, 'store']);

