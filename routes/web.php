<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/quemsomos', [QuemSomosController::class, 'quemsomos'])->name('site.quemsomos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');
