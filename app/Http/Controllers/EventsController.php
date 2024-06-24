<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserProfileController;
use App\Event;
use App\EventInvite;
use App\Country;
use App\State;
use App\City;
use auth;
use Validator;
use \Carbon\Carbon;
class EventsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function eventsHome(Request $request){
        $listing_count= $this->perpage;
        $user=Auth::user();
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $events=Event::where('city',$user->city)
                    ->orderBy('id','DESC')
                    ->paginate($listing_count);
        return view('user.events.eventsHome',["events"=>$events,'countries'=>$countries,'eventTypes'=>$this->eventTypes,
                'eventTopics'=>$this->eventTopics]);
    }
    public function getAdminAllEvents(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $events=Event::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('title','LIKE','%'. $search_key .'%')
                                            ->orWhere('descriptions','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['events'=>$events];            
        if(Request()->ajax()){
            return response()->json(view('Admin.eventsTable',$bundle)->render());
        }
        return view('Admin.events',$bundle);
    } 
    public function eventSearch(Request $request){
        $listing_count= $this->perpage;
        //$listing_count= 1;
        
        $user=Auth::user();
        $user_id=$user->id;
        $search_key="";
        $country="";
        $state="";
        $city="";
        $event_type="";
        $event_topic="";
        
        $posted="";
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        if($request->q){
            $search_key=$request->q;
        }
        if($request->event_type){
            $event_type=$request->event_type;
        }
        if($request->event_topic){
            $event_topic=$request->event_topic;
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
        if($request->posted){
            $posted=$request->posted;
        }
        $events=null;
        $events=Event::where(function($query) use ($search_key,$country,$state,$city,$event_type,$event_topic,$posted){
                        if($country!=""){
                            $query->where('country',$country);
                        }
                        if($state!=""){
                            $query->where('state',$state);
                        }
                        if($city!=""){
                            $query->where('city',$city);
                        }
                        if($event_type!=""){
                            $query->where('eventType',$event_type);
                        }
                        if($event_topic!=""){
                            $query->where('eventTopic',$event_topic);
                        } 
                        if($search_key!=""){
                            $query->where(function($query) use ($search_key){
                                $query->orWhere('title','LIKE','%'. $search_key .'%')
                                        ->orWhere('descriptions','LIKE','%'. $search_key .'%')
                                        ->orWhere('venue','LIKE','%'. $search_key .'%');
                            });
                        }
                        if($posted=="thismonth"){
                            $now=Carbon::now();
                            $startDate = $now->startOfMonth()->format('Y-m-d');
                            $endDate = $now->endOfMonth()->format('Y-m-d');
                            $query->whereBetween('created_at', [$startDate, $endDate]);
                        }else if($posted=="thisweek"){
                            $now=Carbon::now();
                            $startDate = $now->startOfWeek()->format('Y-m-d');
                            $endDate = $now->endOfWeek()->format('Y-m-d');
                            $query->whereBetween('created_at', [$startDate, $endDate]);
                        }else if($posted=="today"){
                            $query->whereDate('created_at', Carbon::today());
                        }
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['events'=>$events,'search_key'=>$search_key,'countries'=>$countries,'eventTypes'=>$this->eventTypes,
                'eventTopics'=>$this->eventTopics];            
        /*if(Request()->ajax()){
            return response()->json(view('user.searchTable',$bundle)->render());
        }*/
        return view('user.events.eventSearch',$bundle);
    }
    public function addEvent(Request $request){
        $event_id=null;
        if($request->event_id){
            $event_id=$request->event_id;
        }
        $event=new Event();
        if($event_id){
            $event=Event::where(['id'=>$event_id])->first();
        }
        if($event){
            $countries = Country::all();
            $countries=$this->getDropArray($countries);
            $timeZones=$this->getArrayDrop($this->timeZones);
            $states=array();
            if($event->country){
                $states = State::where('country_id',$event->country)->get();
                $states=$this->getDropArray($states);
            }
            $cities=array();
            if($event->state){
                $cities = City::where('state_id',$event->state)->get();
                $cities=$this->getDropArray($cities);
            }
            $bundle=[
                'event'=>$event,
                'countries'=>$countries,
                'states'=>$states,
                'cities'=>$cities,
                /*'eventOrganizers'=>$this->eventOrganizers,
                'eventSponsors'=>$this->eventSponsors,*/
                'eventTypes'=>$this->eventTypes,
                'eventTopics'=>$this->eventTopics,
                'eventTags'=>$this->eventTags,
                'timeZones'=>$timeZones,
            ];
            return view('user.events.addEvent',$bundle);
        }else{
            return view('user.page404');
        }
    }
    public function createEvent(Request $request){
        $success="error";
        $message="unable to Add Event, Something went wrong!";
        $event_id=null;        
        if($request->event_id){
            $event_id=$request->event_id;
        }
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            //'banner'=>'required',
            'startDate'=>'required',
            'startTime'=>'required',
            'endDate'=>'required',
            'endTime'=>'required',
            'deadLine'=>'required',
            'timeZone'=>'required',
            'venue'=>'required',
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'descriptions'=>'required',
            /*'organizer'=>'required',
            'sponsors'=>'required',*/
            'eventType'=>'required',
            'eventTopic'=>'required',
            'tag'=>'required',
            'listingType'=>'required',

        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            //dd($request->all());
            $user_id=Auth::user()->id;
            $insert_data=array();
            $status='0';
            
            $descriptions=$request->descriptions;
            $descriptions = nl2br($descriptions);
            $descriptions = utf8_encode(trim($descriptions));
            
            if($request->live){
                $status='1';
            }

            $insert_data=[
                'user_id'=>$user_id,
                'title'=>$request->title,
                'startDate'=>$request->startDate,
                'startTime'=>$request->startTime,
                'endDate'=>$request->endDate,
                'endTime'=>$request->endTime,
                'deadLine'=>$request->deadLine,
                'timeZone'=>$request->timeZone,
                'venue'=>$request->venue,
                'address'=>$request->address,
                'country'=>$request->country,
                'state'=>$request->state,
                'city'=>$request->city,
                'descriptions'=>$descriptions,
                'eventType'=>$request->eventType,
                'eventTopic'=>$request->eventTopic,
                'tag'=>$request->tag,
                'listingType'=>$request->listingType,
                'ticket_type'=>$request->ticket_type,
                'ticket_label1'=>$request->ticket_label1,
                'ticket1'=>$request->ticket1,
                'ticket_label2'=>$request->ticket_label2,
                'ticket2'=>$request->ticket2,
                'status'=>$status,
            ];
            if($request->banner){
                $fileName=$this->fileUpload($request,"banner",$this->event_file_path);
                $insert_data['banner']=$fileName;
            }
            $event=Event::updateOrCreate(['id'=>$event_id],$insert_data);
            if($event){
                $userObj=new UserProfileController();
                $kunnecs=$userObj->getMyKunnecs();
                $eventInvites=array();
                if($kunnecs){
                    foreach($kunnecs as $kunnec) {
                        $row=[
                            'event_id'=>$event->id,
                            'user_id'=>$kunnec->id,
                        ];
                        $eventInvites[]=$row;
                    }
                    if($eventInvites){
                        EventInvite::insert($eventInvites);
                    }
                }
                $success="success";
                $message="Event added successfully !";
                if($event_id){
                    $message="Event updated successfully !";
                }
            }
        }
        return redirect()->route('events.list')->with($success,$message);
    }
    public function userListEvents(Request $request){
        $listing_count= $this->perpage;
        $user=Auth::user();
        $user_id=$user->id;
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $events=Event::where(['user_id'=>$user_id])
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
        return view('user.events.eventsList',["events"=>$events,'countries'=>$countries,'eventTypes'=>$this->eventTypes,
                'eventTopics'=>$this->eventTopics]);
    }
    public function eventDetails(Request $request){
        $success=0;
        $message="Sorry Invalid Event id!";
        $event_id=null;
        $user=Auth::user();
        $user_id=$user->id;       
        if($request->event_id){
            $event_id=$request->event_id;
        }
        if($event_id){
            $event=Event::where(['id'=>$event_id])
                        ->with('invite')
                        ->first();
            if($event){            
                $success=1;
                $message="event Data";
            }
        }
        if($success){
            $countries = Country::all();
            $countries=$this->getDropArray($countries);
            $userObj=new UserProfileController();
            $kunnec_ids=$userObj->getMyKunnecs()->pluck('id');
            $events=Event::whereIn('user_id',$kunnec_ids)->withCount('accept_invites')->limit(3)->get();
            return view('user.events.eventDetails',['event'=>$event,'countries'=>$countries,'eventTypes'=>$this->eventTypes,
                'eventTopics'=>$this->eventTopics,'events'=>$events]);
        }else{
            return view('user.page404');
        }
    }
}