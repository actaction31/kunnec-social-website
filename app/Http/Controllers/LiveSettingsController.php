<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSettingsController extends Controller
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
    
    public function showUserLiveSettings(){
        return view('user.k_live.live_settings');
    }
}