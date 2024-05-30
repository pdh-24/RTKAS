<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\CoprasController;
use App\Http\Controllers\RT\RTController;
use App\Http\Controllers\BENDAHARA\BendaharaController;
use App\Http\Controllers\WARGA\WargaController;
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

// Route untuk dashboard admin
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');   
Route::get('/tables', [AkunController::class, 'rute'])->name('table');
Route::get('/coba', [HomeController::class, 'coba']);
Route::get('/copras', [CoprasController::class, 'index']);
Route::get('/spk', [CoprasController::class, 'spk']);
//informasi admin
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/dana_darurat', [HomeController::class, 'dana_darurat'])->name('dana_darurat');
Route::get('/iuran', [HomeController::class, 'iuran'])->name('iuran');
//kelola admin
Route::get('/kelola_dwarga', [HomeController::class, 'kelola_dwarga'])->name('kelola_dwarga');
Route::get('/datakas_kelola', [HomeController::class, 'datakas_kelola'])->name('datakas_kelola');
Route::get('/kelola_pengumuman', [HomeController::class, 'kelola_pengumuman'])->name('kelola_pengumuman');



// Route untuk dashboard RT
Route::get('/dashboardrt', [RTController::class, 'index'])->name('dashboardrt');
//informasi rt
Route::get('/pengumuman_rt', [RTController::class, 'pengumuman_rt'])->name('pengumuman_rt');  
Route::get('/dana_darurat_rt', [RTController::class, 'dana_darurat_rt'])->name('dana_darurat_rt');

//kelola rt
Route::get('/data_warga', [RTController::class, 'data_warga'])->name('data_warga');
Route::get('/verifikasi', [RTController::class, 'verifikasi'])->name('verifikasi');
Route::get('/verifikasi_kas', [RTController::class, 'verifikasi_kas'])->name('verifikasi_kas');
Route::get('/kelola_pengumuman_rt', [RTController::class, 'kelola_pengumuman_rt'])->name('kelola_pengumuman_rt');


//bendahara
Route::get('/pengumuman_bendahara', [BendaharaController::class, 'pengumuman_bendahara'])->name('pengumuman_bendahara');  


// Route untuk bendahara 
Route::get('/dashboardbendahara', [BendaharaController::class, 'index'])->name('dashboardbendahara'); 
Route::get('/dana_darurat_bendahara', [BendaharaController::class, 'dana_darurat_bendahara'])->name('dana_darurat_bendahara');
Route::get('/iuran_bendahara', [BendaharaController::class, 'iuran_bendahara'])->name('iuran_bendahara');

// Route untuk warga
Route::get('/dashboardwarga', [WargaController::class, 'index'])->name('dashboardwarga');