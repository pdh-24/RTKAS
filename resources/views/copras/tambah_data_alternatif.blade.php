@extends('layoutscoprascoba.template')

@section('content')

<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Tambah Data Alternatif</h1>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('simpan_data_alternatif') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif:</label>
                <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

@endsection
