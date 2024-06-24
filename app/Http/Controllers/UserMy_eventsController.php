<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMy_eventsController extends Controller
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
    
    public function showUserMy_events(){
        return view('user.events.my_events');
    }
}



