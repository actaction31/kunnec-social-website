<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class K2YouSettingsController extends Controller
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
    
    public function showUserK2YouSettings(){
        return view('user.k_you.k2u_settings');
    }
}