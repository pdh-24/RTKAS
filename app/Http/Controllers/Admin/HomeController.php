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

    public function Pengumuman()
    {
        $judul = 'pengumuman';
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

        return view('admin.pengumuman', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }

    public function dana_darurat()
    {
        $judul = 'dana_darurat';
        // Ambil semua data dana darurat

        return view('admin.dana_darurat', ['judul' => $judul ]);
    }
    public function iuran()
    {
        $judul = 'Informasi Iuran';
        
        // Mendapatkan data jumlah warga yang belum bayar iuran (Contoh: Ambil dari database)
        $belum_bayar = 100;

        // Mendapatkan data jumlah warga yang sudah bayar iuran (Contoh: Ambil dari database)
        $sudah_bayar = 200;

        // Mendapatkan informasi tentang iuran yang akan dilaksanakan minggu ini (Contoh: Ambil dari database)
        $iuran_minggu_ini = "Informasi tentang iuran yang akan dilaksanakan minggu ini.";

        return view('admin.iuran', compact('judul', 'belum_bayar', 'sudah_bayar', 'iuran_minggu_ini'));
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
