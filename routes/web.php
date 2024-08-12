<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KelasController::class, 'index']);
Route::get('/tambahnilaisiswa', [SiswaController::class, 'create']);
Route::post('/tambahnilaisiswa', [SiswaController::class, 'store']);
