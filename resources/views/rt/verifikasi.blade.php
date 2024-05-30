@extends('layoutsrt.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center; color:white;">Verifikasi Dana Darurat</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body" style="background-color: #cfcbcb;">
        <section>
            <h3 style="color: white;">Detail Permintaan Dana Darurat</h3>
            @foreach ($requests as $request)
            <div class="request-card" style="margin-bottom: 20px; background-color: #e0e0e0; padding: 20px; border-radius: 5px;">
                <table class="table">
                    <tbody style="color: black;">
                        <tr>
                            <td>Nama:</td>
                            <td><strong>{{ $request['nama'] }}</strong></td>
                        </tr>
                        <tr>
                            <td>Keluhan:</td>
                            <td>{{ $request['keluhan'] }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah:</td>
                            <td>{{ $request['jumlah'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <label for="alasan" style="color: black;">Alasan:</label>
                    <textarea name="alasan" class="form-control" rows="3" required></textarea>
                </div>
                <button type="button" class="btn btn-success">Terima</button>
                <button type="button" class="btn btn-danger">Tolak</button>
            </div>
            @endforeach
        </section>
    </div>
</div>
@endsection

