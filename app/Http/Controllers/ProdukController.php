<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index',['produk'=>$produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk;

        if($request->file('photo')){
            $image_name = $request->file('photo')->store('images','public');
        }

        $produk->name = $request->name;
        $produk->keterangan = $request->keterangan;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->photo = $image_name;

        $produk->save();
         
         // if true, redirect to index
        return redirect()->route('produk.index')->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        return view('produk.view',['produk'=>$produk]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
            return view('produk.edit',['produk'=>$produk]);
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
            $produk = Produk::find($id);
            $produk->name = $request->name;
            $produk->keterangan = $request->keterangan;
            $produk->stok = $request->stok;
            $produk->harga = $request->harga;
            if($request->file('photo')){
                $image_name = $request->file('photo')->store('images','public');
                if($produk->photo && file_exists(storage_path('app/public/' . $produk->photo))){
                    \Storage::delete('public/'.$produk->photo);
                }
                    $image_name = $request->file('photo')->store('images', 'public');
                    $produk->photo = $image_name;
            }
            $produk->save();
            return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
