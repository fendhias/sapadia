<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Http\Requests;

class PagesController extends Controller
{
    public function homepage()
    {
        $halaman = 'home';
        $produk   = Produk::all();
        return view('pages.homepage',compact('produk','halaman'));
    }
}
