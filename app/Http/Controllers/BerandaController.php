<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class BerandaController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('beranda',['produk'=>$produks]);
    }
}
