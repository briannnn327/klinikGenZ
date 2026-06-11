<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\SurveyController;

// --- UBAH BARIS INI ---
// Awalnya showLogin, ubah menjadi index
Route::get('/',        [AuthController::class, 'index']); 

// Auth
Route::get('/login',   [AuthController::class, 'showLogin']);
Route::post('/login',  [AuthController::class, 'login']);
Route::get('/register',  [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout',    [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [PasienController::class, 'dashboard']);

// Pendaftaran Pasien
Route::get('/pasien',        [PasienController::class, 'index']);
Route::get('/pasien/daftar', [PasienController::class, 'create']);
Route::post('/pasien',       [PasienController::class, 'store']);

// Antrian
Route::get('/antrian',              [AntrianController::class, 'index']);
Route::post('/antrian/{id}/update', [AntrianController::class, 'update']);

// Survey
Route::get('/survey',        [SurveyController::class, 'index']);
Route::get('/survey/isi',    [SurveyController::class, 'create']);
Route::post('/survey',       [SurveyController::class, 'store']);