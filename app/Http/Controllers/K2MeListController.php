<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class K2MeListController extends Controller
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
    
    public function showUserK2MeList(){
        return view('user.k_me.k2me_list');
    }
}