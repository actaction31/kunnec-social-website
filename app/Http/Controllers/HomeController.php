<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\EventInvite;
use App\Event;
use App\Follow;
use App\Http\Controllers\UserProfileController;
use auth;
class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }
    
    public function showUserDashboard(){

        $user_id=Auth::user()->id;
        $listing_count=$this->perpage;
        $listing_count=2;
        $postStatus=$this->postStatus;
        $user_ids=array();
        $follows=Follow::where(['status'=>'accepted'])
                        ->where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        });
        $user_ids=array_unique(
            array_merge ($follows->pluck('user_id')->toArray(),
            $follows->pluck('follow_userid')->toArray())
        );
        $user_ids[]=$user_id;
        $posts=Post::whereIn('user_id',$user_ids)
                    ->with('postfiles')
                    ->with('last_comments')
                    ->withCount('comments')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);           
        if(Request()->ajax()){
            return response()->json(view('user.social.userPostTable',['posts'=>$posts])->render());
        }
        $eventIds=EventInvite::where(['user_id'=>$user_id,'status'=>'new'])
                    ->with('event')
                    ->orderBy('updated_at','DESC')
                    ->paginate(3)->pluck('event_id');
        $events=Event::whereIn('id',$eventIds)
                    ->withCount('accept_invites')
                    ->get();
        $userObj=new UserProfileController();
        $mykunnec_ids=$userObj->getMyKunnecIds();
        $follows=Follow::where(['status'=>'accepted'])
                            ->where(function($query) use ($mykunnec_ids){
                                $query->orWhere(function($query) use ($mykunnec_ids){
                                    $query->whereIn('user_id',$mykunnec_ids)
                                            ->orwhereIn('follow_userid',$mykunnec_ids);
                                });
                            });
        $followsIds=array_unique(
            array_merge ($follows->pluck('user_id')->toArray(),
            $follows->pluck('follow_userid')->toArray())
        );
        $mayKnowIds=array_diff($followsIds,$mykunnec_ids);
        $suggestProfiles=User::where('id','!=',$user_id)
                            ->whereIn('id',$mayKnowIds)
                            ->paginate(3);
        return view('user.dashboard',['postStatuss'=>$postStatus,'posts'=>$posts,'events'=>$events,'suggestProfiles'=>$suggestProfiles]);
    }
}
