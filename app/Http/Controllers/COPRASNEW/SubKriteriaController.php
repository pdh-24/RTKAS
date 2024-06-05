<?php

namespace App\Http\Controllers\COPRASNEW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\SubKriteria;


class SubKriteriaController extends Controller
{
    public function index($kriteria_id)
    {
        $kriteria = Kriteria::findOrFail($kriteria_id);
        $subKriteria = $kriteria->subKriteria;
        return view('sub_kriteria.index', compact('kriteria', 'subKriteria'));
    }

    public function create($kriteria_id)
    {
        $kriteria = Kriteria::findOrFail($kriteria_id);
        return view('sub_kriteria.create', compact('kriteria'));
    }

    public function store(Request $request, $kriteria_id)
    {
        $kriteria = Kriteria::findOrFail($kriteria_id);
        
        $request->validate([
            'no' => 'required|integer',
            'rentang_skor' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        SubKriteria::create([
            'kriteria_id' => $kriteria->id,
            'no' => $request->no,
            'rentang_skor' => $request->rentang_skor,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('sub_kriteria.index', $kriteria->id)->with('success', 'Sub kriteria berhasil ditambahkan.');
    }

    public function edit($kriteria_id, $id)
    {
        $kriteria = Kriteria::findOrFail($kriteria_id);
        $subKriteria = SubKriteria::findOrFail($id);
        return view('sub_kriteria.edit', compact('kriteria', 'subKriteria'));
    }

    public function update(Request $request, $kriteria_id, $id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        
        $request->validate([
            'no' => 'required|integer',
            'rentang_skor' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        $subKriteria->update([
            'no' => $request->no,
            'rentang_skor' => $request->rentang_skor,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('sub_kriteria.index', $kriteria_id)->with('success', 'Sub kriteria berhasil diupdate.');
    }

    public function destroy($kriteria_id, $id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        $subKriteria->delete();

        return redirect()->route('sub_kriteria.index', $kriteria_id)->with('success', 'Sub kriteria berhasil dihapus.');
    }
}
