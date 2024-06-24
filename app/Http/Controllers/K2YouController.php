<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Country;
use App\JobCat;
use App\Profile;
use App\ProfileEducation;
use App\ProfileCertification;
use App\WorkHistory;
use App\FavProfile;
use App\ProfileRating;
use App\Portfolio;
use auth;
use DB;
use \Carbon\Carbon;
use App\Follow;
class K2YouController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function showUserK2You(){
        return view('user.k_you.k2u');
    }
    public function searchProfiles(Request $request){
        $user_id=Auth::user()->id;
        $cat_id=0;
        $chatRooms=array();
        $country="";
        $state="";
        $city="";
        $search_key="";
        $posted="";
        $classification="";
        $jobTypes=array();
        $payment_types=array();
        if($request->classification){
            $classification=$request->classification;
        }
        if($request->jobTypes){
            $jobTypes=$request->jobTypes;
        }if($request->payment_types){
            $payment_types=$request->payment_types;
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
        if($request->cat_id){
            $cat_id=$request->cat_id;
        }
        if($request->posted){
            $posted=$request->posted;
        }
        $listing_count= $this->perpage;
        $profiles=Profile::where(function($query) use($cat_id,$search_key,$country,$state,$city,$posted,$classification,$jobTypes,$payment_types){
                if($cat_id){
                    $query->where('job_cat_id',$cat_id);
                }
                
                /*if($country!=""){
                    $query->where('country',$country);
                }
                if($state!=""){
                    $query->where('state',$state);
                }
                if($city!=""){
                    $query->where('city',$city);
                }*/
                if($classification){
                    $query->where('job_type',$classification);
                }
                if($payment_types){
                    $query->whereIn('payment_type',$payment_types);
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
            ->where('user_id','!=',$user_id)
            ->where(function($query) use($jobTypes){
                if($jobTypes){
                    //$query->whereJsonContains('availability',$jobTypes);
                    /*$jobTypes=json_encode($jobTypes);
                    $query->whereRaw("JSON_CONTAINS(availability,'".$jobTypes."')");*/
                    foreach($jobTypes as $jobType){
                        $query->orWhere('availability','LIKE','%'. $jobType .'%');
                    }
                }
            })
            ->with("user")
            ->with("avg_rating")
            ->with("job_category")
            ->with("user_fav")
            ->whereHas("user", function($query) use($search_key){
                $query->where('first_name','LIKE','%'. $search_key .'%')
                        ->orWhere('last_name','LIKE','%'. $search_key .'%');
            })
            ->orderBy('created_at','DESC')
            /*->toSql();
            dd($profiles);*/
            ->paginate($listing_count);
            //dd($profiles);
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        /*if($profiles){
            $chatRooms=Follow::where(['status'=>'accepted'])
                        ->where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        });
            $chatRooms=$chatRooms->pluck('id')->toArray();
        }*/
        $data=[ 
            'countries'=>$countries,
            'cats'=>$cats,
            'jobTypes'=>$this->jobTypes,
            'paymentTypes'=>$this->paymentTypes,
            'classifications'=>$this->classifications,
            'profiles'=>$profiles,
            'chatRooms'=>$chatRooms,
        ];
        return view('user.k_you.search_list',$data);
    }
    public function createRating(Request $request){
        $success="error";
        $message="unable to update, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'profile_id'=>'required',
            'star'=>'required',
            'review_text'=>'required',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $profile_id=$request->profile_id;
            $insert_data=[
                "user_id"=>$user_id,
                "profile_id"=>$profile_id,
                "star"=>$request->star,
                "review_text"=>$request->review_text
            ];
            $profileRating=ProfileRating::updateOrCreate(['user_id'=>$user_id,'profile_id'=>$profile_id],$insert_data);
            if($profileRating){
                $success="success";
                $message="Rating submitted successfully !";
                return redirect()->back()->with($success,$message);
            }
        }
    }
    public function deletePortfolio(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $portfolio=Portfolio::where(['id'=>$id])->first();
            if($portfolio){
                $portfolio->forceDelete();
                $success=1;
                $msg="deleted successfully! ";
            }else{
                $success=0;
                $msg="invalid id to delete!";
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function deleteWork(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $workHistory=WorkHistory::where(['id'=>$id])->first();
            if($workHistory){
                $workHistory->forceDelete();
                $success=1;
                $msg="deleted successfully! ";
            }else{
                $success=0;
                $msg="invalid id to delete!";
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function deleteEducation(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $education=ProfileEducation::where(['id'=>$id])->first();
            if($education){
                $education->forceDelete();
                $success=1;
                $msg="deleted successfully! ";
            }else{
                $success=0;
                $msg="invalid id to delete!";
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function deleteCert(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $certification=ProfileCertification::where(['id'=>$id])->first();
            if($certification){
                $certification->forceDelete();
                $success=1;
                $msg="deleted successfully! ";
            }else{
                $success=0;
                $msg="invalid id to delete!";
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function addToFavourite(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        $profile_id=0;
        $user_id=Auth::user()->id;
        if($request->profile_id){
            $profile_id=$request->profile_id;
        }
        $profile=Profile::where(['id'=>$profile_id])->first();
        if($profile){
            $favProf=FavProfile::where(['user_id'=>$user_id,"profile_id"=>$profile_id])->first();
            if($favProf){
                $favProf->forceDelete();
                $success=1;
                $msg="Profile Removed from Favorite !!";
            }else{
               $fav_insert=[
                    'user_id'=>$user_id,
                    'profile_id'=>$profile_id
                ];
                $favProfile=FavProfile::create($fav_insert);
                if($favProfile){
                    $success=1;
                    $msg="Profile added to Favorite !!";
                } 
            }
        }else{
            $success=0;
            $msg="invalid profile id !!";
        }
        $response['success']=$success;
        $response['message']=$msg;
        return response()->json($response);
    }
    public function addPortfolioHtml(Request $request){
        $type=$request->type;
        $portfolio=new Portfolio();
        return response()->json(view('user.k_you.addPortfolio',['portfolio'=>$portfolio,'type'=>$type])->render());
    }
    public function addWorkHtml(Request $request){
        $work_history=new WorkHistory();
        return response()->json(view('user.k_you.workHistory',['work_history'=>$work_history])->render());
    }
    public function addEducationHtml(Request $request){
        $education=new ProfileEducation();
        return response()->json(view('user.k_you.education',['education'=>$education])->render());
    }
    public function addCertHtml(Request $request){
        $certification=new ProfileCertification();
        return response()->json(view('user.k_you.certification',['certification'=>$certification])->render());
    }
    public function viewProfile(Request $request){
        $redirect="";

        $listing_count=$this->perpage;
        $room_id=null;
        $user=Auth::user();
        $user_id=$user->id;
        $profile_user_id=0;
        $profile_id=0;
        if($request->redirect){
            $redirect=$request->redirect;    
        }
        if($request->user_id){
            $profile_user_id=$request->user_id;    
        }
        if(!$profile_user_id){
            $profile_user_id=$user_id;
        }
        $is_fav=false;
        $profile=Profile::where("user_id",$profile_user_id)
                        ->with("user")
                        ->with("job_category")
                        ->first();
        //if($profile){
            $profile_id=$profile_user_id;
            $fav_profile=FavProfile::where(['user_id'=>$user_id,'profile_id'=>$profile_id])->first();
            if($fav_profile){
                $is_fav=true;
            }
            $countries = Country::all();
            $countries=$this->getDropArray($countries);
            $cats=JobCat::where(['status'=>'1'])
                        ->with('subcats')
                        ->get();
            $reviews=ProfileRating::where("profile_id",$profile_id)
                                    ->with('user')
                                    ->orderBy('created_at','DESC')
                                    ->paginate($listing_count);

            $portfolios=Portfolio::where('user_id',$profile_user_id)
                            ->orderBy('id','DESC')
                            ->get()->groupBy('file_type');
            $currFollow=Follow::where(function($query) use ($user_id,$profile_user_id){
                                return $query->where(['user_id'=>$profile_user_id,'follow_userid'=>$user_id])
                                            ->orWhere(function($query) use ($user_id,$profile_user_id){
                                                $query->where(['user_id'=>$user_id,'follow_userid'=>$profile_user_id]);
                                            });     
                            })
                           ->first();
                //dd($currFollow);
                if($currFollow){
                    if($currFollow->status=="accepted"){
                        $room_id=$currFollow->id;
                    }
                }
                if($redirect=="chat"){
                    if($room_id){
                        return redirect()->route('messages',['room_id'=>$room_id]);
                    }
                }
            $data=[ 
                'countries'=>$countries,
                'cats'=>$cats,
                'jobTypes'=>$this->jobTypes,
                'paymentTypes'=>$this->paymentTypes,
                'classifications'=>$this->classifications,
                'profile'=>$profile,
                'is_fav'=>$is_fav,
                'reviews'=>$reviews,
                'portfolios'=>$portfolios,
                'room_id'=>$room_id
            ];
            return view('user.k_you.kToYouProfile',$data);
        /* }else{
            return view('user.page404');
        } */
    }
    public function ktoYouHome(Request $request){
        $listing_count=$this->perpage;
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        $profiles=Profile::with("user")
                        ->with("job_category")
                        ->orderBy('updated_at','DESC')
                        ->paginate($listing_count);
        //dd($profiles);
        $data=[ 
            'countries'=>$countries,
            'cats'=>$cats,
            'jobTypes'=>$this->jobTypes,
            'paymentTypes'=>$this->paymentTypes,
            'classifications'=>$this->classifications,
            'profiles'=>$profiles
        ];
        return view('user.k_you.kToYouHome',$data);
    }
    public function kToYouSettings(Request $request){
        $listing_count=$this->perpage;
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        $jobCats=$this->getDropArray($cats);
        $user=Auth::user();
        $user_id=$user->id;
        $userData=$user;
        
        $profile=Profile::where('user_id',$user_id)->first();
        if(!$profile){
            $profile=new Profile();    
        }
        $favProfiles=FavProfile::where('user_id',$user_id)
                            ->with(['profile'=>function($query){
                                $query->with('user');
                            }])
                            ->orderBy('created_at','DESC')
                            ->paginate($listing_count);
        $portfolios=Portfolio::where('user_id',$user_id)
                            ->orderBy('id','DESC')
                            ->get()->groupBy('file_type');
                            //dd($portfolios);
        return view('user.k_you.kToYouSettings',['countries'=>$countries,'cats'=>$cats,'jobTypes'=>$this->jobTypes,'paymentTypes'=>$this->paymentTypes,'classifications'=>$this->classifications,'languages'=>$this->languages,'userData'=>$userData,'profile'=>$profile,'jobCats'=>$jobCats,'favProfiles'=>$favProfiles,'portfolios'=>$portfolios]);
    }
    public function createPortfolio(Request $request){
        $user_id=Auth::user()->id;
        $files=array();
        if($request->files){
            $files=$this->bulkFileUpload($request,"files",$this->portfolio_file_path."/".$user_id);
        }
        $descriptions=$request->descriptions;
        $thumbnail=$request->thumbnail;
        $port_ids=$request->port_id;
        $portfolio_file=$request->portfolio_file;
        $portfolio_file_type=$request->portfolio_file_type;
        $portfolios=null;
        if($port_ids){
            $index=0;
            foreach($port_ids as $key=>$port_id){ 
                if($port_id){
                    $portfolio=[
                        'id'=>$port_id,
                        'user_id'=>$user_id,
                        'file'=>$portfolio_file[$key],
                        'file_type'=>$portfolio_file_type[$key],
                        'descriptions'=>$descriptions[$key],
                    ];
                    $fileKey="files".$port_id;
                    if($request->$fileKey){
                        $file=$this->bulkFileUpload($request,$fileKey,$this->portfolio_file_path."/".$user_id);
                        $portfolio['file']=$file[0]['file'];
                        $portfolio['file_type']=$file[0]['file_type'];
                    }
                }else{
                    $portfolio=[
                        'id'=>null,
                        'user_id'=>$user_id,
                        'file'=>null,
                        'file_type'=>"img",
                        'descriptions'=>$descriptions[$key],
                    ];
                    if($files){
                        $portfolio['file']=$files[$index]['file'];
                        $portfolio['file_type']=$files[$index]['file_type'];
                    }
                    $index++;
                }
                $portfolios[]=$portfolio;
            }
        }

        /*if($files){
            foreach($files as $key=>$file){
                $portfolios[]=[
                    'user_id'=>$user_id,
                    'file'=>$file['file'],
                    'file_type'=>$file['file_type'],
                    'descriptions'=>$descriptions[$key],
                ];
            }
        }*/
        if($portfolios){
            Portfolio::upsert($portfolios,['id']);
        }
        $success="success";
        $message="Portfolio added successfully !";
        return redirect()->back()->with($success,$message);

    }
    public function createVideoPortfolio(Request $request){
        $user_id=Auth::user()->id;
        $files=array();
        if($request->files){
            $files=$this->bulkFileUpload($request,"files",$this->portfolio_file_path."/".$user_id);
        }
        $thumbnails=array();
        if($request->thumbnail){
            $thumbnails=$this->bulkFileUpload($request,"thumbnail",$this->portfolio_file_path."/".$user_id);
        }
        $descriptions=$request->descriptions;
        $thumbnail=$request->thumbnail;
        $port_ids=$request->port_id;
        $thumbnail_file=$request->thumbnail_file;
        $portfolio_file=$request->portfolio_file;
        $portfolio_file_type=$request->portfolio_file_type;
        $portfolios=null;
        if($port_ids){
            $index=0;
            foreach($port_ids as $key=>$port_id){ 
                if($port_id){
                    $portfolio=[
                        'id'=>$port_id,
                        'user_id'=>$user_id,
                        'file'=>$portfolio_file[$key],
                        'file_type'=>$portfolio_file_type[$key],
                        'descriptions'=>$descriptions[$key],
                        'thumbnail'=>$thumbnail_file[$key],
                    ];
                    $fileKey="files".$port_id;
                    if($request->$fileKey){
                        $file=$this->bulkFileUpload($request,$fileKey,$this->portfolio_file_path."/".$user_id);
                        $portfolio['file']=$file[0]['file'];
                        $portfolio['file_type']=$file[0]['file_type'];
                    }
                    $thumbKey="thumbnail".$port_id;
                    if($request->$thumbKey){
                        $thumbfile=$this->bulkFileUpload($request,$thumbKey,$this->portfolio_file_path."/".$user_id);
                        $portfolio['thumbnail']=$thumbfile[0]['file'];
                    }
                }else{
                    $portfolio=[
                        'id'=>null,
                        'user_id'=>$user_id,
                        'file'=>null,
                        'file_type'=>"video",
                        'descriptions'=>$descriptions[$key],
                        'thumbnail'=>null,
                    ];
                    if($files){
                        $portfolio['file']=$files[$index]['file'];
                        $portfolio['file_type']=$files[$index]['file_type'];
                    }
                    if($thumbnails){
                        $portfolio['thumbnail']=$thumbnails[$index]['file'];
                    }
                    $index++;
                }
                $portfolios[]=$portfolio;
            }
        }

        /*if($files){
            foreach($files as $key=>$file){
                $portfolios[]=[
                    'user_id'=>$user_id,
                    'file'=>$file['file'],
                    'file_type'=>$file['file_type'],
                    'descriptions'=>$descriptions[$key],
                ];
            }
        }*/
        if($portfolios){
            Portfolio::upsert($portfolios,['id']);
        }
        $success="success";
        $message="Portfolio added successfully !";
        return redirect()->back()->with($success,$message);

    }
    public function createWorkHistory(Request $request){
        $success="error";
        $message="unable to update, Something went wrong!";
        
        $user_id=Auth::user()->id;
        $insert_data=array();
        $profile=Profile::updateOrCreate(['user_id'=>$user_id],['user_id'=>$user_id]);
        //$profile=Profile::where(['user_id'=>$user_id])->first();
        if($profile){
            $workHistory=array();
            $work_ids=$request->work_id;
            $job_titles=$request->job_title;
            $start_dates=$request->start_date;
            $end_dates=$request->end_date;
            $descriptions=$request->descriptions;
            if($job_titles){
                foreach ($job_titles as $key=>$title) {
                    $workHistory[]=[
                        "id"=>$work_ids[$key],
                        "profile_id"=>$profile->id,
                        "job_title"=>$title,
                        "start_date"=>$start_dates[$key],
                        "end_date"=>$end_dates[$key],
                        "descriptions"=>$descriptions[$key],
                    ];
                }
            }
            if($workHistory){
                WorkHistory::upsert($workHistory,['id']);
            }
            $success="success";
            $message="Work History Updated successfully !";
            return redirect()->back()->with($success,$message);
        }

    }
    public function profileSetup(Request $request){
        $success="error";
        $message="unable to update, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'job_cat_id'=>'required',
            'about_me'=>'required',
            'languages'=>'required',
            'job_type'=>'required',
            'hr_week'=>'required',
            'payment_type'=>'required',
            'hr_rate'=>'required',
            'annual_salary'=>'required',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $languages='0';
            $is_address='0';
            if($request->has('is_address')){
                $is_address='1';
            }
            $is_email='0';
            if($request->has('is_email')){
                $is_email='1';
            }
            $is_phone='0';
            if($request->has('is_phone')){
                $is_phone='1';
            }
            $is_website='0';
            if($request->has('is_website')){
                $is_website='1';
            }
            $is_facebook='0';
            if($request->has('is_facebook')){
                $is_facebook='1';
            }
            $is_instagram='0';
            if($request->has('is_instagram')){
                $is_instagram='1';
            }
            $is_twitter='0';
            if($request->has('is_twitter')){
                $is_twitter='1';
            }
            $is_pinterest='0';
            if($request->has('is_pinterest')){
                $is_pinterest='1';
            }
            $is_youtube='0';
            if($request->has('is_youtube')){
                $is_youtube='1';
            }
            $is_linkedin='0';
            if($request->has('is_linkedin')){
                $is_linkedin='1';
            }
            $is_patreon='0';
            if($request->has('is_patreon')){
                $is_patreon='1';
            }
            $about_me=$request->about_me;
            //$about_me = nl2br($about_me);
            //$about_me = utf8_encode(trim($about_me));
            $insert_data=[
                'user_id'=>$user_id,
                'job_cat_id'=>$request->job_cat_id,
                'phone'=>$request->phone,
                'is_email'=>$is_email,
                'is_phone'=>$is_phone,
                'is_address'=>$is_address,
                'address'=>$request->address,
                'about_me'=>$about_me,
                
                'languages'=>$request->languages,
                'is_website'=>$is_website,
                'is_facebook'=>$is_facebook,
                'is_instagram'=>$is_instagram,
                'is_twitter'=>$is_twitter,
                'is_pinterest'=>$is_pinterest,
                'is_youtube'=>$is_youtube,
                'is_linkedin'=>$is_linkedin,
                'is_patreon'=>$is_patreon,
                'job_type'=>$request->job_type,
                'availability'=>$request->availability,
                'hr_week'=>$request->hr_week,
                'payment_type'=>$request->payment_type,
                'hr_rate'=>$request->hr_rate,
                'annual_salary'=>$request->annual_salary,
                'currenencies'=>$request->currenencies,
            ];
            
            $profile=Profile::updateOrCreate(['user_id'=>$user_id],$insert_data);
            if($profile){
                $edu_insert=array();
                $ids=$request->id;
                $school_names=$request->school_name;
                $years=$request->year;
                $degrees=$request->degree;
                if($school_names){
                    foreach ($school_names as $key=>$school_name) {
                        $edu_insert[]=[
                            "id"=>$ids[$key],
                            "profile_id"=>$profile->id,
                            "school_name"=>$school_name,
                            "year"=>$years[$key],
                            "degree"=>$degrees[$key],
                        ];
                    }
                }
                if($edu_insert){
                    ProfileEducation::upsert($edu_insert,['id']);
                }

                $cert_insert=array();
                $cert_ids=$request->cert_id;
                $titles=$request->title;
                $years=$request->year;
                $descriptions=$request->descriptions;
                if($titles){
                    foreach ($titles as $key=>$title) {
                        $cert_insert[]=[
                            "id"=>$cert_ids[$key],
                            "profile_id"=>$profile->id,
                            "title"=>$title,
                            "year"=>$years[$key],
                            "descriptions"=>$descriptions[$key],
                        ];
                    }
                }
                if($cert_insert){
                    ProfileCertification::upsert($cert_insert,['id']);
                }

                
                $success="success";
                $message="Profile settings Updated successfully !";
            }
            return redirect()->back()->with($success,$message);
        }
    }
}