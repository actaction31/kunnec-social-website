<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookReceiptController extends Controller
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
    
    public function showUserBookReceipt(){
        return view('user.k_book.book_receipt');
    }
}