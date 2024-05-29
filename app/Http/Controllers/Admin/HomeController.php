<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $judul = 'Dashboard';
        return view('admin.dashboard', ['judul'=>$judul]);
    }

    
    public function coba()
    {
        return view('coba');
    }
    public function spk()
    {
        return view('spk');
    }

    public function kelola_dwarga(){
        
        $judul = 'Kelola_dwarga';
        return view('admin.kelola_dwarga',  ['judul'=>$judul]);
    }

    public function datakas_kelola()
    {
        $judul = 'datakas_kelola';
        // Data kas contoh, ganti dengan data dari database
        $dataKas = [
            ['id' => 1, 'nama' => 'Warga 1', 'status' => 'Sudah Bayar'],
            ['id' => 2, 'nama' => 'Warga 2', 'status' => 'Belum Bayar'],
        ];
        return view('admin.datakas_kelola', ['judul' => $judul, 'dataKas' => $dataKas]);
    }
    
    public function kelola_Pengumuman()
    {
        $judul = 'kelola_pengumuman';
        $pengumuman = [
            [
                'judul' => 'Informasi Kas Warga',
                'isi' => 'Jumlah kas warga saat ini adalah ...',
                'tanggal' => '2024-05-29',
            ],
            [
                'judul' => 'Laporan Kas',
                'isi' => 'Laporan kas bulan ini telah diterima ...',
                'tanggal' => '2024-05-29',
            ],
            [
                'judul' => 'Dana Darurat',
                'isi' => 'Minggu ini uang keluar untuk keperluan membeli tempat sampah.',
                'tanggal' => '2024-05-29',
            ],
        ];

        return view('admin.kelola_pengumuman', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }
}
