<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Follow;
use auth;
class UserSearchController extends Controller
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
    
    public function showUserSearch(Request $request){
        $listing_count= $this->perpage;
        //$listing_count= 1;
        $follow_user_id=0;
        $user=Auth::user();
        $user_id=$user->id;
        $search_key="";
        $country="";
        $state="";
        $city="";
        $action="new";
        $countries = Country::all();
        if($request->follow_user_id){
            $follow_user_id=$request->follow_user_id;
        }
        if($request->action){
            $action=$request->action;
        }
        if($request->q){
            $search_key=$request->q;
        }
        if($request->country){
            $country=$request->country;
        }
        if($request->state){
            $state=$request->state;
        }
        if($request->city){
            $city=$request->city;
        }
        $profiles=null;
        //if($search_key!=""){
            $profiles=User::where('id','!=',$user_id)
                        ->where(function($query) use ($search_key,$country,$state,$city){
                            if($country!=""){
                                $query->where('country',$country);
                            }
                            if($state!=""){
                                $query->where('state',$state);
                            }
                            if($city!=""){
                                $query->where('city',$city);
                            } 
                            if($search_key!=""){
                                $query->where(function($query) use ($search_key){
                                    $query->orWhere('first_name','LIKE','%'. $search_key .'%')
                                            ->orWhere('last_name','LIKE','%'. $search_key .'%')
                                            ->orWhere('username','LIKE','%'. $search_key .'%')
                                            ->orWhere('email','LIKE','%'. $search_key .'%');
                                });
                            }
                        })
                        ->orderBy('id','desc')
                        //->toSql();
                        ->paginate($listing_count);
        //}
                        //dd($profiles);
        $follows=Follow::where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        });
        $followsIds=array_unique(
                    array_merge ($follows->pluck('user_id')->toArray(),
                    $follows->pluck('follow_userid')->toArray())
                );
        $bundle=['profiles'=>$profiles,'search_key'=>$search_key,'countries'=>$countries,'followsIds'=>$followsIds];            
        if(Request()->ajax()){
            return response()->json(view('user.searchTable',$bundle)->render());
        }
        return view('user.searchResults',$bundle);
    }
    public function profileSearch(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        $user=Auth::user();
        $user_id=$user->id;
        if($request->q){
            $search_key=$request->q;
        }
        $profiles=null;
        if($search_key!=""){
            $profiles=User::
                        where(function($query) use ($search_key){
                            if($search_key!=""){
                                return $query->orWhere('first_name','LIKE','%'. $search_key .'%')
                                            ->orWhere('last_name','LIKE','%'. $search_key .'%')
                                            ->orWhere('email','LIKE','%'. $search_key .'%');
                            } 
                        })
                        ->orderBy('id','desc')
                        ->paginate($listing_count);
            $follows=Follow::where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        });
            $followsIds=array_unique(
                    array_merge ($follows->pluck('user_id')->toArray(),
                    $follows->pluck('follow_userid')->toArray())
                );
        }

        $bundle=['profiles'=>$profiles,'search_key'=>$search_key,'followsIds'=>$followsIds];            
        if(Request()->ajax()){
            return response()->json(view('user.searchHtml',$bundle)->render());
        }
        return view('user.search',$bundle);
    }
}



