<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Method Return Halaman beranda
    public function beranda(){
        return view('pages.beranda');
    }

    //Method Return Halaman tentang
    public function tentang(){
        return view('pages.tentang');
    }

    //Method Return Halaman tentang
    public function bantuan(){
        return view('pages.bantuan');
    }

    //Method Return Halaman Proposal
    public function proposal(){
        return view('pages.proposal');
    }

    //Method Return Halaman Masuk
    public function masuk(){
        return view('pages.masuk');
    }

    //Method Return Halaman Daftar
    public function daftar(){
        return view('pages.daftar');
    }
}
