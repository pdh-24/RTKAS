@extends('layoutscopras.template')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah jumlah alternatif</h4>
                    <!-- <p class="card-description">Masukkan jumlah kriteria baru </p> -->
                    <form action="tambah_alt2/simpan" method="POST" class="forms-sample">
                            
                        {{ csrf_field() }}
                        <table class="table-striped table-responsive table-hover mb-3">
                            <thead>
                                <tr>
                                    <th style="width:10%"></th>
                                    <th>Nama alternatif</th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < $jumlah; $x++)
                                    <tr>
                                        <td>A{{ $x+1 }}</td>
                                        <td>
                                            <input type="text" name="nama_alternatif[]" class="form-control">
                                        </td>
                                        @for ($y = 0; $y < count($kriteria); $y++)
                                            <td>
                                                <input type="text" name="penilaian[{{$x}}][{{$y}}]" value="" class="form-control">
                                            </td>
                                        @endfor
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