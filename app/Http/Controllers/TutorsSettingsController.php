<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorsSettingsController extends Controller
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
    
    public function showUserTutorsSettings(){
        return view('user.k_screen.tutors.tutors_settings');
    }
}