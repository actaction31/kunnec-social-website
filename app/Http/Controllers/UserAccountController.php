<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Plan;
use App\Payment;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
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
    
    public function showUserAccount(){
        $listing_count= $this->perpage;
        //$listing_count= 1;
        
        $user_id=Auth::user()->id;
        $userData=User::where(['id'=>$user_id])
                        ->with('loc_country')
                        ->with('loc_state')
                        ->with('loc_city')
                        ->first();
        $countries = Country::all();
        $plans = Plan::all();
        $currPlan=$plans->where('id',$userData->plan)->first();
        
        $payments=Payment::where(['user_id'=>$user_id])
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $securityQuestions=$this->securityQuestions;
        //dd($currPlan);
        return view('user.account.account',['userData'=>$userData,'countries'=>$countries,'plans'=>$plans,'currPlan'=>$currPlan,'payments'=>$payments,'securityQuestions'=>$securityQuestions]);
    }
    public function updateLocation(Request $request){
        $success="error";
        $message="";
        $validator = Validator::make($request->all(), [
            'country'=>'required',
            'state'=>'required',
            'city'=>'required'
        ]);
        //dd($validator);
        if($validator->fails()){
            return  back()->withErrors($validator)->withInput();
        }else{
            $country=$request->country;
            $state=$request->state;
            $city=$request->city;
            $user=Auth::user();
            $user->country=$country;
            $user->state=$state;
            $user->city=$city;
            $user->save();
            $success="success";
            $message="location updated successfully!";
            return redirect()->back()->with($success,$message);
        }
    }

    public function changePassword(Request $request){
        $success="error";
        $message="";
        $validator = Validator::make($request->all(), [
            'password'=>'required',
            'newpassword'=>'required',
            'confpassword'=>'required|same:newpassword'
        ]);
        if($validator->fails()){
            return  back()->withErrors($validator)->withInput();
        }else{
            $user=Auth::user();
            $newpassword=Hash::make($request->newpassword);
            $user->password=$newpassword;
            
            $user->ques1=$request->ques1;
            $user->ques2=$request->ques2;
            $user->ques3=$request->ques3;
            $user->ans1=$request->ans1;
            $user->ans2=$request->ans2;
            $user->ans3=$request->ans3;
            
            $user->save();
            $success="success";
            $message="Password updated successfully!";
            //return redirect()->route('account')->with($success,$message);
            return redirect()->back()->with($success,$message);
        }
    }
    public function changePlan(Request $request){
        $success="error";
        $message="";
        $validator = Validator::make($request->all(), [
            'plan'=>'required',
        ]);
        if($validator->fails()){
            return  back()->withErrors($validator)->withInput();
        }else{
            $user=Auth::user();
            $plan=$request->plan;
            $user->plan=$plan;
            $user->save();
            $success="success";
            $message="Plan updated successfully!";
            return redirect()->back()->with($success,$message);
        }
    } 

    public function deleteUserAccount(Request $request){
        $user=Auth::user();
        $accountName=$user->first_name;
        $user->delete();
        return redirect()->route('landing')->with("deleteAccount",$accountName." Your account has been deleted successfully!");
    } 
}



