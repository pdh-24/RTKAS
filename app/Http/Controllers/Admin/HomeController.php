<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $judul = 'Dashboard';
        return view('admin.dashboard', ['judul'=>$judul]);
    }

    
    public function coba()
    {
        return view('coba');
    }
    public function spk()
    {
        return view('spk');
    }

    public function kelola_dwarga(){
        
        $judul = 'Kelola_dwarga';
        return view('admin.kelola_dwarga',  ['judul'=>$judul]);
    }
    
}
