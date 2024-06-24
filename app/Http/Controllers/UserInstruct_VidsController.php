<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInstruct_VidsController extends Controller
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
    
    public function showUserInstruct_vids(){
        return view('user.tutorial.instruct_vids');
    }
}



