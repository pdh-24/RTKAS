<!-- resources/views/copras/data_kriteria.blade.php -->
@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Data Kriteria</h1>
        <div class="card-tools">
            <a href="{{ route('tambah_data_kriteria') }}" class="btn btn-success">Tambah Data</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kriteria as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['kode'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['bobot'] }}</td>
                        <td>{{ $item['jenis'] }}</td>
                        <td>
                            <a href="{{ route('edit_data_kriteria', $item->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                            <form action="{{ route('hapus_data_kriteria', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
