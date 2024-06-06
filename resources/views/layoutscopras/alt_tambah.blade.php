@extends('layoutscopras.template')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah jumlah kriteria</h4>
                    <form method="POST" action="tambah_alt2" class="form-inline">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Masukkan jumlah alternatif baru</label>
                            <input type="text" name="jumlahAlternatifBaru" class="form-control form-control-sm" placeholder="Jumlah alternatif baru">
                        </div>
                        <button id="tambahKriteria" class="btn btn-primary mb-2">Lanjut</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection