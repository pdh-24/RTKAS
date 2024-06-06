<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoprasController extends Controller
{
    public function spk(){
        // $this->index();
        return redirect('/copras');
    }
    public function index()
    {   
        /**
         * Jangan lupa jalankan sql query yang ada di app/controllers/copras.sql di ..
         * .. di phpmyadmin
         */

        $kriteriasql = DB::connection('CoprasSql')->select('select nama_kriteria from kriteria');
        // dd($kriteriasql);
        foreach ($kriteriasql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->nama_kriteria);
            // Append the array to the result array
            foreach ($values as $key => $criterion) {
                $kriteria[] = $criterion;
            }  
        }

        $pembobotansql = DB::connection('CoprasSql')->select('select bobot from kriteria');
        foreach ($pembobotansql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->bobot);
            // Append the array to the result array
            foreach ($values as $key => $weight) {
                $pembobotan[] = (float)$weight;
            }  
        }

        $tipesql = DB::connection('CoprasSql')->select('select tipe from kriteria');
        foreach ($tipesql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->tipe);
            // Append the array to the result array
            foreach ($values as $key => $type) {
                $tipe[] = $type;
            }  
        }
        
        $alternatifsql = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');
        foreach ($alternatifsql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->nama_alternatif);
            // Append the array to the result array
            foreach ($values as $key => $alt) {
                $alternatif[] = $alt;
            }  
        }

        $penilaiansql = DB::connection('CoprasSql')->select('select penilaian from alternatif');

        // Iterate through the data
        foreach ($penilaiansql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->penilaian);
            foreach ($values as $key => $value) {
                $values[$key] = (float)$value;
            }
            // Append the array to the result array
            $penilaian[] = $values;    
        }
        // dd($penilaian);
        
        $normalisasi    = array_fill(0, count($alternatif), array_fill(0, count($kriteria), 0));
        $normalBobot    = array_fill(0, count($alternatif), array_fill(0, count($kriteria), 0));
        $benefit        = array_fill(0, count($alternatif), 0);
        $cost           = array_fill(0, count($alternatif), 0);
        $botRelatif1    = [];
        $botRelatif2    = [];
        $nilaiPrioritas = [];
        $indexPerforma  = [];
        $peringkat      = [];
        
        /**
         * Normalisasi matriks penilaian
         */
        function menormalkan(&$penilaian, &$normalisasi) {            
            for ($y = 0; $y < count($penilaian[0]); $y++) {     // y menyatakan kriteria ke-Y
                
                // Total nilai setiap kriteria
                $total = 0;
                for ($x = 0; $x < count($penilaian); $x++) {    // x menyatakan alternatif ke-X
                    $total += $penilaian[$x][$y];
                }

                // Normalisasi untuk setiap entri
                for ($x = 0; $x < count($penilaian); $x++) {    // x menyatakan alternatif ke-X
                    if ($total == 0)   $normalisasi[$x][$y] = 0;
                    else                $normalisasi[$x][$y] = $penilaian[$x][$y] / $total;
                }
            }
        }
        
        /**
         * Menghitung normalisasi bobot dan total benefit serta cost
         */
        function hitungNormalBobot(&$normalisasi, &$normalBobot, &$benefit, &$cost, &$pembobotan, &$tipe) {
            
            for ($x = 0; $x < count($normalisasi); $x++) {       // Perulangan terhadap setiap alternatif
                for ($y = 0; $y < count($normalisasi[$x]); $y++) {   // Perulangan untuk setiap kriteria dari setiap alternatif
                    
                    // Setiap entri dikali bobot dari setiap kriteria
                    $normalBobot[$x][$y] = $normalisasi[$x][$y] * $pembobotan[$y];  
                    
                    if ($tipe[$y] == "b") {
                        $benefit[$x] += $normalBobot[$x][$y];           // Hitung total benefit untuk setiap alternatif
                    } else {
                        $cost[$x] += $normalBobot[$x][$y];              // Hitung total cost untuk setiap alternatif
                    }
                }
            }
        }
        
        /**
         * Menghitung bobot relatif
         */
        function hitungBotRelatif(&$cost, &$botRelatif1, &$botRelatif2) {
            $totalBotRelatif = 0;
            for ($x = 0; $x < count($cost); $x++) {
                $botRelatif1[$x] = 1 / $cost[$x];
                $totalBotRelatif += $botRelatif1[$x];
            }
            for ($x = 0; $x < count($cost); $x++) {
                $botRelatif2[$x] = $cost[$x] * $totalBotRelatif;
            }
        }
        
        /**
         * Menghitung nilai prioritas
         */
        function hitungPrioritas(&$alternatif, &$cost, &$benefit, &$botRelatif2, &$nilaiPrioritas) {
            $totalCost = array_sum($cost);
            for ($x = 0; $x < count($alternatif); $x++) { // x menyatakan nilai prioritas untuk alternatif ke-X
                $nilaiPrioritas[$x] = $benefit[$x] + $totalCost / $botRelatif2[$x];
            }
        }
        
        /**
         * Menghitung indeks performa
         */
        function hitungIndexPerforma(&$nilaiPrioritas, &$indexPerforma) {

            $maxPrioritas = max($nilaiPrioritas);
            for ($x = 0; $x < count($nilaiPrioritas); $x++) {
                $indexPerforma[$x] = $nilaiPrioritas[$x] / $maxPrioritas * 100;
            }
        }
        
        /**
         * Menghitung peringkat berdasarkan nilai prioritas
         */
        function hitungPeringkat(&$nilaiPrioritas, &$peringkat) {
            $index = -1;
            $temp = min($nilaiPrioritas) - 1;

            // Pengecekan diulangi sebanyak (jumlah alternatif) kali
            for ($x = 0; $x < count($nilaiPrioritas); $x++) {
                // Perbandingan dilakukan terhadap nilai prioritas sebanyak Y
                for ($y = 0; $y < count($nilaiPrioritas); $y++) {
                    
                    // Jika indeks Y ada di dalam peringkat, lanjutkan ke iterasi berikutnya
                    if (in_array($y, $peringkat)) continue; 

                    if ($nilaiPrioritas[$y] > $temp) {
                        $index = $y;
                        $temp = $nilaiPrioritas[$y];
                    }
                }
                $peringkat[] = $index; // Menambahkan indeks tertinggi untuk setiap pengecekan ke dalam $peringkat
                
                $temp = min($nilaiPrioritas) - 1;   // Mereset nilai $temp
                $index = -1;                        // Mereset indeks
            }
        }
        
        /**
         * Menampilkan peringkat alternatif pada UI non-HTML
         */
        function tampilPeringkat(&$alternatif, &$peringkat) {
            
            echo "====================================\n";
            echo "Peringkat alternatif Metode COPRAS:\n\n";
            for ($x = 0; $x < 5; $x++) {
                echo ($x + 1) . ".\t" . $alternatif[$peringkat[$x]] . "\n";
            }
            echo "====================================\n";
        }
        
        /**
         * Menjalankan semua fungsi untuk metode COPRAS
         */
            menormalkan($penilaian, $normalisasi);
            hitungNormalBobot($normalisasi, $normalBobot, $benefit, $cost, $pembobotan, $tipe);
            hitungBotRelatif($cost, $botRelatif1, $botRelatif2);
            hitungPrioritas($alternatif, $cost, $benefit, $botRelatif2, $nilaiPrioritas);
            hitungIndexPerforma($nilaiPrioritas, $indexPerforma);
            hitungPeringkat($nilaiPrioritas, $peringkat);
       
        return view('layoutscopras.copras', compact(
            'penilaian', 'kriteria', 'normalisasi', 'normalBobot', 'benefit', 'cost', 'botRelatif1',
            'botRelatif2', 'nilaiPrioritas', 'indexPerforma', 'peringkat', 'alternatif'
        ));
    }

    public function tambah_jumlah_krit(){
        return view('layoutscopras.kriteria_tambah');
    }

    public function tambah_krit(Request $request){
        $jumlah = $request->input('jumlahKriteriaBaru');
        $nama_alt = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');
        foreach ($nama_alt as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->nama_alternatif);
            // Append the array to the result array
            foreach ($values as $key => $alt) {
                $alternatif[] = $alt;
            }  
        }
        // dd($alternatif);
        $jumlah = (int) $jumlah;
        return view('layoutscopras.kriteria_tambah2', compact('jumlah', 'alternatif'));
    }
    public function tambah_krit_simpan(Request $request){
        $nama_kriteria = $request->input('nama_kriteria');
        $bobot = $request->input('bobot');
        $tipe = $request->input('tipe');

        foreach ($bobot as $key => $value) {
            $bobot[$key] = str_replace(',', '.', $value);
        }

        for ($i = 0; $i < count($nama_kriteria); $i++) {
            DB::connection("CoprasSql")->table('kriteria')->insert([
                'nama_kriteria' => $nama_kriteria[$i],
                'bobot' => $bobot[$i],
                'tipe' => $tipe[$i]
            ]);

            $alternatifsql = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');
            $penilaiansql = DB::connection('CoprasSql')->select('select penilaian from alternatif');
            // Iterate through the data
            // $penilaian_kriteria[$i] = explode(' ', $penilaiansql[$i]);
            for ($j = 0; $j < count($alternatifsql); $j++){
                $alternatif = $alternatifsql[$j]->nama_alternatif;
                $penilaian = explode(', ', $penilaiansql[$j]->penilaian);
                $penilaian[] = 0;
                $penilaian = implode(', ', $penilaian);

                DB::connection("CoprasSql")->table('alternatif')
                    ->where('nama_alternatif', '=', $alternatif)
                    ->update(['penilaian' => $penilaian
                ]);
            }
        } 
        return redirect('/copras/sunting_penilaian');
    }

    public function tambah_jumlah_alt(){
        return view('layoutscopras.alt_tambah');
    }

    public function tambah_alt(Request $request){
        $jumlah = $request->input('jumlahAlternatifBaru');
        $kriteriasql = DB::connection('CoprasSql')->select('select nama_kriteria from kriteria');
        foreach ($kriteriasql as $row) { 
            $kriteria[] = $row->nama_kriteria;
        }
        // dd($alternatif);
        $jumlah = (int) $jumlah;
        return view('layoutscopras.alt_tambah2', compact('jumlah', 'kriteria'));
    }
    public function tambah_alt_simpan(Request $request){
        $nama_alternatif = $request->input('nama_alternatif');
        // dd($nama_alternatif);
        $penilaian = $request->input('penilaian');
        // dd($penilaian);
        // foreach ($bobot as $key => $value) {
        //     $bobot[$key] = str_replace(',', '.', $value);
        // }

        for ($i = 0; $i < count($nama_alternatif); $i++) {
            $nilai = implode(', ', $penilaian[$i]);
            // dd($nilai);
            DB::connection("CoprasSql")->table('alternatif')->insert([
                'nama_alternatif' => $nama_alternatif[$i],
                'penilaian' => $nilai
            ]);

            // $alternatifsql = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');
            // $penilaiansql = DB::connection('CoprasSql')->select('select penilaian from alternatif');
            // // Iterate through the data
            // $penilaian_kriteria[$i] = explode(' ', $penilaiansql[$i]);
            // for ($j = 0; $j < count($alternatifsql); $j++){
            //     $alternatif = $alternatifsql[$j]->nama_alternatif;
            //     $penilaian = explode(', ', $penilaiansql[$j]->penilaian);
            //     $penilaian[] = 0;
            //     $penilaian = implode(', ', $penilaian);

            //     DB::connection("CoprasSql")->table('alternatif')
            //         ->where('nama_alternatif', '=', $alternatif)
            //         ->update(['penilaian' => $penilaian
            //     ]);
            // }
        } 
        return redirect('/copras');
    }

    public function sunting_penilaian(){
        $penilaiansql = DB::connection('CoprasSql')->select('select penilaian from alternatif');

        // Iterate through the data
        foreach ($penilaiansql as $row) {
            // Explode the penilaian string into an array
            $values = explode(',', $row->penilaian);
            foreach ($values as $key => $value) {
                $values[$key] = (float)$value;
            }
            // Append the array to the result array
            $penilaian[] = $values;
        }

        $kriteriasql = DB::connection('CoprasSql')->select('select nama_kriteria from kriteria');
        // dd($kriteriasql);
        foreach ($kriteriasql as $row) { 
            $kriteria[] = $row->nama_kriteria;
        } 
        // dd($kriteria);
        
        $alternatifsql = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');
        // dd($alternatifsql);
        foreach ($alternatifsql as $row) { 
            $alternatif[] = $row->nama_alternatif;
        } 

        return view('layoutscopras.sunting_penilaian', compact('penilaian', 'kriteria', 'alternatif'));
    }

    public function simpan_sunting_penilaian(Request $request){
        $penilaian = $request->input('penilaian');
        // dd($penilaian);
        $nama_alt = DB::connection('CoprasSql')->select('select nama_alternatif from alternatif');

        for ($i=0; $i < count($penilaian); $i++) { 
            foreach ($penilaian[$i] as $key => $value) {
                $penilaian[$i][$key] = str_replace(',', '.', $value);
            }
            $penilaian[$i] = implode(", ", $penilaian[$i]);
        }
        // dd($penilaian);

        for ($i = 0; $i < count($nama_alt); $i++) {
            // if (!empty($nama_alt[$i]) && !empty($penilaian_kriteria[$i])) {
                DB::connection('CoprasSql')->table('alternatif')
                    ->where('nama_alternatif', '=', $nama_alt[$i]->nama_alternatif)
                    ->update(['penilaian' => $penilaian[$i]]);
            // }
        }
        return redirect('/copras');
    }

    public function update_krit(){

    }

    public function update_alt(){

    }

    public function hapus_krit(Request $request){
        $nama_kriteria = $request->input('kriteria');
        $id = $request->input('id');
        // dd($nama_kriteria);

        $penilaiansql = DB::connection('CoprasSql')->select('select nama_alternatif, penilaian from alternatif');
        // dd($penilaiansql);
        
        foreach ($penilaiansql as $key => $value) {
            $alternatif = $penilaiansql[$key]->nama_alternatif;
            $penilaian = explode(', ', $penilaiansql[$key]->penilaian);
            // dd($penilaian);
            // dd($id);
            array_splice($penilaian, $id, 1);
            $penilaian = implode(', ', $penilaian);
            // dd($penilaian);
            DB::connection("CoprasSql")->table('alternatif')
                ->where('nama_alternatif', '=', $alternatif)
                ->update([
                    'penilaian' => $penilaian
            ]);
        }

        DB::connection('CoprasSql')->table('kriteria')
            ->where('nama_kriteria', $nama_kriteria)
        ->delete();
  
        return redirect('/copras');
    }

    public function hapus_alt(Request $request){
        $nama_alternatif = $request->input('alternatif');
        $id = $request->input('id');

        DB::connection('CoprasSql')->table('alternatif')
            ->where('nama_alternatif', $nama_alternatif)
        ->delete();

        return redirect('/copras');
    }

    public function coba(){
        return redirect('/copras');        
    }
}
