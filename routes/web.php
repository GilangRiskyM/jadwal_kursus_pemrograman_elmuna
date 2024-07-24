<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa_tambah', [SiswaController::class, 'create']);
Route::post('/tambah-siswa', [SiswaController::class, 'store']);
Route::get('/siswa/jadwal/{nama_siswa}', [JadwalController::class, 'show']);
Route::get('/siswa_edit/{id}', [SiswaController::class, 'edit']);
Route::put('/update-siswa/{id}', [SiswaController::class, 'update']);
Route::get('/siswa_hapus/{id}', [SiswaController::class, 'delete']);
Route::delete('/destroy-siswa/{id}', [SiswaController::class, 'destroy']);

Route::get('/program', [ProgramController::class, 'index']);
Route::get('/program_tambah', [ProgramController::class, 'create']);
Route::post('/tambah-program', [ProgramController::class, 'store']);
Route::get('/program_edit/{id}', [ProgramController::class, 'edit']);
Route::put('/update-program/{id}', [ProgramController::class, 'update']);
Route::get('/program_hapus/{id}', [ProgramController::class, 'delete']);
Route::delete('/destroy-program/{id}', [ProgramController::class, 'destroy']);

Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/jadwal_tambah', [JadwalController::class, 'create']);
Route::post('/tambah-jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal_edit/{id}', [JadwalController::class, 'edit']);
Route::put('/update-jadwal/{id}', [JadwalController::class, 'update']);
Route::get('/jadwal_hapus/{id}', [JadwalController::class, 'delete']);
Route::delete('/destroy-jadwal/{id}', [JadwalController::class, 'destroy']);
