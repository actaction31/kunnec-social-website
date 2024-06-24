<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Job;
use App\Country;
use App\JobCat;
use App\JobSubcat;
use auth;
use \Carbon\Carbon;
use DB;
class JobsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function getAdminAllJobs(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $jobs=Job::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('title','LIKE','%'. $search_key .'%')
                                            ->orWhere('descriptions','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['jobs'=>$jobs];            
        if(Request()->ajax()){
            return response()->json(view('Admin.jobsTable',$bundle)->render());
        }
        return view('Admin.jobs',$bundle);
    } 
    public function jobDelete(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $user=Auth::user();
            $user_id=$user->id;
            $job=Job::where(['id'=>$id,'user_id'=>$user_id])
                ->first();
            if($job){
                $job->forceDelete();
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
    public function jobsHome(Request $request){
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        /*$cats=JobCat::where(['status'=>'1','is_home'=>'1'])
                    ->with(['subcats'=>function($query){
                        $query->where(['status'=>'1','is_home'=>'1']);
                    }])
                    ->get();*/
        return view('user.k_me.jobsHome',['countries'=>$countries,'cats'=>$cats,'jobTypes'=>$this->jobTypes,'paymentTypes'=>$this->paymentTypes,'classifications'=>$this->classifications]);

    }
    public function addJobPost(Request $request){
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        $bundle=[
            'countries'=>$countries,
            'cats'=>$cats,
            'jobTypes'=>$this->jobTypes,
            'paymentTypes'=>$this->paymentTypes,
            'educations'=>$this->educations,
            'classifications'=>$this->classifications,
            'intreview_types'=>$this->intreview_types,
        ];
        return view('user.k_me.addJobPost',$bundle);
    }
    public function createJobPost(Request $request){
        $success="error";
        $message="unable to Add Job, Something went wrong!";
        $job_id=null;        
        if($request->job_id){
            $job_id=$request->job_id;
        }
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            'descriptions'=>'required',
            'job_cat_id'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'job_type'=>'required',
            'payment_type'=>'required',
            'hr_week'=>'required',
            'education'=>'required',
            'classification'=>'required',
            'experience'=>'required',
            'intreview_type'=>'required',
            //'responsibilities'=>'required',
            //'qualifications'=>'required',
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            
            $descriptions=$request->descriptions;
            $descriptions = nl2br($descriptions);
            $descriptions = utf8_encode(trim($descriptions));
            $insert_data=[
                'user_id'=>$user_id,
                'title'=>$request->title,
                'descriptions'=>$descriptions,
                'job_cat_id'=>$request->job_cat_id,
                'country'=>$request->country,
                'state'=>$request->state,
                'city'=>$request->city,
                'job_type'=>$request->job_type,
                'payment_type'=>$request->payment_type,
                'hr_week'=>$request->hr_week,
                'education'=>$request->education,
                'classification'=>$request->classification,
                'experience'=>$request->experience,
                'intreview_type'=>$request->intreview_type,
                'responsibilities'=>$request->responsibilities,
                'qualifications'=>$request->qualifications,
            ];
            
            $job=Job::updateOrCreate(['id'=>$job_id],$insert_data);
            if($job){
                $success="success";
                $message="Job added successfully !";
                if($job_id){
                    $message="Job updated successfully !";
                }
            }
        }
        return redirect()->route('k2me.myJobs')->with($success,$message);
    }
    public function myJobs(Request $request){
        $listing_count= $this->perpage;
        $user=Auth::user();
        $user_id=$user->id;
        $jobs=Job::where(['user_id'=>$user_id])
                    ->withCount('jobapplicants')
                    ->orderBy('created_at','DESC')
                    ->paginate($listing_count);
        $jobByDates=array();
        if($jobs->total()>0){
            foreach($jobs as $job){
                $jobByDates[$job->created_at->format('m-d-Y')][]=$job;
            }
        }
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        return view('user.k_me.myjobs',['jobByDates'=>$jobByDates,'allJobs'=>$jobs,'countries'=>$countries,'cats'=>$cats,'jobTypes'=>$this->jobTypes,'paymentTypes'=>$this->paymentTypes,'classifications'=>$this->classifications]);
    }
    public function AllJobsList(Request $request){
        $cat_id=0;
        $subcat_id=0;
        $sub_catids=null;
        $job_subcat=null;
        $job_cat=null;
        

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
        if($request->posted){
            $posted=$request->posted;
        }
        if($request->cat_id){
            $cat_id=$request->cat_id;
            $job_cat=JobCat::where(['id'=>$cat_id])
                            ->with('subcats')->first();
            /*if($job_cat){
                if($job_cat->subcats){
                    $sub_catids=$job_cat->subcats->pluck('id');
                }
            }*/
        }
        $listing_count= $this->perpage;
        $jobs=Job::where(function($query) use($cat_id,$search_key,$country,$state,$city,$posted,$classification,$jobTypes,$payment_types){
                if($cat_id){
                    $query->where('job_cat_id',$cat_id);
                }
                if($country!=""){
                    $query->where('country',$country);
                }
                if($state!=""){
                    $query->where('state',$state);
                }
                if($city!=""){
                    $query->where('city',$city);
                }
                if($classification){
                    $query->where('classification',$classification);
                }
                if($jobTypes){
                    $query->whereIn('job_type',$jobTypes);
                }
                if($payment_types){
                    $query->whereIn('payment_type',$payment_types);
                }
                
                if($search_key!=""){
                    $query->where(function($query) use ($search_key){
                        $query->orWhere('title','LIKE','%'. $search_key .'%')
                                ->orWhere('descriptions','LIKE','%'. $search_key .'%');
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
            ->orderBy('created_at','DESC')
            ->paginate($listing_count);
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                        ->with('subcats')
         
                        ->get();
        $jobByDates=array();
        if($jobs->total()>0){
            foreach($jobs as $job){
                $jobByDates[$job->created_at->format('m-d-Y')][]=$job;
            }
        }
        $bundle=[
            'jobByDates'=>$jobByDates,'allJobs'=>$jobs,
            'countries'=>$countries,
            'cats'=>$cats,'job_subcat'=>$job_subcat,
            'job_cat'=>$job_cat,'jobTypes'=>$this->jobTypes,
            'paymentTypes'=>$this->paymentTypes,
            'classifications'=>$this->classifications
        ];
        return view('user.k_me.jobs',$bundle);
    }
    public function jobDetails(Request $request){
        $job_id=null;
        $user=Auth::user();
        $user_id=$user->id;
        if($request->job_id){
            $job_id=$request->job_id;
        }
        $job=Job::where(['id'=>$job_id])->first();

        if($job){
            $countries = Country::all();
            $countries=$this->getDropArray($countries);
            $cats=JobCat::where(['status'=>'1'])
                        ->with('subcats')
                        ->get();
            return view('user.k_me.jobDetails',['job'=>$job,'countries'=>$countries,'cats'=>$cats,'jobTypes'=>$this->jobTypes,
            'paymentTypes'=>$this->paymentTypes,
            'classifications'=>$this->classifications]);
        }else{
            return view('user.page404');
        }
    }
}