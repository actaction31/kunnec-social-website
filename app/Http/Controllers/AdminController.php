<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Admin; 
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller{
    public function __construct(){
        
    }
    
    public function forgetPassword(Request $request){
        return view('Admin.forgetPassword');
    }
    public function loginAdmin(){
        return view('Admin.login');
    }
    public function makeLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'email'=>'required|email',
            
        ]);
        if ($validator->fails()) {
            return  back()
                    ->withErrors($validator)
                    ->withInput();
        }
        if(!$this->validateUser($request)){
            return back()->withErrors(['message'=>'invalid email or password!']);
        }
        return redirect()->route('admin.dashboard');
    }
    public function logout(){
        $this->makeLogout();
        return redirect()->route('admin.login_form');
    }
    public function makeLogout(){
        Auth::guard('admin')->logout();
    }
    public function validateUser(Request $request){
        if (!Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return false;
        }
        return true;
    }
    public function dashboard(Request $request){
        $redirect_uri=$request->redirect_uri;
        if($redirect_uri){
            return redirect()->route($redirect_uri);
        }
        return view('Admin.dashboard');
    }
}
