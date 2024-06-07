@extends('layoutscopras.template')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah kriteria</h4>
                    <form action="tambah_kriteria2/simpan" method="POST" class="forms-sample">
                            
                        {{ csrf_field() }}
                        <table class="table-striped table-responsive table-hover mb-3">
                            <thead>
                                <tr>
                                    <th style="width:10%"></th>
                                    <th>Nama kriteria</th>
                                    <th>Bobot</th>
                                    <th>Tipe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < $jumlah; $x++)
                                    <tr>
                                        <td>C{{ $x+1 }}</td>
                                        <td>
                                            <input type="text" name="nama_kriteria[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="bobot[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="tipe[]" class="form-control">
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection