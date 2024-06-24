<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorsController extends Controller
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
    
    public function showUserTutors(){
        return view('user.k_screen.tutors.tutors');
    }
}