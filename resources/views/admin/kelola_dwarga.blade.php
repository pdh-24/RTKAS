@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Kelola Data Warga</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <section>
            <a href="#" class="btn btn-primary mb-3" disabled><i class="fas fa-plus"></i> Tambah Data Warga</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234567890</td>
                        <td>John Doe</td>
                        <td>Islam</td>
                        <td>01 Januari 1980</td>
                        <td>Laki-laki</td>
                        <td>Menikah</td>
                        <td>Jl. Pahlawan No. 123</td>
                        <td>081234567890</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm" disabled><i class="fas fa-eye"></i> Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" disabled><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" disabled><i class="fas fa-trash-alt"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>0987654321</td>
                        <td>Jane Doe</td>
                        <td>Kristen</td>
                        <td>15 Februari 1985</td>
                        <td>Perempuan</td>
                        <td>Belum Menikah</td>
                        <td>Jl. Merdeka No. 456</td>
                        <td>087654321098</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm" disabled><i class="fas fa-eye"></i> Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" disabled><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" disabled><i class="fas fa-trash-alt"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data warga.</td>
                    </tr>
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
                <h5 class="modal-title" id="hapusModalLabel">Hapus Data Warga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data warga ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                <button type="button" class="btn btn-danger" disabled><i class="fas fa-trash-alt"></i> Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection
