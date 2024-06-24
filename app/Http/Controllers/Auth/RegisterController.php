<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Country;
use App\State;
use App\City;
use App\Plan;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except(['sendStatesByCountry','sendCitiesByState']);
    }
    public function showRegistrationForm(){
        //$this->middleware('guest');
        $countries = Country::all();
        $plans = Plan::all();
        $securityQuestions=$this->securityQuestions;
        return view('auth.register',['countries'=>$countries,'plans'=>$plans,'securityQuestions'=>$securityQuestions]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',
            'gender' => ['required', 'integer'],
            'plan' => ['required', 'integer'],
            'city' => ['required', 'integer'],
            'state' => ['required', 'integer'],
            'country' => ['required', 'integer'],
            'dob' => ['required', 'string'],
            // 'dob' => 'required|date|before:-16 years',
            'ques1'=>'required',
            'ques2'=>'required',
            'ques3'=>'required',
            'ans1'=>'required',
            'ans2'=>'required',
            'ans3'=>'required',
        ],['dob.before'=>'Kunnec.com is not accepting new members at this time']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'city' => $data['city'],
            'state' => $data['state'],
            'country' => $data['country'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'role' => 0,
            'plan' => $data['plan'],
            'password' => Hash::make($data['password']),
            'ques1' => $data['ques1'],
            'ques2' => $data['ques2'],
            'ques3' => $data['ques3'],
            'ans1' => $data['ans1'],
            'ans2' => $data['ans2'],
            'ans3' => $data['ans3'],
        ]);
    }
    
    public function sendStatesByCountry($id){
        $states = State::where('country_id', $id)->select(['name', 'id'])->get();
        return response()->json(['states'=> $states]);
    }

    public function sendCitiesByState($id){
        $cities = City::where('state_id', $id)->select(['name', 'id'])->get();
        return response()->json(['cities'=> $cities]);
    }

    /**
     * check username 
     * @param username
     * 
     * @return  TRUE|False 
     */
    public function checkUsername($username){
        if(User::where('username', $username)->count())
            return response()->json(['exist'=> true]);
        else
            return response()->json(['exist'=> false]);
    }
}
