@extends('layoutswarga.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Request Dana Darurat</h1>
    </div>
    <div class="card-body" style="background-color: #8cbb91;">
        <section>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ url('') }}">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Request</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal Request</label>
                    <input type="number" class="form-control" id="nominal" name="nominal" required>
                </div>
                <div class="form-group">
                    <label for="alasan">Alasan Request</label>
                    <textarea class="form-control" id="alasan" name="alasan" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" disabled>Kirim Request</button>
            </form>
        </section>
    </div>
</div>
@endsection
