<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardrt';
        return view('rt.dashboardrt', ['judul' => $judul]);
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

        return view('rt.pengumuman', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }

    public function dana_darurat()
    {
        $judul = 'Dana Darurat';
        // Ambil semua data dana darurat

        return view('rt.dana_darurat', ['judul' => $judul ]);
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

        return view('RT.iuran', compact('judul', 'belum_bayar', 'sudah_bayar', 'iuran_minggu_ini'));
    }

    public function data_warga(){
        
        $judul = 'Data Warga';
        return view('rt.data_warga',  ['judul'=>$judul]);
    }

    public function verifikasi()
    {
        $judul = 'Verifikasi Dana Darurat';
        $requests = [
            [
                'id' => 1,
                'nama' => 'Warga 1',
                'keluhan' => 'Butuh dana untuk keperluan mendesak.',
                'jumlah' => '500.000'
            ],
            [
                'id' => 2,
                'nama' => 'Warga 2',
                'keluhan' => 'Memerlukan dana darurat untuk pengobatan.',
                'jumlah' => '1.000.000'
            ],
        ];

        return view('rt.verifikasi', ['judul' => $judul, 'requests' => $requests]);
    }

    public function verifikasi_kas()
    {
        $judul = 'Kelola Data Kas';
        // Data kas contoh, ganti dengan data dari database
        $dataKas = [
            ['id' => 1, 'nama' => 'Warga 1', 'status' => 'Sudah Bayar'],
            ['id' => 2, 'nama' => 'Warga 2', 'status' => 'Belum Bayar'],
        ];
        return view('rt.verifikasi_kas', ['judul' => $judul, 'dataKas' => $dataKas]);
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

        return view('rt.kelola_pengumuman', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }


    
}
