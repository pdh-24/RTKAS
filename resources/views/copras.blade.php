
@extends('layouts.template')

@section('content')

<?php
    // dd($normalisasi);
?>
    <div class="content-wrapper">
        <div class="row">
            <section class="content-info">
                <div class="container paddings-mini">
                    <div class="col-lg-12">
                        <h4>Normalization Matrix</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($normalisasi); $x++)
                                    <tr>
                                        <td>A{{ $x+1 }}</td>
                                        @for ($y = 0; $y < count($normalisasi[$x]); $y++)
                                            <td>{{ number_format($normalisasi[$x][$y], 2) }}</td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Weighted Normalization Matrix</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($normalBobot); $x++)
                                    <tr>
                                        <td>A{{ $x+1 }}</td>
                                        @for ($y = 0; $y < count($normalBobot[$x]); $y++)
                                            <td>{{ number_format($normalBobot[$x][$y], 2) }}</td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Total Benefit and Cost</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Benefit</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($benefit[$index], 2) }}</td>
                                        <td>{{ number_format($cost[$index], 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Relative Weight</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Weight 1</th>
                                    <th>Weight 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($botRelatif1[$index], 2) }}</td>
                                        <td>{{ number_format($botRelatif2[$index], 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Priority Values</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Priority</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($nilaiPrioritas[$index], 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Performance Index</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Index</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($indexPerforma[$index], 2) }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br><br>
                            <h4>Ranking</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Alternatif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peringkat as $rank => $index)
                                    <tr>
                                        <td>{{ $rank + 1 }}</td>
                                        <td>{{ $alternatif[$index] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
