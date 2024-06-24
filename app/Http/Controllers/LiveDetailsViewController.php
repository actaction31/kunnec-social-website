<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveDetailsViewController extends Controller
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
    
    public function showUserLiveDetailsView(){
        return view('user.k_live.live_details_view');
    }
}