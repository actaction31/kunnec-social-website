<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller{    
    public function __construct(){

    }
    public function deleteUser(Request $request){
        $response=array();
        $success=0;
        $msg="Something went wrong,Please try again later!";
        if($request->id){
            $id=$request->id;
            $user=User::where(['id'=>$id])
                ->first();
            if($user){
                $user->forceDelete();
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
    public function apiUpdateStatus(Request $request){
        $response=array();
        $success=0;
        $message="unable to change, Something went wrong!";
        $validator = Validator::make($request->all(), [
            'user_id'=>'required',
            'status'=>'required',
        ]);
        if($validator->fails()){
            $success=0;
            $message=$validator->messages()->all()[0];
        }else{
            $user_id=$request->user_id;
            $status=$request->status;
            $user=User::where(['id'=>$user_id])->first();
            if($user){
                $user->status=$status;
                $user->save();
                $success=1;
                $message="status Updated successfully!";
            }else{
                $success=0;
                $message="Invalid id!";
            }
            
        }
        $response['success']=$success;
        $response['message']=$message;
        return response()->json($response);
    }
    public function getUsers(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        $user_id="";
        if($request->search_key){
            $search_key=$request->search_key;
        }
              
        $users=User::
                    where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('fname','LIKE','%'. $search_key .'%')
                                        ->orWhere('lname','LIKE','%'. $search_key .'%')
                                        ->orWhere('email','LIKE','%'. $search_key .'%')
                                        ->orWhere('phone','LIKE','%'. $search_key .'%')
                                        ->orWhere('mobile','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['users'=>$users];            
        if(Request()->ajax()){
            return response()->json(view('Admin.usersTable',$bundle)->render());
        }
        return view('Admin.users',$bundle);
    }
}
