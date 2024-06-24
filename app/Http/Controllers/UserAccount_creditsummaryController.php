<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccount_creditsummaryController extends Controller
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
    
    public function showUserAccount_creditsummary(){
        return view('user.account.account_creditsummary');
    }
}



