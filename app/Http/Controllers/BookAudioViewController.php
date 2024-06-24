<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookAudioViewController extends Controller
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
    
    public function showUserBookAudioView(){
        return view('user.k_book.book_audio_view');
    }
}