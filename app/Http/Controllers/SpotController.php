<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use auth;
use Validator;

class SpotController extends Controller{

    
    public function __construct(){
        $this->middleware('auth');
    }
    public function spot(Request $request){
        
    }
}