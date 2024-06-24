<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\User;
use App\Snap;

class UserSocialController extends Controller
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
    
    public function showUserSocial(){
        $countries = Country::all();
        return view('user.social.social',['countries'=>$countries]);
    }
    public function socialHome(Request $request){
        $countries = Country::all();
        $profiles=User::inRandomOrder()->limit(18)->get();
        $snaps=Snap::with('lastfile')
                    ->with('user')
                    ->inRandomOrder()->limit(16)->get();
        return view('user.social.social_home',['countries'=>$countries,'profiles'=>$profiles,'snaps'=>$snaps]);
    }
}