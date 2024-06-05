<!-- resources/views/copras/tambah_data_kriteria.blade.php -->

@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Tambah Data Kriteria</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form id="formTambahDataKriteria" action="{{ route('simpan_data_kriteria') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">Kode Kriteria:</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Kriteria:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="bobot">Bobot Kriteria:</label>
                <input type="number" step="0.01" class="form-control" id="bobot" name="bobot" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Kriteria:</label>
                <select class="form-control" id="jenis" name="jenis" required>
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
            </div>
        </form>
        
    </div>
</div>
@endsection

@push('scripts')
<script>
    function resetForm() {
        document.getElementById("formTambahDataKriteria").reset();
    }
</script>
@endpush
