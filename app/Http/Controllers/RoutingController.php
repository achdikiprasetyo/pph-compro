<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function home()
    {
        // Logika untuk menampilkan artikel
        return view('home');
    }
    
    public function about()
    {
        // Logika untuk menampilkan artikel
        return view('artikel');
    }

    public function kontak()
    {
        // Logika untuk menampilkan artikel
        return view('artikel');
    }
}
