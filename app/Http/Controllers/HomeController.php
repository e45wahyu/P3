<?php

namespace App\Http\Controllers;
use App\Models\Meja;
use App\Models\Barang; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if (auth()->check()) {
            # code...
            if (auth()->user()->role == 'admin') {
                # cod
                return redirect('/admin/dashboard');
            }
            if (auth()->user()->role == 'manager') {
                $meja = Meja::count();
                $barang = Barang::count();
                return redirect('/manager/dashboard',);
            }
            if (auth()->user()->role == 'kasir') {
                $meja = Meja::count();
                $barang = Barang::count();
                return redirect('/kasir/dashboard',);
            }
        }else {
            # code...
            return redirect('/');
        }
    }
}
