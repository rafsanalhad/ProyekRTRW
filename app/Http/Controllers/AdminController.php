<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layout.admin.dashboard');
    }
    public function kelolaWarga(){
        return view('layout.admin.kelola_warga');
    }
    public function kelolaRt(){
        return view('layout.admin.kelola_rt');
    }
    public function kelolaRw(){
        return view('layout.admin.kelola_rw');
    }
    public function kelolaUmkm(){
        return view('layout.admin.kelola_umkm');
    }
}
