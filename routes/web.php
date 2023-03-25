<?php

use App\Http\Controllers\AllPengaduanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifikasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// Register
Route::resource('register', RegisterController::class);

// Dashboard
route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Pengaduan
Route::resource('pengaduan', PengaduanController::class);
Route::get('allPengaduan', [AllPengaduanController::class, 'index'])->name('AllPengaduan.index');

// Tanggapan
Route::resource('tanggapan', TanggapanController::class);


Route::resource('verifikasi', VerifikasiController::class);

// Masyarakat
Route::resource('masyarakat', MasyarakatController::class);

// Petugas
Route::resource('petugas', PetugasController::class);

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('cetak_pdf', [LaporanController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('pengaduan/cetak/{id}', [PengaduanController::class, 'pdf'])->name('pengaduan.cetak');
