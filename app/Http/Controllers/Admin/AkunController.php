<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AkunModel;
class AkunController extends Controller
{
    public function index(){
        $judul = 'Tabel Akun';
        $user = AkunModel::all();
        return view('admin.akun', ['data' => $user, 'judul'=>$judul]); 
    }

    public function rute(){
        $judul = 'Tabel';
        return view('admin.akun', ['judul'=>$judul]);    }

}
