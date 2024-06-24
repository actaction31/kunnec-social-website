<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMessage_showController extends Controller
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
    
    public function showUserMessage_show(){
        return view('user.messages.message_show');
    }
}



