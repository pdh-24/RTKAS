<?php

namespace App\Http\Controllers\BENDAHARA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BendaharaController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardbendahara';
        Log::info('BendaharaController index method called.');
        return view('bendahara.dasboardbendahara', ['judul' => $judul]);
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

        return view('bendahara.pengumuman', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }

    public function dana_darurat()
    {
        $judul = 'Dana Darurat';
        // Ambil semua data dana darurat

        return view('bendahara.dana_darurat', ['judul' => $judul ]);
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

        return view('bendahara.iuran', compact('judul', 'belum_bayar', 'sudah_bayar', 'iuran_minggu_ini'));
    }

}
