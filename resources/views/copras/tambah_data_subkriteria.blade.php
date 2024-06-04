@extends('layoutscoprascoba.template')

@section('content')
<div class="container">
    <h1>Tambah Data Sub Kriteria</h1>
    <form action="{{ route('simpan_data_subkriteria', $kode) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="no">No</label>
            <input type="number" name="no" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="rentang_skor">Rentang Skor</label>
            <input type="text" name="rentang_skor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
