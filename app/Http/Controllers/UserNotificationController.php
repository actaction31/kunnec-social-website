<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;
use App\User;
use auth;
class UserNotificationController extends Controller
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
    
    public function showUserNotification(){
        return view('user.notifications.notifications');
    }
    public function getSocialNotifyCount(){
        $user=Auth::user();
        $user_id=$user->id;
        $SocialNotifyCount=Follow::where(['status'=>'new','follow_userid'=>$user->id])->count();
        return $SocialNotifyCount;
    }
    public function notifications(Request $request){
        $user=Auth::user();
        $user_id=$user->id;
        $listing_count= $this->perpage;
        $notify_type="account";
        if($request->notify_type){
            $notify_type=$request->notify_type;
        }
        if($notify_type=="social"){
            $nFollowsIds=Follow::where(['status'=>'new','follow_userid'=>$user->id])
                                    ->pluck('user_id')->toArray();
            $followRequests=User::whereIn('id',$nFollowsIds)
                                ->paginate($listing_count);
            return view('user.notifications.social',['followRequests'=>$followRequests]);
        }else{
            return view('user.notifications.notifications');
        }
    }
}



