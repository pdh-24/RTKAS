@extends('layoutscopras.template')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah alternatif</h4>
                    <!-- <p class="card-description">Masukkan jumlah kriteria baru </p> -->
                    <form class="form-inline">
                        <!-- <label class="sr-only" for="jumlah">Name</label>
                        <input type="text" class="form-control form-control-sm mb-2 mr-sm-2" id="jumlah" placeholder="Jumlah kriteria baru"> -->
                        <div class="form-group">
                            <label>Masukkan nama alternatif baru</label>
                            <input type="text" id="inputAlt" class="form-control form-control-sm" placeholder="Nama alternatif baru">
                        </div>
                        <div class="btn btn-primary mb-2">Lanjut</div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection