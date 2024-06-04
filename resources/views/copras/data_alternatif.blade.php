@extends('layoutscoprascoba.template')

@section('content')

<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Data Alternatif</h1>
        <div class="ml-auto">
            <a href="{{ route('tambah_data_alternatif') }}" class="btn btn-success">Tambah Data Alternatif</a>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered" style="border-color: #b1d0ae;">
            <thead>
                <tr>
                    <th style="font-size: 18px;">No</th>
                    <th style="font-size: 18px;">Nama Alternatif</th>
                    <th style="font-size: 18px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatif as $alternatif)
                    <tr>
                        <td style="font-size: 16px;">{{ $loop->iteration }}</td>
                        <td style="font-size: 16px;">{{ $alternatif->nama_alternatif }}</td>
                        <td>
                            <a href="{{ route('edit_data_alternatif', $alternatif->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('hapus_data_alternatif', $alternatif->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
