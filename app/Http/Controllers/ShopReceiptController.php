<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopReceiptController extends Controller
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
    
    public function showUserShopReceipt(){
        return view('user.k_shop.shop_receipt');
    }
}



