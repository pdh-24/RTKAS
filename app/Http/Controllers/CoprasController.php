<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoprasController extends Controller
{
    public function spk(){
        return view('copras');
    }
    public function index()
    {
        $kriteria       = [
            "C1",
            "C2",
            "C3",
            "C4",
            "C5",
        ];
        $pembobotan     = [0.3, 0.2, 0.2, 0.3, 0.15];
        $tipe           = ["b", "b", "b", "b", "c"];
        $alternatif     = [
            "A1",
            "A2",
            "A3",
            "A4",
            "A5",
            "A6",
            "A7",
            "A8",
            "A9",
            "A10"
        ];
        $penilaian      = [
            [6, 5, 8, 7, 10],
            [7, 7, 9, 8, 9],
            [9, 8, 9, 9, 9],
            [8, 7, 8, 7, 9],
            [10, 9, 5, 5, 8]
        ];
        // dd($penilaian);
        
        $normalisasi    = array_fill(0, 5, array_fill(0, 5, 0));
        $normalBobot    = array_fill(0, 5, array_fill(0, 5, 0));
        $benefit        = array_fill(0, 5, 0);
        $cost           = array_fill(0, 5, 0);
        $botRelatif1    = [];
        $botRelatif2    = [];
        $nilaiPrioritas = [];
        $indexPerforma  = [];
        $peringkat      = [];
        
        /**
         * Normalisasi matriks penilaian
         */
        function menormalkan($penilaian, $normalisasi) {
            // dd($penilaian);
            
            for ($y = 0; $y < count($penilaian[0]); $y++) {     // y menyatakan kriteria ke-Y
                
                // Total nilai setiap kriteria
                $total = 0;
                for ($x = 0; $x < count($penilaian); $x++) {    // x menyatakan alternatif ke-X
                    $total += $penilaian[$x][$y];
                }
        
                // Normalisasi untuk setiap entri
                for ($x = 0; $x < count($penilaian); $x++) {    // x menyatakan alternatif ke-X
                    $normalisasi[$x][$y] = $penilaian[$x][$y] / $total; 
                }
            }
            dd($normalisasi);
        }
        
        /**
         * Menghitung normalisasi bobot dan total benefit serta cost
         */
        function hitungNormalBobot($normalisasi, $normalBobot, $benefit, $cost, $pembobotan, $tipe) {
            
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
            // dd($cost);
        }
        
        /**
         * Menghitung bobot relatif
         */
        function hitungBotRelatif($cost, $botRelatif1, $botRelatif2) {
            dd($cost);
            $totalBotRelatif = 0;
            for ($x = 0; $x < count($cost); $x++) {
                $botRelatif1[$x] = 1 / $cost[$x];
                $totalBotRelatif += $botRelatif1[$x];
            }
            for ($x = 0; $x < $cost; $x++) {
                $botRelatif2[$x] = $cost[$x] * $totalBotRelatif;
            }
        }
        
        /**
         * Menghitung nilai prioritas
         */
        function hitungPrioritas($alternatif, $cost, $benefit, $botRelatif2, $nilaiPrioritas) {
            
            $totalCost = array_sum($cost);
            for ($x = 0; $x < count($alternatif); $x++) { // x menyatakan nilai prioritas untuk alternatif ke-X
                $nilaiPrioritas[$x] = $benefit[$x] + $totalCost * $botRelatif2[$x];
            }
        }
        
        /**
         * Menghitung indeks performa
         */
        function hitungIndexPerforma($nilaiPrioritas, $indexPerforma) {

            $maxPrioritas = max($nilaiPrioritas);
            for ($x = 0; $x < count($nilaiPrioritas); $x++) {
                $indexPerforma[$x] = $nilaiPrioritas[$x] / $maxPrioritas * 100;
            }
        }
        
        /**
         * Menghitung peringkat berdasarkan nilai prioritas
         */
        function hitungPeringkat($nilaiPrioritas, $peringkat) {

            $index = -1;
            $temp = min($nilaiPrioritas) - 1;
            for ($x = 0; $x < count($nilaiPrioritas); $x++) {   // Pengecekan diulangi sebanyak (jumlah alternatif) kali
                for ($y = 0; $y < $nilaiPrioritas; $y++) {      // Perbandingan dilakukan terhadap nilai prioritas sebanyak Y
                    
                    if (in_array($y, $peringkat)) continue; // Jika indeks Y ada di dalam peringkat, lanjutkan ke iterasi berikutnya
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
        function tampilPeringkat($alternatif, $peringkat) {
            
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
        // function copras($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n) {
            menormalkan($penilaian, $normalisasi);
            dd($normalisasi);
            hitungNormalBobot($normalisasi, $normalBobot, $benefit, $cost, $pembobotan, $tipe);
            hitungBotRelatif($cost, $botRelatif1, $botRelatif2);
            hitungPrioritas($alternatif, $cost, $benefit, $botRelatif2, $nilaiPrioritas);
            hitungIndexPerforma($nilaiPrioritas, $indexPerforma);
            hitungPeringkat($nilaiPrioritas, $peringkat);
            // tampilPeringkat();
        // }
        // copras();
        // Mengarahkan ke copras.blade.php
        return view('copras', compact(
            'kriteria', 'normalisasi', 'normalBobot', 'benefit', 'cost', 'botRelatif1', 'botRelatif2', 'nilaiPrioritas', 'indexPerforma', 'peringkat', 'alternatif'
        ));
    }
}
