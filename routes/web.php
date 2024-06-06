<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\CoprasController;
use App\Http\Controllers\RT\RTController;
use App\Http\Controllers\BENDAHARA\BendaharaController;
use App\Http\Controllers\WARGA\WargaController;
use App\Http\Controllers\COPRASNEW\CoprasnewController;
use App\Http\Controllers\COPRASNEW\SubKriteriaController;

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

                              //ADMIN
// Route untuk dashboard admin
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');   
Route::get('/tables', [AkunController::class, 'rute'])->name('table');
Route::get('/coba', [HomeController::class, 'coba']);

//Route untuk SPK metode Copras
Route::get('/copras', [CoprasController::class, 'index']);
Route::get('/spk', [CoprasController::class, 'spk']);
Route::get('/copras/tambah_kriteria', [CoprasController::class, 'tambah_krit']);
Route::POST('/copras/tambah_kriteria_simpan', [CoprasController::class, 'tambah_krit_simpan']);
Route::get('/copras/tambah_alternatif', [CoprasController::class, 'tambah_alt']);
Route::get('/copras/coba', [CoprasController::class, 'coba']);
Route::get('/copras/sunting_penilaian', [CoprasController::class, 'sunting_penilaian']);
Route::POST('/copras/sunting_penilaian/simpan', [CoprasController::class, 'simpan_sunting_penilaian']);

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
Route::get('/dashboardbendahara', [BendaharaController::class, 'index'])->name('dashboardbendahara'); 
Route::get('/dana_darurat_bendahara', [BendaharaController::class, 'dana_darurat_bendahara'])->name('dana_darurat_bendahara');
Route::get('/iuran_bendahara', [BendaharaController::class, 'iuran_bendahara'])->name('iuran_bendahara');
Route::get('/data_iuran_bendahara', [BendaharaController::class, 'data_iuran_bendahara'])->name('data_iuran_bendahara');
Route::get('/verifikasi_dana_darurat_bendahara', [BendaharaController::class, 'verifikasi_dana_darurat_bendahara'])->name('verifikasi_dana_darurat_bendahara');
Route::get('/laporan_kas_bendahara', [BendaharaController::class, 'laporan_kas_bendahara'])->name('laporan_kas_bendahara');



// Route untuk warga
Route::get('/dashboardwarga', [WargaController::class, 'index'])->name('dashboardwarga');
Route::get('/pengumuman_warga', [WargaController::class, 'pengumuman_warga'])->name('pengumuman_warga');
Route::get('/request_dana_darurat_warga', [WargaController::class, 'request_dana_darurat_warga'])->name('request_dana_darurat_warga');
Route::get('/bayar_iuran_warga', [WargaController::class, 'bayar_iuran_warga'])->name('bayar_iuran_warga');

//copras
Route::get('/dashboardcopras', [CoprasnewController::class, 'index'])->name('dashboardcopras');

// Kriteria Routes
Route::get('/data_kriteria', [CoprasnewController::class, 'data_kriteria'])->name('data_kriteria');
Route::get('/tambah_data_kriteria', [CoprasnewController::class, 'tambah_data_kriteria'])->name('tambah_data_kriteria');
Route::post('/simpan_data_kriteria', [CoprasnewController::class, 'simpan_data_kriteria'])->name('simpan_data_kriteria');
Route::get('/edit_data_kriteria/{id}', [CoprasnewController::class, 'edit_data_kriteria'])->name('edit_data_kriteria');
Route::put('/kriteria/{id}', [CoprasnewController::class, 'update_data_kriteria'])->name('update_data_kriteria');
Route::delete('/kriteria/{id}', [CoprasnewController::class, 'hapus_data_kriteria'])->name('hapus_data_kriteria');

// Sub Kriteria Routes
Route::get('/data_sub_kriteria', [CoprasnewController::class, 'data_sub_kriteria'])->name('data_sub_kriteria');
Route::get('/tambah_data_subkriteria/{kode}', [CoprasnewController::class, 'tambah_data_subkriteria'])->name('tambah_data_subkriteria');
Route::post('/simpan_data_subkriteria/{kode}', [CoprasnewController::class, 'simpan_data_subkriteria'])->name('simpan_data_subkriteria');
Route::get('/edit_data_subkriteria/{id}', [CoprasnewController::class, 'edit_data_subkriteria'])->name('edit_data_subkriteria');
Route::put('/update_data_subkriteria/{id}', [CoprasnewController::class, 'update_data_subkriteria'])->name('update_data_subkriteria');
Route::delete('/hapus_data_subkriteria/{id}', [CoprasnewController::class, 'hapus_data_subkriteria'])->name('hapus_data_subkriteria');

//data Alternatif
Route::get('/data_alternatif', [CoprasnewController::class, 'data_alternatif'])->name('data_alternatif');
Route::get('/tambah_data_alternatif', [CoprasnewController::class, 'tambah_data_alternatif'])->name('tambah_data_alternatif');
Route::post('/simpan_data_alternatif', [CoprasnewController::class, 'simpan_data_alternatif'])->name('simpan_data_alternatif');
Route::get('/edit_data_alternatif/{id}', [CoprasnewController::class, 'edit_data_alternatif'])->name('edit_data_alternatif');
Route::put('/update_data_alternatif/{id}', [CoprasnewController::class, 'update_data_alternatif'])->name('update_data_alternatif');
Route::delete('/hapus_data_alternatif/{id}', [CoprasnewController::class, 'hapus_data_alternatif'])->name('hapus_data_alternatif');

//penilaian
Route::get('/data_penilaian', [CoprasnewController::class, 'data_penilaian'])->name('data_penilaian');
Route::get('/input_data_penilaian/{id}', [CoprasnewController::class, 'input_data_penilaian'])->name('input_data_penilaian');
Route::post('/simpan_data_penilaian/{id}', [CoprasnewController::class, 'simpan_data_penilaian'])->name('simpan_data_penilaian');
Route::get('/edit_data_penilaian/{id}', [CoprasnewController::class, 'edit_data_penilaian'])->name('edit_data_penilaian');
Route::put('/update_data_penilaian/{id}', [CoprasnewController::class, 'update_data_penilaian'])->name('update_data_penilaian');
//data perhitungan
Route::get('/data_perhitungan', [CoprasnewController::class, 'data_perhitungan'])->name('data_perhitungan');

