<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordDetailsController extends Controller
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
    
    public function showUserRecordDetails(){
        return view('user.k_screen.recording.record_details');
    }
}