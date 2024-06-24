<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KtaskController extends Controller
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
    
    public function showUserKtask(){
        return view('user.k_task.task');
    }
}