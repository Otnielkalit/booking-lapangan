<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaPublikController extends Controller
{
    public function home()
    {
        return view('publik.pages.home', [
            'title' => 'Halo gordong'
        ]);
    }

    public function produk()
    {
        return view('publik.pages.produk', [
            'title' => 'Produk Kami sangat'
        ]);
    }

    public function produkDetail()
    {
        return view('publik.pages.produk_detail', [
            'title' => 'Produk Detail'
        ]);
    }

    public function lapangan()
    {
        return view('publik.pages.lapangan', [
            'title' => 'Produk Detail'
        ]);
    }
}
