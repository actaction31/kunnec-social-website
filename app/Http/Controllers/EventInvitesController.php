<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EventInvite;
use App\Country;
use auth;
use Validator;

class EventInvitesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function inviteUserAction(Request $request){
        $success="error";
        $message="Something went wrong please try again later !";
        $invite_id=0;
        $user=Auth::user();
        $user_id=$user->id;
        if($request->invite_id){
            $action="new";
            if($request->action){
                $action=$request->action;
            }
            $invite_id=$request->invite_id;
            $eventInvite=EventInvite::where(["id"=>$invite_id])->first();
            if($eventInvite){
                if($eventInvite->user_id==$user_id){
                    if($action=="accepted"){
                        $eventInvite->status="accepted";
                        $eventInvite->save();
                        $success="success";
                        $message="You have accepted event invite !";
                    }else if($action=="rejected"){
                        $eventInvite->status="rejected";
                        $eventInvite->save();
                        $success="success";
                        $message="You have Reject event invite !";
                    }
                }else{
                    $success="error";
                    $message="you are not autherize for this event invite !";
                }
            }else{
                $success="error";
                $message="Invalid event invite !";
            }
        }
        return redirect()->back()->with([$success=>$message]);
    }
    public function userListEventInvites(Request $request){
        $listing_count= $this->perpage;
        $user=Auth::user();
        $user_id=$user->id;
        
        $eventInvites=EventInvite::where(['user_id'=>$user_id])
                    //->with('event')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
        $countries = Country::all();
        $countries=$this->getDropArray($countries);

        return view('user.events.eventInvites',["eventInvites"=>$eventInvites,'countries'=>$countries,'eventTypes'=>$this->eventTypes,'eventTopics'=>$this->eventTopics]);
    }
}