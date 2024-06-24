<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\JobCat;
use App\JobSubcat;
use auth;

class JobCatsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getAdminAllSubCats(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $jobSubcats=JobSubcat::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('name','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->with('jobCat')
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['jobSubcats'=>$jobSubcats];            
        if(Request()->ajax()){
            return response()->json(view('Admin.jobSubcatsTable',$bundle)->render());
        }
        return view('Admin.jobSubcats',$bundle);
    } 
    public function addSubCat(Request $request){
        $subcat_id=null;
        if($request->subcat_id){
            $subcat_id=$request->subcat_id;
        }
        $cat_id=null;
        if($request->cat_id){
            $cat_id=$request->cat_id;
        }
        $jobSubCat=new JobSubcat();
        $jobSubCat->cat_id=$cat_id;
        if($subcat_id){
            $jobSubCat=JobSubcat::where(['id'=>$subcat_id])->first();
        }
        if($jobSubCat){
            $cats=JobCat::get();
            $cats=$this->getDropArray($cats);
            return view('Admin.addJobSubcat',['cats'=>$cats,'jobSubCat'=>$jobSubCat,'subcat_id'=>$subcat_id]);
        }else{
            return view('Admin.page_404');
        }
    }
    public function createSubCat(Request $request){
        $subcat_id=null;
        $service_name="";
        if($request->subcat_id){
            $subcat_id=$request->subcat_id;
        }
        $success=0;
        $message="unable to Add Cat, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'name'=>'required|unique:job_subcats,name,'.$subcat_id,
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $insert_data=[
                'cat_id'=>$request->cat_id,
                'name'=>$request->name,
                'is_home'=>$request->is_home,
                'icon'=>$request->icon,
                'status'=>$request->status,
            ];            
            
            $jobSubcat=JobSubcat::updateOrCreate(['id' =>$subcat_id],$insert_data);
            if($jobSubcat){
                $success=1;
                $message="Job Sub-Category added successfully !";
            }
        }
        if($success){
            return redirect()->route('admin.jobSubCats')->with('success',$message); 
        }else{
            return redirect()->back()->withErrors([$message]);
        }
    }

    public function getAdminAllCats(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $jobCats=JobCat::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('name','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['jobCats'=>$jobCats];            
        if(Request()->ajax()){
            return response()->json(view('Admin.jobCatsTable',$bundle)->render());
        }
        return view('Admin.jobCats',$bundle);
    } 
    public function addCat(Request $request){
        $cat_id=null;
        if($request->cat_id){
            $cat_id=$request->cat_id;
        }
        $jobCat=new JobCat();
        if($cat_id){
            $jobCat=JobCat::where(['id'=>$cat_id])->first();
        }
        if($jobCat){
            return view('Admin.addJobCat',['jobCat'=>$jobCat,'cat_id'=>$cat_id]);
        }else{
            return view('Admin.page_404');
        }
    }
    public function createCat(Request $request){
        $cat_id=null;
        $service_name="";
        if($request->cat_id){
            $cat_id=$request->cat_id;
        }
        $success=0;
        $message="unable to Add Cat, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'name'=>'required|unique:job_cats,name,'.$cat_id,
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $insert_data=[
                'name'=>$request->name,
                'is_show'=>$request->is_show,
                'icon'=>$request->icon,
                'status'=>$request->status,
            ];            
            
            $jobCat=JobCat::updateOrCreate(['id' =>$cat_id],$insert_data);
            if($jobCat){
                $success=1;
                $message="JobCat added successfully !";
            }
        }
        if($success){
            return redirect()->route('admin.jobCats')->with('success',$message); 
        }else{
            return redirect()->back()->withErrors([$message]);
        }
    } 
}