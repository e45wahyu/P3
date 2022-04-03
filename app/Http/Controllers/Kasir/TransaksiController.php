<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Cart;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        //
        return view('kasir.transaksi.index',['barang'=>Barang::latest()->paginate(),'cart'=>Cart::latest()->get()]);
    }

}
