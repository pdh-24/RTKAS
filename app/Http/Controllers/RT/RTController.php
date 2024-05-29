<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        
        $judul = 'Dashboardrt';
        return view('rt.dashboardrt', ['judul' => $judul]);
    }

    
}
