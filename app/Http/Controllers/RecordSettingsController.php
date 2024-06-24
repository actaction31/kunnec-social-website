<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordSettingsController extends Controller
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
    
    public function showUserRecordSettings(){
        return view('user.k_screen.recording.record_settings');
    }
}