<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoyController extends Controller
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
    
    public function showUserBoy(){
        return view('user.k_store.boy');
    }
}



