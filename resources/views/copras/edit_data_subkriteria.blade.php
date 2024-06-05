@extends('layoutscoprascoba.template')

@section('content')
<div class="container">
    <h1>Edit Data Sub Kriteria</h1>
    <form action="{{ route('update_data_subkriteria', $subkriteria->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="no">No</label>
            <input type="number" name="no" class="form-control" value="{{ $subkriteria->no }}" required>
        </div>
        <div class="form-group">
            <label for="rentang_skor">Rentang Skor</label>
            <input type="text" name="rentang_skor" class="form-control" value="{{ $subkriteria->rentang_skor }}" required>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" class="form-control" value="{{ $subkriteria->nilai }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
