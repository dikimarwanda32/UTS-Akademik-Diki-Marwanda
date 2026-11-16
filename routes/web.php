<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NilaiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kurikulum', [KurikulumController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);
