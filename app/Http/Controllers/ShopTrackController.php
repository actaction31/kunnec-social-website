<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopTrackController extends Controller
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
    
    public function showUserShopTrack(){
        return view('user.k_shop.shop_tracking');
    }
}