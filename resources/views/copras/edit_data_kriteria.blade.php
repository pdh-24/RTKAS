<!-- resources/views/copras/edit_data_kriteria.blade.php -->
@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Edit Data Kriteria</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form action="{{ route('update_data_kriteria', $kriteria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode">Kode Kriteria:</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $kriteria->kode }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Kriteria:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kriteria->nama }}" required>
            </div>
            <div class="form-group">
                <label for="bobot">Bobot Kriteria:</label>
                <input type="number" step="0.01" class="form-control" id="bobot" name="bobot" value="{{ $kriteria->bobot }}" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Kriteria:</label>
                <select class="form-control" id="jenis" name="jenis" required>
                    <option value="Benefit" {{ $kriteria->jenis == 'Benefit' ? 'selected' : '' }}>Benefit</option>
                    <option value="Cost" {{ $kriteria->jenis == 'Cost' ? 'selected' : '' }}>Cost</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
