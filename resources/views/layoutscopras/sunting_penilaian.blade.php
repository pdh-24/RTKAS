@extends('layoutscopras.template')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Matriks Penilaian</h4>
                        <form action="sunting_penilaian/simpan" method="POST" class="forms-sample">
                            
                            {{ csrf_field() }}
                            <table class="table-striped table-responsive table-hover mb-3">
                                <thead>
                                    <tr>
                                        <th style="width:10%"></th>
                                        @for ($x = 0; $x < count($kriteria); $x++)
                                            <th>C{{ $x+1 }}</th>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($x = 0; $x < count($penilaian); $x++)
                                        <tr>
                                            <td>A{{ $x+1 }}</td>
                                            @for ($y = 0; $y < count($penilaian[$x]); $y++)
                                                <td>
                                                    <input type="text" name="penilaian[{{$x}}][{{$y}}]" value="{{ number_format($penilaian[$x][$y], 1, ',') }}" class="form-control">
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
            <div class="card">
                    <div class="card-body">
                    <div class="col-12 grid-margin">
                        <h4>Kriteria</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th  style="width:10%"></th>
                                    <th>Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($kriteria); $x++)
                                <tr>
                                    <td>C{{ $x+1 }}</td>
                                    <td>{{ $kriteria[$x] }}</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
            </div>
            <div class="col-12 grid-margin">
                        <h4>Alternatif</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th  style="width:10%"></th>
                                    <th>Alternatif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($alternatif); $x++)
                                <tr>
                                    <td>C{{ $x+1 }}</td>
                                    <td>{{ $alternatif[$x] }}</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection