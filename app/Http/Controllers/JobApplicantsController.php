<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\JobApplicant;
use App\Country;
use App\Job;
use App\JobCat;
use auth;
use Illuminate\Support\Facades\DB;

class JobApplicantsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getAdminAllApplicants(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }  
        $job_id=$request->job_id;
        $job=Job::where(['id'=>$job_id])->first();
        if($job){  
            $jobApplicants=JobApplicant::where(['job_id'=>$job_id])
                           /* ->where(function($query) use ($search_key){
                                if($search_key!=""){
                                    return $query->orWhere('title','LIKE','%'. $search_key .'%')
                                                    ->orWhere('descriptions','LIKE','%'. $search_key .'%');
                                } 
                            })*/
                            ->orderBy('id','desc')
                            ->paginate($listing_count);
            $bundle=['job'=>$job,'jobApplicants'=>$jobApplicants];            
            if(Request()->ajax()){
                return response()->json(view('Admin.jobApplicantsTable',$bundle)->render());
            }
            return view('Admin.jobApplicants',$bundle);
        }else{
            return view('Admin.page_404');
        }
    }
    public function jobApplicants(Request $request){
        $countries = Country::all();
        $countries=$this->getDropArray($countries);
        $cats=JobCat::where(['status'=>'1'])
                    ->with('subcats')
                    ->get();
        $job_id=0;
        if($request->job_id){
            $job_id=$request->job_id;
        }
        $user_id=Auth::user()->id;
        $job_id=$request->job_id;
        $job=Job::where(['id'=>$job_id,'user_id'=>$user_id])->first();
        if($job){
            $jobApplicants=JobApplicant::where(['job_id'=>$job_id])
                                        ->with('user')
                                        ->orderBy('created_at','desc')
                                        ->paginate($this->perpage);
                                        //->groupBy(DB::raw('MONTH(created_at)'));
            $bundle=[
                'jobApplicants'=>$jobApplicants,
                'job'=>$job,
                'countries'=>$countries,
                'cats'=>$cats,
                'jobTypes'=>$this->jobTypes,
                'paymentTypes'=>$this->paymentTypes,
                'classifications'=>$this->classifications
            ];
            return view('user.k_me.jobApplicants',$bundle);
        }else{

        }
    }
    public function applicantDelete(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $jobApplicant=JobApplicant::where(['id'=>$id])
                ->first();
            if($jobApplicant){
                $jobApplicant->forceDelete();
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
    
    public function applyJob(Request $request){
        $success="error";
        $message="unable to Apply Job, Something went wrong!";
        $job_id=0;
        if($request->job_id){
            $job_id=$request->job_id;
        }

        $user_id=Auth::user()->id;
        $job_id=$request->job_id;
        $job=Job::where(['id'=>$job_id])->first();
        if($job){
            if(!$job->is_expired){
                $insert_data=[
                    'job_id'=>$job_id,
                    'user_id'=>$user_id,
                ];
                $jobApplicant=JobApplicant::updateOrCreate(['job_id'=>$job_id,'user_id'=>$user_id],$insert_data);
                if($jobApplicant){
                    $success="success";
                    $message="Job Applied successfully !";
                }
            }else{
                $success="error";
                $message="This Job has been expired !";
            }
        }else{
            $success="error";
            $message="invalid Job id !";
        }
        return redirect()->back()->with([$success=>$message]);
    }
}