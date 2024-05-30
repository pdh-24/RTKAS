@extends('layoutsbendahara.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Informasi Dana Darurat Bendahara</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body" style="background-color: #cfcbcb;">
        <section>
            <h3 style="color: white;">Detail Informasi Dana Darurat</h3>
            <table class="table">
                <tbody style="color: white;">
                    <tr>
                        <td>Judul:</td>
                        <td><strong>{{ $judul }}</strong></td>
                    </tr>
                    <tr>
                        <td>Informasi:</td>
                        <td>Minggu ini uang keluar untuk keperluan membeli tempat sampah.</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection

