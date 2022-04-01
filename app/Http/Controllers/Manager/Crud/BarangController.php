<?php

namespace App\Http\Controllers\Manager\Crud;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                return view('manager.crud.barang.index',['barang'=>Barang::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manager.crud.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $namafile = null;
        if ($request->hasFile('gambarbarang')) {
            # code...
            $file = $request->file('gambarbarang');
            $namafile = time()."_".$file->getClientOriginalName();
            $tujuanfile = 'foto_produk';
            $file->move($tujuanfile,$namafile);
        }
        $data = Barang::create([
            'namabarang'=>$request->namabarang,
            'hargabarang'=>$request->hargabarang,
            'ketersediaan'=>$request->ketersediaan,
            'gambarbarang'=>$namafile,
            'kategoribarang'=>$request->kategoribarang,
            'deskripsibarang'=>$request->deskripsibarang,
        ]);
        if ($data) {
            # code...
            return redirect()->route('manager.barang.index')->with('success','Data Berhasil di Tambahkan');
        }else{
            return redirect()->route('manager.barang.index')->with('error','Data Gagal di Tambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
        if ($barang->gambarbarang != null) {
            # code...
            unlink('foto_produk/'.$barang->gambarbarang);
        }
        $barang->delete();
        if ($barang) {
            # code...
            return redirect()->route('manager.barang.index')->with('success','Data Berhasil di Hapus');
        }else {
            # code...
            return redirect()->route('manager.barang.index')->with('error','Data Gagal di Hapus');
        }
    }
}
