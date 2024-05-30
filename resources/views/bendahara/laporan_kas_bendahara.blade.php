@extends('layoutsbendahara.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Kelola Laporan Kas Warga</h1>
    </div>
    <div class="card-body" style="background-color: #8cbb91;">
        <section>
            <h3 style="color: white;">Kas Masuk</h3>
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($kas_masuk as $kas)
                        <tr>
                            <td>{{ $kas['nama'] }}</td>
                            <td>{{ number_format($kas['jumlah'], 0, ',', '.') }}</td>
                            <td>{{ $kas['tanggal'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p style="color: white;">Total Kas Masuk: {{ number_format($total_kas_masuk, 0, ',', '.') }}</p>
        </section>
        <section>
            <h3 style="color: white;">Kas Keluar</h3>
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($kas_keluar as $kas)
                        <tr>
                            <td>{{ $kas['keterangan'] }}</td>
                            <td>{{ number_format($kas['jumlah'], 0, ',', '.') }}</td>
                            <td>{{ $kas['tanggal'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p style="color: white;">Total Kas Keluar: {{ number_format($total_kas_keluar, 0, ',', '.') }}</p>
        </section>
        <section>
            <h3 style="color: white;">Upload Data Pembayaran Kas Warga</h3>
            <form action="{{ url('/upload_kas') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Pilih file untuk diunggah:</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary" disabled>Unggah</button>
            </form>
        </section>
        <section>
            <h3 style="color: white;">Cetak Laporan Pembayaran Kas</h3>
            <button type="button" class="btn btn-secondary" disabled>Cetak Laporan</button>
        </section>
    </div>
</div>
@endsection
