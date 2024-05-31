@extends('layoutswarga.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Pengumuman untuk {{ $warga['nama'] }}</h1>
    </div>
    <div class="card-body" style="background-color: #8cbb91;">
        <section>
            <h3 style="color: white;">Status Pembayaran Kas Bulanan</h3>
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Bulan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($warga['pengumuman'] as $pengumuman)
                        <tr>
                            <td>{{ $pengumuman['bulan'] }}</td>
                            <td>{{ $pengumuman['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection
