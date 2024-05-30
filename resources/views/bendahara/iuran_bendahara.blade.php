@extends('layoutsbendahara.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Informasi Iuran</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body" style="background-color: #cfcbcb;">
        <section>
            <h3 style="color: white;">Detail Informasi Iuran</h3>
            <table class="table">
                <tbody style="color: white;">
                    <tr>
                        <td>Jumlah warga yang belum bayar:</td>
                        <td>Informasi tentang jumlah warga yang belum melakukan pembayaran iuran.</td>
                    </tr>
                    <tr>
                        <td>Jumlah warga yang sudah bayar:</td>
                        <td>Informasi tentang jumlah warga yang sudah melakukan pembayaran iuran.</td>
                    </tr>
                    <tr>
                        <td>Kegiatan Minggu Ini:</td>
                        <td>Informasi tentang kegiatan yang memerlukan iuran warga minggu ini.</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection

