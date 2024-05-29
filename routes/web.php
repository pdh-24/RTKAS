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

// Route untuk bendahara 
Route::get('/dashboardbendahara', [BendaharaController::class, 'index'])->name('dashboardbendahara'); 

// Route untuk warga
Route::get('/dashboardwarga', [WargaController::class, 'index'])->name('dashboardwarga');