<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotStreamController extends Controller
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
    
    public function showUserSpotStream(){
        return view('user.k_spot.k_spot_stream');
    }
}