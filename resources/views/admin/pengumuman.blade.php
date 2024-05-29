<!-- resources/views/admin/informasi_admin.blade.php -->
@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Informasi Pengumuman Admin</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <section>
            <div class="mb-4">
                <h4>Pengumuman</h4>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Informasi Kas Warga</h4>
                    <p>Minggu ini, sejumlah uang telah dikeluarkan untuk keperluan membeli tempat sampah di area pemukiman. Silakan hubungi bendahara untuk informasi lebih lanjut.</p>
                    <hr>
                    <p class="mb-0">Total kas saat ini: Rp XXXX</p>
                </div>

                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Laporan Kas Bulanan</h4>
                    <p>Laporan kas bulanan sudah tersedia. Silakan unduh melalui tautan berikut: <a href="#">Unduh Laporan</a></p>
                </div>

                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Dana Darurat</h4>
                    <p>Perluasan fasilitas keamanan telah direncanakan, dan dana darurat akan digunakan untuk itu. Mohon sampaikan saran atau pertanyaan Anda kepada RT kami.</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

