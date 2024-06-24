<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCartController extends Controller
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
    
    public function showUserBookCart(){
        return view('user.k_book.book_cart');
    }
}