<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserEvents_createController extends Controller
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
    
    public function showUserEvents_create(){
        return view('user.events.event_create');
    }
}



