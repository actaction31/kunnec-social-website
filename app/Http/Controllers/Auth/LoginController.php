<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    protected $username;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }

        /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('email');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
 
    protected function redirectTo()
    {
        if(Auth::user()->role == 1) // in case admin
            return '/admin';
        else
            return '/dashboard';
    }

    public function logout(){
        Auth::logout();
        return redirect(route('landing'));
    }
    public function makeLogout(){
        Auth::logout();
    }
    public function signin(Request $request){
        //return 'ERROR!';
        $success=0;
        $message="something went wrong please try again later!!";
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'email'=>'required|email', 
        ]);
        if ($validator->fails()) {
            return  back()
                    ->withErrors($validator, 'login')
                    ->withInput();
        }
        $userData=User::where(['email'=>$request->email])->first();

        if($userData){
            if($userData->status=='1'){
                if(!$this->validateUser($request)){
                    $success=0;
                    $message="invalid email or password!";
                    if($userData){
                        if($userData->login_attempt==4){
                            $userData->status='0';
                        }else{
                            $userData->login_attempt=$userData->login_attempt+1;
                        }
                        $userData->save();
                    }
                    
                }else{
                    if($userData->status=='1'){
                        $success=1;
                        $userData->login_attempt=0;
                        $timezone=$request->timezone;
                        if($timezone){
                            $userData->timezone=$timezone;
                        }
                        $userData->save();
                    }else{
                        $this->makeLogout();
                        $success=0;
                        $message="Account blocked, due to 4 incorrect login attempt !! <a href='".route('password.securityQ',['username'=>$userData->username])."'>Security Questions?</a>";
                    }
                }
            }else{
                $success=0;
                $message="Account blocked, due to 4 incorrect login attempt !! <a href='".route('password.securityQ',['username'=>$userData->username])."'>Security Questions?</a>";
            }
        }else{
            $success=0;
            $message="invalid email or password!";
        }

        if(!$success){
            return back()->withErrors(['message'=>$message],'login');
        }else{
            return redirect()->route('dash');
        }
    }
    public function validateUser(Request $request){
        if (!Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return false;
        }
        return true;
    }
    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }    
}
