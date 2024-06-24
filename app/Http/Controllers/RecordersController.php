<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Recorder;
use App\FavRecorder;
use App\RecorderComment;
use App\RecorderSchedule;
use auth;
use App\Country;
use App\RecordCat;
use App\User;
use DB;

class RecordersController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function createComment(Request $request){
        $success="error";
        $message="unable to add comment, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'star'=>'required',
            'title'=>'required',
            'comment'=>'required',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $recorder_id=$request->recorder_id;
            $recorder=Recorder::where('id',$recorder_id)->first();
            if($recorder){
                if($recorder->user_id!=$user_id){
                    if(!$recorder->user_comment){
                        $star=$request->star;
                        $insert_data=[
                            'user_id'=>$user_id,
                            'star'=>$star,
                            'recorder_id'=>$recorder_id,
                            'title'=>$request->title,
                            'comment'=>$request->comment,
                        ];
                        $comment=RecorderComment::create($insert_data);
                        if($comment){
                            $success="success";
                            $message="Comment added successfully !";
                        }
                    }else{
                        $message="Thank you!!, You have already added review on this !";
                    }
                }else{
                    $message="You can not add review to yourself !";
                }
            }else{
                $message="Recorder does not exist !";
            }
            return redirect()->back()->with($success,$message);
        }
    }
    public function recorderDetails(Request $request){
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=RecordCat::where(['status'=>'1'])
                    ->get();
        $recordCats=$this->getDropArray($cats);
        $recorder_id=$request->recorder_id;
        $recorder=Recorder::where(['id'=>$recorder_id])->withCount('likes')->first();

        if($recorder){
            $listing_count= $this->perpage;
            $comments=RecorderComment::where('recorder_id',$recorder_id)
                                        ->orderBy('created_at','DESC')
                                        ->paginate($listing_count);
            $data=[
                'countries'=>$countries,
                'recordCats'=>$recordCats,
                'recorder'=>$recorder,
                'comments'=>$comments,
                'tutor_types'=>$this->tutor_types,
                'tutor_levels'=>$this->tutor_levels,
                'available_days'=>$this->available_days
            ];
            return view('user.k_screen.recording.recorderDetails',$data);
        }else{
            return view('user.page404');
        }
    }
    public function likeRecorder(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        $recorder_id=0;
        $user_id=Auth::user()->id;
        if($request->recorder_id){
            $recorder_id=$request->recorder_id;
        }
        $recorder=Recorder::where(['id'=>$recorder_id])->first();
        if($recorder){
            $favRecorder=FavRecorder::where(['user_id'=>$user_id,"recorder_id"=>$recorder_id])->first();
            if($favRecorder){
                $favRecorder->forceDelete();
                $success=1;
                $msg="Removed from Favorite !!";
            }else{
               $fav_insert=[
                    'user_id'=>$user_id,
                    'recorder_id'=>$recorder_id
                ];
                $favRecorder=FavRecorder::create($fav_insert);
                if($favRecorder){
                    $success=1;
                    $msg="Added to Favorite !!";
                } 
            }
        }else{
            $success=0;
            $msg="invalid id !!";
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function recordersHome(Request $request){
        $topRated_total=$this->topRated_total;
        $topRated_rating=$this->topRated_rating;
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=RecordCat::where(['status'=>'1'])
                    ->get();
        $recordCats=$this->getDropArray($cats);
        $new_tutors=Recorder::where('type','0')->latest()->take(5)->get();
        $new_recorders=Recorder::where('type','1')->latest()->take(5)->get();
        $top_tutors=Recorder::where('type','0')
                            ->whereHas('rating', function($q) use($topRated_total,$topRated_rating){
                                $q->selectRaw('recorder_id,COUNT(*) as total_rating,avg(star) as avg_rating')
                                    ->having('avg_rating','>',$topRated_rating)
                                    ->having('total_rating','>',$topRated_total)
                                    ->groupBy('recorder_id');
                            })
                            ->latest()->take(5)->get();
        $top_recorders=Recorder::where('type','1')
                                ->whereHas('rating', function($q) use($topRated_total,$topRated_rating){
                                    $q->selectRaw('recorder_id,COUNT(*) as total_rating,avg(star) as avg_rating')
                                    ->having('avg_rating','>',$topRated_rating)
                                    ->having('total_rating','>',$topRated_total)
                                    ->groupBy('recorder_id');
                                })
                                ->latest()->take(5)->get();

        $data=[
            'new_tutors'=>$new_tutors,
            'new_recorders'=>$new_recorders,
            'top_tutors'=>$top_tutors,
            'top_recorders'=>$top_recorders,
            'countries'=>$countries,
            'recordCats'=>$recordCats,
            'tutor_types'=>$this->tutor_types,
            'tutor_levels'=>$this->tutor_levels,
            'available_days'=>$this->available_days,
        ];
        return view('user.k_screen.recording.recorderHome',$data);
    }
    public function AllRecorderList(Request $request){
        $record_cat_id=0;
        $tutor_level=[];
        $type="all";
        $fee_type="all";
        $country="";
        $state="";
        $city="";
        $available_days="";
        $rating="all";
        
        if($request->tutor_level){
            $tutor_level=$request->tutor_level;
            $key = array_search("all", $tutor_level);
            if (false !== $key) {
                unset($tutor_level[$key]);
            }
        }
        if($request->available_days){
            $available_days=$request->available_days;
            $key = array_search("all",$available_days);
            if (false !== $key) {
                unset($available_days[$key]);
            }
        }
        if($request->fee_type){
            $fee_type=$request->fee_type;
        }
        if($request->rating){
            $rating=$request->rating;
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
        if($request->has("type")){
            $type=$request->type;
        }
        if($request->record_cat_id){
            $record_cat_id=$request->record_cat_id;
            //$record_cat=RecordCat::where(['id'=>$cat_id])->first();
        }
        $listing_count= $this->perpage;
        //$listing_count= 1;
        $recorders=Recorder::where(function($query) use($record_cat_id,$type,$country,$state,$city,$tutor_level,$fee_type,$available_days,$rating){
                if($record_cat_id){
                    $query->where('record_cat_id',$record_cat_id);
                }
                if($type!="all"){
                    $query->where('type',$type);
                }
                if($fee_type!="all"){
                    $query->where('fee_type',$fee_type);
                }
                if($tutor_level){
                    $query->whereIn('level',$tutor_level);
                }
                if($country!=""){
                    $query->whereHas('user', function($q) use($country){
                        $q->where('country',$country);
                    });
                }
                if($state!=""){
                    $query->whereHas('user', function($q) use($state){
                        $q->where('state',$state);
                    });
                }
                if($city!=""){
                    $query->whereHas('user', function($q) use($city){
                        $q->where('country',$city);
                    });
                }
                if($rating!="all"){
                    $query->whereHas('rating', function($q) use($rating){
                        $q->selectRaw('recorder_id,avg(star) as avg_rating')
                            ->having('avg_rating','>=',$rating)
                            ->groupBy('recorder_id');
                    });
                }
                if($available_days){
                    //$query->whereRaw("JSON_EXTRACT(available_days,'$[$dayIndex]') != 'NULL'");
                    $query->whereHas('schedules', function($q) use($available_days){
                        $q->whereIn('day',$available_days);
                    });
                }
                
                /* if($search_key!=""){
                    $query->where(function($query) use ($search_key){
                        $query->orWhere('title','LIKE','%'. $search_key .'%')
                                ->orWhere('descriptions','LIKE','%'. $search_key .'%');
                    });
                } */
            })
            ->orderBy('created_at','DESC')
            ->paginate($listing_count);

        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=RecordCat::where(['status'=>'1'])
                    ->get();
        $recordCats=$this->getDropArray($cats);
        $bundle=[
            'countries'=>$countries,
            'cats'=>$cats,
            'recordCats'=>$recordCats,
            'recorders'=>$recorders,
            'tutor_types'=>$this->tutor_types,
            'tutor_levels'=>$this->tutor_levels,
            'available_days'=>$this->available_days,
        ];
        return view('user.k_screen.recording.recordersList',$bundle);
    }
    public function recorderSettings(Request $request){
        $listing_count=$this->perpage;
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=RecordCat::where(['status'=>'1'])
                    ->get();
        $recordCats=$this->getDropArray($cats);
        $user=Auth::user();
        $user_id=$user->id;
        $userData=$user;
        
        $recorder=Recorder::where('user_id',$user_id)->with('schedules')->first();
        if(!$recorder){
            $recorder=new Recorder();    
        }
        $favTutors=FavRecorder::where('user_id',$user_id)
                            ->with(['recorder'=>function($query){
                                $query->with('user');
                            }])
                            ->whereHas('recorder', function($q){
                                $q->where('type','0');
                            })
                            ->orderBy('created_at','DESC')
                            ->paginate($listing_count);
        $favRecorders=FavRecorder::where('user_id',$user_id)
                            ->with(['recorder'=>function($query){
                                $query->with('user');
                            }])
                            ->whereHas('recorder', function($q){
                                $q->where('type','1');
                            })
                            ->orderBy('created_at','DESC')
                            ->paginate($listing_count);
        $r_schedules=$recorder->schedules->toArray();

        $recorder_history = DB::select('SELECT a.id, c.image as host_image, c.username as host_username, d.image as guest_image, d.username as guest_username, b.title, b.fee_type, b.fee, a.paid_amount, a.start_at, a.end_at FROM recorder_list as a LEFT JOIN recorders as b ON a.host_id = b.user_id LEFT JOIN users as c ON a.host_id = c.id LEFT JOIN users as d ON a.guest_id = d.id;');
        $schedules=array();
        if($this->available_days){
            foreach ($this->available_days as $key=>$available_day){
                $index=-1;
                $r_schedule=null;
                if(array_search($key, array_column($r_schedules,'day'))!== false){
                    $index=array_search($key, array_column($r_schedules,'day'));
                }
                if(isset($r_schedules[$index])){
                    $r_schedule=$recorder->schedules[$index];
                }
                $s_time=NULL;
                $e_time=NULL;
                if($r_schedule){
                    $s_time=$r_schedule['start_time'];
                    $e_time=$r_schedule['end_time'];
                }
                $schedules[]=(object) [
                    'day'=>$key,
                    'name'=>$available_day,
                    'start_time'=>$s_time,
                    'end_time'=>$e_time,
                ];
            }
        }
        $data=[
            'countries'=>$countries,
            'cats'=>$cats,
            'userData'=>$userData,
            'recorder'=>$recorder,
            'schedules'=>$schedules,
            'recordCats'=>$recordCats,
            'favRecorders'=>$favRecorders,
            'tutor_types'=>$this->tutor_types,
            'favTutors'=>$favTutors,
            'tutor_levels'=>$this->tutor_levels,
            'languages'=>$this->languages,
            'available_days'=>$this->available_days,
            'recorder_history'=>$recorder_history
        ];
        return view('user.k_screen.recording.recorderSettings',$data);
    }
    public function recorderSetup(Request $request){
        $success="error";
        $message="unable to update, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'record_cat_id'=>'required',
            'type'=>'required',
            'title'=>'required',
            'descriptions'=>'required',
            'level'=>'required',
            'fee'=>'required',
            'fee_type'=>'required',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            
            $descriptions=$request->descriptions;
            /* $descriptions = nl2br($descriptions);
            $descriptions = utf8_encode(trim($descriptions)); */
            $k_to_you_show="0";
            if($request->has("k_to_you_show")){
                $k_to_you_show="1";
            }
            $language=NULL;
            if($request->language){
                $language=$request->language;
            }
            $days=[];
            if($request->days){
                $days=$request->days;
            }
            $start_time=[];
            if($request->start_time){
                $start_time=$request->start_time;
            }
            $end_time=[];
            if($request->end_time){
                $end_time=$request->end_time;
            }
            $insert_data=[
                'user_id'=>$user_id,
                'record_cat_id'=>$request->record_cat_id,
                'type'=>$request->type,
                'title'=>$request->title,
                'descriptions'=>$descriptions,
                'level'=>$request->level,
                'fee'=>$request->fee,
                'fee_type'=>$request->fee_type,
                'k_to_you_show'=>$k_to_you_show,
                'language'=>$language
            ];
            if($request->cover_image){
                $fileName=$this->fileUpload($request,"cover_image",$this->record_file_path);
                $insert_data['cover_image']=$fileName;
            }
            $recorder=Recorder::updateOrCreate(['user_id'=>$user_id],$insert_data);
            if($recorder){
                RecorderSchedule::where(['recorder_id'=>$recorder->id])->whereNotIn('day',$days)->delete();
                $schedule_insert=array();
                $available_days=$this->available_days;
                if($available_days){
                    foreach($available_days as $key=>$available_day){                       
                        $s_time=NULL;
                        $e_time=NULL;
                        $day=$key;
                        $index=array_search($day,array_keys($available_days));
                        if(isset($start_time[$index])){
                            $s_time=$start_time[$index];
                        }
                        if(isset($end_time[$index])){
                            $e_time=$end_time[$index];
                        }
                        if($s_time || $e_time){
                            $row=[
                                'recorder_id'=>$recorder->id,
                                'day'=>$day,
                                'start_time'=>$s_time,
                                'end_time'=>$e_time,
                            ];
                            $schedule_insert[]=$row;
                        }
                    }
                }
                if($schedule_insert){
                    RecorderSchedule::upsert($schedule_insert,['recorder_id','day']);
                }
                $success="success";
                $message="Recorder settings Updated successfully !";
            }
            return redirect()->back()->with($success,$message);
        }
    }
}