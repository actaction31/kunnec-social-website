<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopCartController extends Controller
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
    
    public function showUserShopCart(){
        return view('user.k_shop.shop_cart');
    }
}



