<?php

namespace App\Http\Controllers\COPRASNEW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\DataAlternatif;
use App\Models\Penilaian;

class CoprasnewController extends Controller
{
    // Dashboard
    public function index()
    {
        $judul = 'Dashboard';
        return view('copras.dashboardcopras', ['judul' => $judul]);
    }

    // Data Kriteria
    public function data_kriteria()
    {
        $kriteria = Kriteria::all();
        return view('copras.data_kriteria', compact('kriteria'));
    }

    public function tambah_data_kriteria()
    {
        return view('copras.tambah_data_kriteria');
    }

    public function simpan_data_kriteria(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required|numeric',
            'jenis' => 'required|in:Benefit,Cost',
        ]);

        Kriteria::create($validatedData);

        return redirect()->route('data_kriteria')->with('success', 'Data kriteria berhasil disimpan.');
    }

    public function hapus_data_kriteria($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();

        return redirect()->route('data_kriteria')->with('success', 'Data kriteria berhasil dihapus.');
    }

    public function edit_data_kriteria($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('copras.edit_data_kriteria', compact('kriteria'));
    }

    public function update_data_kriteria(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'bobot' => 'required|numeric',
            'jenis' => 'required|string|in:Benefit,Cost',
        ]);

        $kriteria = Kriteria::findOrFail($id);
        $kriteria->update($validatedData);

        return redirect()->route('data_kriteria')->with('success', 'Data kriteria berhasil diperbarui.');
    }

    // Data Sub Kriteria
    public function data_sub_kriteria()
    {
        $kriteria = Kriteria::with('subKriteria')->get();
        return view('copras.data_sub_kriteria', compact('kriteria'));
    }

    public function tambah_data_subkriteria($kode)
    {
        return view('copras.tambah_data_subkriteria', compact('kode'));
    }

    public function simpan_data_subkriteria(Request $request, $kode)
    {
        $kriteria = Kriteria::where('kode', $kode)->firstOrFail();

        $validatedData = $request->validate([
            'no' => 'required|integer',
            'rentang_skor' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        SubKriteria::create([
            'kriteria_id' => $kriteria->id,
            'no' => $validatedData['no'],
            'rentang_skor' => $validatedData['rentang_skor'],
            'nilai' => $validatedData['nilai'],
        ]);

        // Mengarahkan kembali ke rute 'data_sub_kriteria'
        return redirect()->route('data_sub_kriteria')->with('success', 'Sub kriteria berhasil ditambahkan.');
    }

    public function edit_data_subkriteria($id)
    {
        $subkriteria = SubKriteria::findOrFail($id);
        return view('copras.edit_data_subkriteria', compact('subkriteria'));
    }

    public function update_data_subkriteria(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no' => 'required|integer',
            'rentang_skor' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        $subkriteria = SubKriteria::findOrFail($id);
        $subkriteria->update($validatedData);

        return redirect()->route('data_sub_kriteria')->with('success', 'Sub kriteria berhasil diupdate.');
    }

    public function hapus_data_subkriteria($id)
    {
        $subkriteria = SubKriteria::findOrFail($id);
        $subkriteria->delete();

        return redirect()->route('data_sub_kriteria')->with('success', 'Sub kriteria berhasil dihapus.');
    }

    // Data Alternatif
    public function data_alternatif()
    {
        $alternatif = DataAlternatif::all();
        return view('copras.data_alternatif', compact('alternatif'));
    }

    public function tambah_data_alternatif()
    {
        return view('copras.tambah_data_alternatif');
    }

    public function simpan_data_alternatif(Request $request)
    {
        $validatedData = $request->validate([
            'nama_alternatif' => 'required|string',
        ]);

        DataAlternatif::create($validatedData);

        return redirect()->route('data_alternatif')->with('success', 'Data alternatif berhasil disimpan.');
    }

    public function edit_data_alternatif($id)
    {
        $alternatif = DataAlternatif::findOrFail($id);
        return view('copras.edit_data_alternatif', compact('alternatif'));
    }

    public function update_data_alternatif(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_alternatif' => 'required|string',
        ]);

        $alternatif = DataAlternatif::findOrFail($id);
        $alternatif->update($validatedData);

        return redirect()->route('data_alternatif')->with('success', 'Data alternatif berhasil diperbarui.');
    }

    public function hapus_data_alternatif($id)
    {
        $alternatif = DataAlternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('data_alternatif')->with('success', 'Data alternatif berhasil dihapus.');
    }

    // Tampilkan data penilaian
    public function data_penilaian()
    {
        $alternatif = DataAlternatif::with('penilaian.kriteria')->get();
        return view('copras.data_penilaian', compact('alternatif'));
    }

    public function edit_data_penilaian($id)
    {
        $alternatif = DataAlternatif::with('penilaian.kriteria')->findOrFail($id);
        $kriteria = Kriteria::all();
        return view('copras.edit_data_penilaian', compact('alternatif', 'kriteria'));
    }

    public function input_data_penilaian($id)
    {
        $alternatif = DataAlternatif::findOrFail($id);
        $kriteria = Kriteria::with('subKriteria')->get();
        return view('copras.input_data_penilaian', compact('alternatif', 'kriteria'));
    }

    public function simpan_data_penilaian(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'nilai.*' => 'required|integer|min:1|max:10',
        ]);

        foreach ($request->nilai as $kriteria_id => $nilai) {
            $subKriteria = SubKriteria::find($nilai);

            Penilaian::updateOrCreate(
                [
                    'alternatif_id' => $id,
                    'kriteria_id' => $kriteria_id,
                ],
                [
                    'nilai' => $subKriteria ? $subKriteria->nilai : 0,
                ]
            );
        }

        return redirect()->route('data_penilaian')->with('success', 'Data penilaian berhasil disimpan.');
    }

    public function update_data_penilaian(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nilai.*' => 'required|integer',
        ]);

        foreach ($request->nilai as $kriteria_id => $nilai) {
            $subKriteria = SubKriteria::find($nilai);

            Penilaian::updateOrCreate(
                [
                    'alternatif_id' => $id,
                    'kriteria_id' => $kriteria_id,
                ],
                [
                    'nilai' => $subKriteria ? $subKriteria->nilai : 0,
                ]
            );
        }

        return redirect()->route('data_penilaian')->with('success', 'Data penilaian berhasil diupdate.');
    }

    public function data_perhitungan()
{
    $alternatif = DataAlternatif::with('penilaian.kriteria')->get();
    $kriteria = Kriteria::all();

    // Menghitung total nilai per kriteria
    $totalNilaiPerKriteria = [];
    foreach ($kriteria as $k) {
        $totalNilaiPerKriteria[$k->id] = $alternatif->sum(function ($alt) use ($k) {
            return $alt->penilaian->where('kriteria_id', $k->id)->sum('nilai');
        });
    }

    // Calculate normalisasi matrix
    $normalisasiMatrix = [];
    foreach ($alternatif as $alt) {
        $normalisasiBaris = [];
        foreach ($kriteria as $k) {
            $nilai = $alt->penilaian->where('kriteria_id', $k->id)->first();
            $normalisasi = $nilai ? number_format($nilai->nilai / $totalNilaiPerKriteria[$k->id], 3) : '-';
            $normalisasiBaris[] = $normalisasi;
        }
        $normalisasiMatrix[] = $normalisasiBaris;
    }

    return view('copras.data_perhitungan', compact('alternatif', 'kriteria', 'totalNilaiPerKriteria', 'normalisasiMatrix'));
}



        
    }






    
