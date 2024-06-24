<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Password;
use App\User;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forgetPassword(Request $request) {
        $request->validate(['email' => 'required|email']);
        $email=$request->email;
        $user=User::where(['email'=>$email])->first();
        if($user){
            if($user->status=='0'){
                return redirect()->route('password.securityQ',['username'=>$user->username]);
                //->with(['email'=>$email]);
            }
        }
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)])->withInput();
    }

    public function securityQuestions(Request $request){
        $username=$request->username;
        $user=User::where(['username'=>$username,'status'=>'0'])->first();
        if($user){
            return view('auth.passwords.securityQuestions',['user'=>$user]);
        }else{
            return redirect()->route('password.request');
        }
    }
    public function securityVerify(Request $request){
        $username=$request->username;
        $user=User::where(['username'=>$username,'status'=>'0'])->first();
        if($user){
            $ans1=$request->ans1;
            $ans2=$request->ans2;
            $ans3=$request->ans3;
            if($user->ans1==$ans1 && $user->ans2==$ans2 && $user->ans3==$ans3){
                $user->status='1';
                $user->login_attempt=0;
                $user->save();

                $status = Password::sendResetLink(
                    $request->only('email')
                );
                return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)])->withInput();
            }else{
                return redirect()->back()->withErrors(['status'=>'security Questions does not match with account data!'])->withInput();
            }
        }else{
            return redirect()->route('password.request');
        }
    }
}
