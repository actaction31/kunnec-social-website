<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMessage_youController extends Controller
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
    
    public function showUserMessage_you(){
        return view('user.messages.message_you');
    }
}



