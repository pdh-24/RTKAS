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

    public function Pengumuman_rt()
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

        return view('rt.pengumuman_rt', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }

    public function dana_darurat_rt()
    {
        $judul = 'Dana Darurat';
        // Ambil semua data dana darurat

        return view('rt.dana_darurat_rt', ['judul' => $judul ]);
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

    public function kelola_Pengumuman_rt()
    {
        $judul = 'kelola_pengumuman_rt';
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

        return view('rt.kelola_pengumuman_rt', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }


    
}
