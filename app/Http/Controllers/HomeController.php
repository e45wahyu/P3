<?php

namespace App\Http\Controllers;

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
                # code...
                return redirect('/admin/dashboard');
            }
            if (auth()->user()->role == 'manager') {
            # code...
            return redirect('/manager/dashboard');
            }
        }else {
            # code...
            return redirect('/');
        }
    }
}