<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailsController extends Controller
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
    
    public function showUserShopDetails(){
        return view('user.k_shop.shop_details');
    }
}



