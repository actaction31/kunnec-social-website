<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class LandingPageController extends Controller{
    /**
     * show landing page
     */
    public function showLandingPage(){
    	$plans = Plan::all();
        return view('landing',['plans'=>$plans]);
    }

    public function comingSoon(){
        return view('comingSoon');
    }
}
