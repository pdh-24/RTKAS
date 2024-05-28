<?php

namespace App\Http\Controllers\BENDAHARA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BendaharaController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardbendahara';
        Log::info('BendaharaController index method called.');
        return view('bendahara.dasboardbendahara', ['judul' => $judul]);
    }
}
