<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use Illuminate\Support\Facades\Crypt;
use App\User;
use App\Post;
use App\Snap;
use App\Follow;
use App\Country;

class UserProfileController extends Controller
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
    public function userMayKnow(Request $request){
        $user=Auth::user();
        $user_id=$user->id;
        $listing_count= $this->perpage;
        $mykunnec_ids=$this->getMyKunnecIds();
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
        $profiles=User::where('id','!=',$user_id)
                            ->whereIn('id',$mayKnowIds)
                            ->paginate($listing_count);
        return view('user.mayKnow',['profiles'=>$profiles]);
    }
    public function getMyKunnecIds(){
        $user=Auth::user();
        $user_id=$user->id;
        $follows=Follow::where(['status'=>'accepted'])
                            ->where(function($query) use ($user_id){
                                return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                            });
        $followsIds=array_unique(
                array_merge ($follows->pluck('user_id')->toArray(),
                $follows->pluck('follow_userid')->toArray())
            );
        return $followsIds;

    }public function getMyKunnecs(){
        $user=Auth::user();
        $user_id=$user->id;
        $follows=Follow::where(['status'=>'accepted'])
                            ->where(function($query) use ($user_id){
                                return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                            });
        $followsIds=array_unique(
                array_merge ($follows->pluck('user_id')->toArray(),
                $follows->pluck('follow_userid')->toArray())
            );
        $followProfiles=User::where('id','!=',$user_id)
                            ->whereIn('id',$followsIds)
                            ->get();
        return $followProfiles;

    }
    public function showUserProfile(Request $request){
        $listing_count= $this->perpage;
        $profileView=0;
        $followRequests=null;
        $posts=null;
        $snaps=null;
        $user=Auth::user();
        $userData=$user;
        $user_id=$userData->id;
        $room_id="";
        $currFollow=null;
        if($request->user_id){
            $user_id=Crypt::decrypt($request->user_id);
            if($user_id){
                $userData=User::where(['id'=>$user_id])->first();
            }
        }
        $countries = Country::all();
        if($userData){
            $follows=Follow::where(['status'=>'accepted'])
                            ->where(function($query) use ($user_id){
                                return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                            });
            $followsIds=array_unique(
                    array_merge ($follows->pluck('user_id')->toArray(),
                    $follows->pluck('follow_userid')->toArray())
                );
            $followProfiles=User::where('id','!=',$user_id)
                                ->whereIn('id',$followsIds)
                                ->paginate($listing_count);

            if($user_id==$user->id){
                $nFollowsIds=Follow::where(['status'=>'new','follow_userid'=>$user->id])
                                    ->pluck('user_id')->toArray();
                $followRequests=User::whereIn('id',$nFollowsIds)
                                ->paginate($listing_count);
            }else{
                $currFollow=Follow::where(function($query) use ($user,$user_id){
                                        return $query->where(['user_id'=>$user->id,'follow_userid'=>$user_id])
                                                    ->orWhere(function($query) use ($user,$user_id){
                                                        $query->where(['user_id'=>$user_id,'follow_userid'=>$user->id]);
                                                    });     
                                    })
                                   ->first();
                //dd($currFollow);
                if($currFollow){
                    if($currFollow->status=="accepted"){
                        $room_id=$currFollow->id;
                    }
                }
            }
            if($userData->id==$user->id || $userData->profile_status=="public" || in_array($user->id,$followsIds)){
                $profileView=1;
                $posts=Post::where(['user_id'=>$user_id])
                    ->with('postfiles')
                    ->with('last_comments')
                    ->withCount('comments')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
                    
                $snaps=Snap::where(['user_id'=>$user_id])
                    ->with('lastfile')
                    ->with('user')
                    ->with(array('comments'=>function($query){
                        $query->orderBy('id','DESC');
                    }))
                    ->withCount('comments')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
                    //dd($posts);
            }
            $total_kunnecs=0;
            if(count($followsIds)>1){
                $total_kunnecs=count($followsIds)-1;
            }
            return view('user.social.profile',['profileView'=>$profileView,'userData'=>$userData,'followProfiles'=>$followProfiles,'followRequests'=>$followRequests,'countries'=>$countries,'total_kunnecs'=>$total_kunnecs,'room_id'=>$room_id,'posts'=>$posts,'snaps'=>$snaps,'currFollow'=>$currFollow]);
        }
    }
}



