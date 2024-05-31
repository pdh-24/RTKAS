<?php

namespace App\Http\Controllers\WARGA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardwarga';
        return view('warga.dashboardwarga', ['judul' => $judul]);
    }

    public function pengumuman_warga()
    {
        $judul = 'Pengumuman untuk Warga';
        
        // Contoh data dummy untuk pengumuman warga
        // Gantilah dengan pengambilan data dari database
        $warga = [
            
            'nama' => 'Warga 1',
            'pengumuman' => [
                ['bulan' => 'Mei 2024', 'status' => 'Belum Bayar'],
                ['bulan' => 'April 2024', 'status' => 'Sudah Bayar'],
            ],
        ];

        return view('warga.pengumuman_warga', [
            'judul' => $judul,
            'warga' => $warga
        ]);
    }

    public function request_dana_darurat_warga()
    {
        $judul = 'Request Dana Darurat';
        return view('warga.request_dana_darurat_warga', ['judul' => $judul]);
    }

    // Memproses form request dana darurat
    public function submitRequestForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'alasan' => 'required|string|max:1000',
        ]);

        // Proses penyimpanan data (contoh menggunakan data dummy)
        $data = $request->only('judul', 'nominal', 'alasan');
        
        // Di sini Anda bisa menyimpan data ke database
        // Contoh: DanaDarurat::create($data);

        return redirect()->back()->with('success', 'Permintaan dana darurat berhasil diajukan.');
    }

    public function bayar_iuran_warga()
    {
        $judul = 'Informasi Iuran Warga';

        // Contoh data dummy untuk informasi iuran
        $iuran = [
            ['bulan' => 'Mei 2024', 'status' => 'Belum Bayar'],
            ['bulan' => 'April 2024', 'status' => 'Sudah Bayar'],
        ];

        return view('warga.bayar_iuran_warga', [
            'judul' => $judul,
            'iuran' => $iuran
        ]);
    }

    // Memproses pembayaran iuran
    public function bayarIuran(Request $request)
    {
        // Proses pembayaran iuran
        // Di sini Anda bisa menambahkan logika untuk menyimpan data pembayaran ke database
        // Contoh: PembayaranIuran::create($data);

        return redirect()->back()->with('success', 'Pembayaran iuran berhasil dilakukan.');
    }
}
