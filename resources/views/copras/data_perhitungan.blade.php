<!-- resources/views/copras/data_perhitungan.blade.php -->

@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Data Perhitungan</h1>
    </div>
    <div class="card-body">
        <h2 style="text-align: center; margin-top: 20px;">Matrix Keputusan</h2>
        <table class="table table-bordered" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    @foreach($kriteria as $k)
                        <th>{{ $k->nama }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($alternatif as $index => $alt)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $alt->nama_alternatif }}</td>
                        @foreach($kriteria as $k)
                            <td>
                                @php
                                    $nilai = $alt->penilaian->where('kriteria_id', $k->id)->first();
                                @endphp
                                {{ $nilai ? $nilai->nilai : '-' }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">Total</td>
                    @foreach($kriteria as $k)
                        <td>
                            @php
                                $totalNilai = 0;
                                foreach($alternatif as $alt) {
                                    $nilai = $alt->penilaian->where('kriteria_id', $k->id)->first();
                                    if($nilai) {
                                        $totalNilai += $nilai->nilai;
                                    }
                                }
                                echo $totalNilai;
                            @endphp
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>

        <h2 style="text-align: center; margin-top: 40px;">Normalisasi Matriks</h2>
<table class="table table-bordered" style="margin-top: 20px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Alternatif</th>
            @foreach($kriteria as $k)
                <th>{{ $k->nama }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($alternatif as $index => $alt)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $alt->nama_alternatif }}</td>
                @foreach($normalisasiMatrix[$index] as $normalisasi)
                    <td>{{ $normalisasi }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

    </div>
</div>
@endsection
