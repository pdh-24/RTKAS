@extends('layoutscopras.template')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah jumlah kriteria</h4>
                    <!-- <p class="card-description">Masukkan jumlah kriteria baru </p> -->
                    <form method="POST" action="tambah_kriteria2" class="form-inline">
                        {{ csrf_field() }}
                        <!-- <label class="sr-only" for="jumlah">Name</label>
                        <input type="text" class="form-control form-control-sm mb-2 mr-sm-2" id="jumlah" placeholder="Jumlah kriteria baru"> -->
                        <div class="form-group">
                            <label>Masukkan jumlah kriteria baru</label>
                            <input type="text" name="jumlahKriteriaBaru" class="form-control form-control-sm" placeholder="Jumlah kriteria baru">
                        </div>
                        <button id="tambahKriteria" class="btn btn-primary mb-2">Lanjut</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        let tambah = document.getElementById("tambahKriteria");
        tambah.addEventListener("click", ()=>{
            let jumlah = Number(document.getElementById("inputJumlah").value);
            if (!isNaN(jumlah)) {
                for (let x = 0; x < jumlah; x++) {
                    // let html1 = '<div class="form-group"><label for="exampleInputName1">Nama kriteria</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Nama"></div><div class="form-group"><div class="form-group"><div class="form-group"></div>';
                    // let html2 = '<label for="exampleInputName1">Nama kriteria</label>';
                    // let html3 = '<input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">';
                    // let html4 = '</div>';
                    // let html5 = '<div class="form-group">';
                    // let html6 = '<div class="form-group">';
                    // let html7 = '<div class="form-group">';
                    // let html8 = '</div>';
                    let html1 = document.createElement(div);
                        html1.setElement();

                    let formTambah = document.getElementById("form_tambah");
                }
                appendHtml(formTambah, html1);
            }
        });
    </script>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-description">Input penilaian</p>
                    <form method="post" action="tambah_kategori_simpan" class="forms-sample" id="form_tambah">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="namaKriteria1">Nama kriteria 1</label>
                            <input type="text" class="form-control" name="nama_kriteria[]" id="namaKriteria1" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="penilaianKriteria1">Penilaian kriteria 1</label>
                            <input type="text" class="form-control" name="penilaian_kriteria[]" id="penilaianKriteria1" placeholder="Penilaian">
                        </div>
                        <div class="form-group">
                            <label for="penilaianKriteria1">Bobot dan tipe kriteria 1</label>
                            <input type="text" class="form-control" name="bobotTipe_kriteria[]" id="penilaianKriteria1" placeholder="Penilaian">
                        </div>
                        <div class="form-group">
                            <label for="namaKriteria2">Nama kriteria 2</label>
                            <input type="text" class="form-control" name="nama_kriteria[]" id="namaKriteria2" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="penilaianKriteria2">Penilaian kriteria 2</label>
                            <input type="text" class="form-control" name="penilaian_kriteria[]" id="penilaianKriteria2" placeholder="Penilaian">
                        </div>
                        <div class="form-group">
                            <label for="penilaianKriteria1">Bobot dan tipe kriteria 1</label>
                            <input type="text" class="form-control" name="bobotTipe_kriteria[]" id="penilaianKriteria1" placeholder="Penilaian">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="../copras" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection