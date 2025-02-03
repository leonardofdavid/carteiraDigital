<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LojistaController;
use App\Http\Controllers\TransacaoController;

Route::resource('clientes', ClienteController::class);
Route::resource('lojistas', LojistaController::class);
Route::resource('transacoes', TransacaoController::class);
