<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Follow;
use App\User;
use App\SocialChat;
use auth;

class FollowController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function followRequest(Request $request){
    	$success="error";
    	$message="Something went wrong please try again later !";
    	$follow_user_id=0;
    	$user=Auth::user();
    	$user_id=$user->id;
        $room_id=0;
    	if($request->follow_user_id){
            $action="new";
            if($request->action){
                $action=$request->action;
            }
    		$follow_user_id=$request->follow_user_id;
    		if($follow_user_id!=$user_id){
	    		$followUser=User::where(["id"=>$follow_user_id])->first();
	    		if($followUser){
	    			$follow=Follow::where(['user_id'=>$user_id,'follow_userid'=>$follow_user_id])
                                    ->orWhere(function($query) use ($follow_user_id,$user_id){
                                        return $query->where(['user_id'=>$follow_user_id,'follow_userid'=>$user_id]);
                                    })
	    							->first();
                    
                    if(!$follow){
                        if($action=="new"){
    	    				$followData=[
    		    				'user_id'=>$user_id,
    		    				'follow_userid'=>$follow_user_id,
    		    			];
    	    				Follow::insert($followData);
                            $success="success";
                            $message="Follow request has been sent successfully !";
                        }
	    			}else{
                        $success="error";
                        if($follow->status=="new"){
                            $message="You already sent follow request to this user !";
                        }else if($follow->status=="accepted"){
                            $message="This user is already kunneced to you !";
                        }
                        if($action=="reject"){
                            $room_id=$follow->id;
                            $follow->delete();
                            $success="success";
                            $message="You have disconned with ".$followUser->username." !";
                            SocialChat::where(['room_id'=>$room_id])->delete();
                        }else if($action=="accept"){
                            $follow->status="accepted";
                            $follow->save();
                            $success="success";
                            $message="You have kunnected with ".$followUser->username." !";
                        }
	    			}
	    		}else{
                    $success="error";
                    $message="User does not exist!";
	    		}
    		}else{
                $success="error";
                $message="Invalid user to send follow request !";
    		}
    	}
    	return redirect()->back()->with([$success=>$message]);
    }

}



