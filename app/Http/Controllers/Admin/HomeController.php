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
}
