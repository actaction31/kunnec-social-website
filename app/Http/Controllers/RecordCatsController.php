<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\RecordCat;
use auth;

class RecordCatsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getAdminAllRecordCats(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $recordCats=RecordCat::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('name','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['recordCats'=>$recordCats];            
        if(Request()->ajax()){
            return response()->json(view('Admin.recordCatsTable',$bundle)->render());
        }
        return view('Admin.recordCats',$bundle);
    } 
    public function addCat(Request $request){
        $cat_id=null;
        if($request->cat_id){
            $cat_id=$request->cat_id;
        }
        $recordCat=new RecordCat();
        if($cat_id){
            $recordCat=RecordCat::where(['id'=>$cat_id])->first();
        }
        if($recordCat){
            return view('Admin.addRecordCat',['recordCat'=>$recordCat,'cat_id'=>$cat_id]);
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
            'name'=>'required|unique:record_cats,name,'.$cat_id,
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $insert_data=[
                'name'=>$request->name,
            ];            
            
            $recordCat=RecordCat::updateOrCreate(['id' =>$cat_id],$insert_data);
            if($recordCat){
                $success=1;
                $message="RecordCat added successfully !";
            }
        }
        if($success){
            return redirect()->route('admin.recordCats')->with('success',$message); 
        }else{
            return redirect()->back()->withErrors([$message]);
        }
    } 
}