<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::put('/atualiza-usuario/{id}', [UsuarioController::class, 'update']);
Route::delete('/deleta-usuario/{id}', [UsuarioController::class, 'delete']);
