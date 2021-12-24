<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Pelanggan;
use DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = DB::table('pesanans')
                    ->join('pelanggans', 'pesanans.pelanggan_id', '=', 'pelanggans.id')
                    ->join('produks', 'pesanans.produk_id', '=', 'produks.id')
                    ->select('pesanans.id as pesanan_id', 'pesanans.*', 'pelanggans.*', 'produks.*')
                    ->get();
        return view('pesan.index',['pesanan'=>$pesanan]);
    }

    public function store(Request $request)
    {        
          //add data
        ($request->all());
          Pesanan::create($request->all());
          // if true, redirect to index
          return redirect()->route('pesanan.index')->with('Sukses', 'CheckOut Sukses!');
    }
    public function create()
    {
        $pesanan = Pesanan::all();
        $pelanggans = Pelanggan::all();
        $produks = Produk::all();
        return view('pesan.create', ['pesanan'=>$pesanan,'pelanggan'=>$pelanggans, 'produk'=>$produks]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        return view('pesan.tampilan',['pesanan'=>$pesanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = Pesanan::find($id);        
            return view('pesan.edit',['pesanan'=>$pesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->pelanggan_id = $request->pelanggan_id;
        $pesanan->produk_id= $request->produk_id;
        $pesanan->tgl_pesan = $request->tgl_pesan;
        $pesanan->tgl_pengiriman = $request->tgl_pengiriman;
        $pesanan->total = $request->total;
        $pesanan->save();
        return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
        $pesanan = Pesanan::find($id);        
        $pesanan->delete();
        return redirect()->route('pesanan.index');
    }
    public function pesan($id)
    {
        $produks = Produk::find($id);
        return view('pesan.tampilan', ['produk'=>$produks]);
    }
}
