<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\PostFile;
use auth;
use Validator;
use Illuminate\Support\Facades\File; 
class SnapsFilesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function deleteFile(Request $request){
    	$response=null;
    	$success=0;
    	$message="Unable to delete, Something went wrong !!";
    	$user_id=Auth::user()->id;
    	$post_id=$request->post_id;
        $file_id=$request->file_id;
    	$post=Post::where(['user_id'=>$user_id,'id'=>$post_id])->first();
    	if($post){
            $postFile=PostFile::where(['id'=>$file_id])->first();
            if($postFile){
                $delFile=basename($postFile->file);
                File::delete(base_path().'public/'.$this->posts_file_path."/".$delFile);
                $postFile->delete();
    		    $success=1;
    		    $message="Post file Deleted successfully!";
            }
    	}
    	$response['success']=$success;
        $response['message']=$message;
    	return response()->json($response);
    }
}