<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiswaController::class, 'index']);
Route::get('/tambahnilaisiswa', [SiswaController::class, 'create']);
Route::post('/tambahnilaisiswa', [SiswaController::class, 'store']);
Route::get('/siswa/{siswa}', [SiswaController::class, 'show']);
