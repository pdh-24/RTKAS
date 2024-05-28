<?php

namespace App\Http\Controllers\WARGA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardwarga';
        return view('warga.dashboardwarga', ['judul' => $judul]);
    }
}
