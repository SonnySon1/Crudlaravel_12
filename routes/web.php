<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiswaController::class, 'index']);
Route::get('/create', [SiswaController::class, 'create']);
Route::post('/create/store', [SiswaController::class, 'store']);
Route::get('/delete/{id}', [SiswaController::class, 'destroy']);
