<!-- resources/views/bendahara/kelola_kas.blade.php -->
@extends('layoutsrt.template')

@section('content')
<div class="card">
    <div class="card-header"style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Kelola Data Kas Warga</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <!-- Informasi Tambahan -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">
                        <i class="fas fa-users" style="margin-right: 10px;"></i> Total Warga
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ count($dataKas) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">
                        <i class="fas fa-check-circle" style="margin-right: 10px;"></i> Sudah Bayar
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ count(array_filter($dataKas, function($kas) { return $kas['status'] === 'Sudah Bayar'; })) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">
                        <i class="fas fa-times-circle" style="margin-right: 10px;"></i> Belum Bayar
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ count(array_filter($dataKas, function($kas) { return $kas['status'] === 'Belum Bayar'; })) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Informasi Tambahan -->

        <section>
            <a href="#" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Kas
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataKas as $kas)
                        <tr>
                            <td>{{ $kas['nama'] }}</td>
                            <td>{{ $kas['status'] }}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($dataKas) == 0)
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data kas.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </section>
    </div>
</div>
<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Hapus Data Kas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data kas ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection
