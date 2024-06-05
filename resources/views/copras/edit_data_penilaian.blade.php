<!-- resources/views/copras/edit_data_penilaian.blade.php -->

@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Edit Penilaian</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('update_data_penilaian', $alternatif->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_alternatif" style="font-size: 18px;">Nama Alternatif</label>
                <input type="text" class="form-control" id="nama_alternatif" value="{{ $alternatif->nama_alternatif }}" disabled>
            </div>
            @foreach($kriteria as $k)
                <div class="form-group">
                    <label for="kriteria_{{ $k->id }}" style="font-size: 18px;">{{ $k->nama }}</label>
                    <select name="nilai[{{ $k->id }}]" id="kriteria_{{ $k->id }}" class="form-control">
                        @foreach($k->subKriteria as $sub)
                            @php
                                $nilai = $alternatif->penilaian->where('kriteria_id', $k->id)->first();
                            @endphp
                            <option value="{{ $sub->id }}" {{ $nilai && $nilai->nilai == $sub->nilai ? 'selected' : '' }}>
                                {{ $sub->rentang_skor }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endforeach
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
