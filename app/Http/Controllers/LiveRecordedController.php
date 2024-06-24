<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveRecordedController extends Controller
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
    
    public function showUserLiveRecorded(){
        return view('user.k_live.live_recorded');
    }
}