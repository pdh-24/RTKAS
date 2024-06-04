@extends('layoutscoprascoba.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Data Penilaian</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alternatif as $index => $alt)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $alt->nama_alternatif }}</td>
                        <td>
                            @if($alt->hasPenilaian())
                                <a href="{{ route('edit_data_penilaian', $alt->id) }}" class="btn btn-primary">Edit</a>
                            @else
                                <a href="{{ route('input_data_penilaian', $alt->id) }}" class="btn btn-success">Input</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
