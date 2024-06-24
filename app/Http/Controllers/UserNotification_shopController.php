<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotification_shopController extends Controller
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
    
    public function showUserNotification_shop(){
        return view('user.notifications.notifications_shop');
    }
}



