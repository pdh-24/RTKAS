@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Data Sub-Kriteria</h1>
        <div class="ml-auto">
            @foreach ($kriteria as $k)
                <a href="{{ route('tambah_data_subkriteria', $k->kode) }}" class="btn btn-success mb-2">Tambah Data {{ $k->nama }}</a>
            @endforeach
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($kriteria as $k)
                <div class="col-md-6 mb-4">
                    <div class="sub-kriteria">
                        <h3>{{ $k->nama }} [{{ $k->kode }}]</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Rentang Skor</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($k->subKriteria as $index => $subKriteria)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $subKriteria->rentang_skor }}</td>
                                            <td>{{ $subKriteria->nilai }}</td>
                                            <td>
                                                <a href="{{ route('edit_data_subkriteria', $subKriteria->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('hapus_data_subkriteria', $subKriteria->id) }}" method="POST" style="display:inline;">
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
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
