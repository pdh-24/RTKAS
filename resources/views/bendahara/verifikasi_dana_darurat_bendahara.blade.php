@extends('layoutsbendahara.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Verifikasi Dana Darurat</h1>
    </div>
    <div class="card-body" style="background-color: #8cbb91;">
        <section>
            <h3 style="color: rgb(24, 22, 22);">Daftar Konfirmasi Dana Darurat</h3>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($dana_darurat as $dana)
                        <tr>
                            <td>{{ $dana['judul'] }}</td>
                            <td>{{ $dana['status'] }}</td>
                            <td>{{ number_format($dana['jumlah'], 0, ',', '.') }}</td>
                            <td>
                                @if($dana['status'] == 'Disetujui')
                                    <button type="button" class="btn btn-primary" disabled>Kirim Dana Darurat</button>
                                    <button type="button" class="btn btn-secondary" disabled>Upload Bukti Pengiriman</button>
                                @else
                                    Menunggu Persetujuan
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section>
            <h3 style="color: rgb(24, 22, 22);">Daftar Dana Darurat yang Ditolak</h3>
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Judul</th>
                        <th>Alasan Penolakan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($dana_darurat_ditolak as $dana)
                        <tr>
                            <td>{{ $dana['judul'] }}</td>
                            <td>{{ $dana['alasan'] }}</td>
                            <td>{{ number_format($dana['jumlah'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection
