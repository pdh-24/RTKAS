<!-- @extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            
        </div>
    </div>
@endsection -->

@extends('layouts.template')

@section('content')
    <!-- This is for copras method processing -->
    <script>
    let kriteria        = [
                            "Harga", 
                            "Kemudahan penggunaan", 
                            "Pilihan layanan", 
                            "Lokasi data center", 
                            "Keamanan"
                        ];
    let pembobotan      = [9, 8, 6, 8, 7];
    let tipe            = ["c", "b", "b", "b", "b"];
    let alternatif      = [  
                            "Microsoft Azure",
                            "Google Cloud Platform",
                            "Amazon Web Service",
                            "Alibaba Cloud",
                            "Digital Ocean"
                        ];

    let penilaian       = [
                            [6, 5, 8, 7, 10],
                            [7, 7, 9, 8, 9],
                            [9, 8, 9, 9, 9],
                            [8, 7, 8, 7, 9],
                            [10, 9, 5, 5, 8]
                        ];

    let normalisasi     = [[], [], [], [], []];
    let normalBobot     = [[], [], [], [], []];
    let benefit         = [0, 0, 0, 0, 0];
    let cost            = [0, 0, 0, 0, 0];
    let botRelatif1     = [];
    let botRelatif2     = [];
    let nilaiPrioritas  = [];
    let indexPerforma   = [];
    let peringkat       = [];

    let menormalkan = function (){
        for (let y = 0; y < penilaian[0].length; y++) {     // y menyatakan kriteria ke-Y
            // Total nilai setiap kriteria
            let total = 0;
            for (let x = 0; x < penilaian.length; x++) {    // x menyatakan alternatif ke-X
                total += penilaian[y][x];
            }
            //Normalisasi untuk setiap entri
            for (let x = 0; x < penilaian.length; x++) {    // x menyatakan alternatif ke-X
                normalisasi[y][x] = penilaian[y][x]/total; 
            }
        }
    }
    let hitungNormalBobot = function (){
        for (let x = 0; x < 5; x++) {       // Perulangan terhadap setiap alternatif
            for (let y = 0; y < 5; y++) {   // Perulangan untuk setiap kriteria dari setiap alternatif
                normalBobot[x][y] = normalisasi[x][y]*pembobotan[y];  // Setiap entri dikali bobot dari setiap kriteria
                
                if (tipe[y] == "b") benefit[x]  += normalBobot[x][y];           // Hitung total cost untuk setiap alternatif
                else                cost[x]     += normalBobot[x][y];        // Hitung total benefit untuk setiap alternatif
            }
        }
    }
    let hitungBotRelatif = function (){
        let totalBotRelatif = 0;
        for (let x = 0; x < 5; x++) {
            botRelatif1[x] = 1/cost[x];
            totalBotRelatif += botRelatif1[x];
        }
        for (let x = 0; x < 5; x++) {
            botRelatif2[x] = cost[x]*totalBotRelatif;
        }
    }
    let hitungPrioritas = function (){
        let totalCost = 0;
        for (let x = 0; x < 5; x++) { // x menyatakan index dari cost untuk setiap alternatif ke-X
            totalCost[x] += cost[x];
        }
        for (let x = 0; x < 5; x++) { // x menyatakan nilai prioritas untuk alternatif ke-X
            nilaiPrioritas[x] = benefit[x] + totalCost*botRelatif2[x];
        }
    }
    let hitungIndexPerforma = function (){
        let maxPrioritas = Math.max(...nilaiPrioritas);
        for (let x = 0; x < 5; x++) {
            indexPerforma[x] = nilaiPrioritas[x]/maxPrioritas*100;
        }
    }
    let hitungPeringkat = function (){
        let index = 0;
        let temp = Math.min(...nilaiPrioritas)-1;
        for (let x = 0; x < 5; x++) {
            for (let y = 0; y < 5; y++) {
                if (peringkat.includes(y)) continue;
                if (nilaiPrioritas[y] > temp) {
                    index = y;
                    temp = nilaiPrioritas[y];
                }
            }
            peringkat.push(index);
            temp = Math.min(...nilaiPrioritas)-1;
            index = 0;
        }
    }
    const tampilPeringkat = function(){
        console.log("====================================");
        console.log("Peringkat alternatif Metode COPRAS:\n");
        for (let x = 0; x < 5; x++) {
            console.log(`${x+1}.\t ${alternatif[peringkat[x]]}`);
        }
        console.log("====================================");
        return "";
    }
    const copras = function (){
        menormalkan();
        hitungNormalBobot();
        hitungBotRelatif();
        hitungPrioritas();
        hitungIndexPerforma();
        hitungPeringkat();
        // tampilPeringkat();
    }
copras();
    </script>

    <div class="content-wrapper">
        <div class="row">
            <section class="content-info">
                <div class="container paddings-mini">
                    <div class="col-lg-12">
                        <h2>Normalization Matrix</h2>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    @foreach ($kriteria as $k)
                                        <th>{{ $k }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($normalisasi as $row)
                                    <tr>
                                        @foreach ($row as $cell)
                                            <td>{{ number_format($cell, 4) }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Weighted Normalization Matrix</h2>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    @foreach ($kriteria as $k)
                                        <th>{{ $k }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($normalBobot as $row)
                                    <tr>
                                        @foreach ($row as $cell)
                                            <td>{{ number_format($cell, 4) }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Total Benefit and Cost</h2>
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
                                        <td>{{ number_format($benefit[$index], 4) }}</td>
                                        <td>{{ number_format($cost[$index], 4) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Relative Weight</h2>
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
                                        <td>{{ number_format($botRelatif1[$index], 4) }}</td>
                                        <td>{{ number_format($botRelatif2[$index], 4) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Priority Values</h2>
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
                                        <td>{{ number_format($nilaiPrioritas[$index], 4) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Performance Index</h2>
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
                                        <td>{{ number_format($indexPerforma[$index], 4) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2>Ranking</h2>
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
