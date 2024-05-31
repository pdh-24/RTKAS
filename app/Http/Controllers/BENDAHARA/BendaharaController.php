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

    public function Pengumuman_bendahara()
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

        return view('bendahara.pengumuman_bendahara', ['judul' => $judul, 'pengumuman' => $pengumuman]);
    }

    public function dana_darurat_bendahara()
    {
        $judul = 'Dana Darurat';
        // Ambil semua data dana darurat

        return view('bendahara.dana_darurat_bendahara', ['judul' => $judul ]);
    }

    public function iuran_bendahara()
    {
        $judul = 'Informasi Iuran';
        
        // Mendapatkan data jumlah warga yang belum bayar iuran (Contoh: Ambil dari database)
        $belum_bayar = 100;

        // Mendapatkan data jumlah warga yang sudah bayar iuran (Contoh: Ambil dari database)
        $sudah_bayar = 200;

        // Mendapatkan informasi tentang iuran yang akan dilaksanakan minggu ini (Contoh: Ambil dari database)
        $iuran_minggu_ini = "Informasi tentang iuran yang akan dilaksanakan minggu ini.";

        return view('bendahara.iuran_bendahara', compact('judul', 'belum_bayar', 'sudah_bayar', 'iuran_minggu_ini'));
    }

    public function data_iuran_bendahara(){
        
        $judul = 'Kelola_dwarga';
        return view('bendahara.data_iuran_bendahara',  ['judul'=>$judul]);
    }

    public function verifikasi_dana_darurat_bendahara()
    {
        $judul = 'Verifikasi Dana Darurat';
        // Contoh data dummy untuk dana darurat
        $dana_darurat = [
            [
                'judul' => 'Beli Tempat Sampah',
                'status' => 'Disetujui',
                'jumlah' => 500000,
            ],
            [
                'judul' => 'Perbaikan Jalan',
                'status' => 'Menunggu Persetujuan',
                'jumlah' => 1500000,
            ],
            [
                'judul' => 'Pengadaan Lampu Jalan',
                'status' => 'Disetujui',
                'jumlah' => 750000,
            ],
        ];

        // Contoh data dummy untuk dana darurat yang ditolak
        $dana_darurat_ditolak = [
            [
                'judul' => 'Pembangunan Pos Kamling',
                'alasan' => 'Anggaran terlalu besar',
                'jumlah' => 2000000,
            ],
            [
                'judul' => 'Pengadaan Tanaman Hias',
                'alasan' => 'Tidak mendesak',
                'jumlah' => 300000,
            ],
        ];

        return view('bendahara.verifikasi_dana_darurat_bendahara', [
            'judul' => $judul,
            'dana_darurat' => $dana_darurat,
            'dana_darurat_ditolak' => $dana_darurat_ditolak
        ]);
    }

    public function laporan_kas_bendahara()
    {
        $judul = 'Kelola Laporan Kas Warga';
        
        // Contoh data dummy untuk kas masuk dan keluar
        $kas_masuk = [
            ['nama' => 'Warga 1', 'jumlah' => 100000, 'tanggal' => '2024-05-29'],
            ['nama' => 'Warga 2', 'jumlah' => 150000, 'tanggal' => '2024-05-30'],
        ];

        $kas_keluar = [
            ['keterangan' => 'Beli alat kebersihan', 'jumlah' => 50000, 'tanggal' => '2024-05-28'],
            ['keterangan' => 'Perbaikan jalan', 'jumlah' => 200000, 'tanggal' => '2024-05-29'],
        ];

        // Menghitung total kas masuk dan keluar
        $total_kas_masuk = array_sum(array_column($kas_masuk, 'jumlah'));
        $total_kas_keluar = array_sum(array_column($kas_keluar, 'jumlah'));

        return view('bendahara.laporan_kas_bendahara', [
            'judul' => $judul,
            'kas_masuk' => $kas_masuk,
            'kas_keluar' => $kas_keluar,
            'total_kas_masuk' => $total_kas_masuk,
            'total_kas_keluar' => $total_kas_keluar
        ]);
    }

    public function upload_kas(Request $request)
    {
        // Fungsi untuk mengunggah data pembayaran kas warga
        // Belum difungsikan
    }

}
