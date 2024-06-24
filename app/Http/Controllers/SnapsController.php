<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Snap;
use App\SnapFile;
use App\SnapComment;
use auth;
use Validator;

class SnapsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function deleteSnap(Request $request){
    	$response=null;
    	$success=0;
    	$message="Unable to delete, Something went wrong !!";
    	$user_id=Auth::user()->id;
    	$snap_id=$request->id;
    	$snap=Snap::where(['user_id'=>$user_id,'id'=>$snap_id])->delete();
    	if($snap){
    		$success=1;
    		$message="Snap Deleted successfully!";
    	}
    	$response['success']=$success;
        $response['message']=$message;
    	return response()->json($response);
    }
    public function likeSnap(Request $request){
        $response=null;
        $success=0;
        $message="Unable to like, Something went wrong !!";
        $user_id=Auth::user()->id;
        $snap_id=$request->snap_id;
        $snap=Snap::where(['id'=>$snap_id])->first();
        if($snap){
            $likes=$snap->likes;
            if(!$likes){
                $likes[]=$user_id;
            }else{
                if(in_array($user_id, $likes)){
                    if(($key = array_search($user_id, $likes)) !== false){
                        unset($likes[$key]);
                    }
                }else{
                    $likes[]=$user_id;
                }
            }
            $snap->likes=$likes;
            $snap->save();
            $success=1;
            $message="Snap Liked successfully!";
        }
        $response['success']=$success;
        $response['message']=$message;
        return response()->json($response);
    }
    public function editSnap(Request $request){
        $success=0;
        $message="Sorry Invalid post id!";
        $post_id=null;
        $user_id=Auth::user()->id;       
        if($request->post_id){
            $post_id=$request->post_id;
        }
        if($post_id){
            $post=Post::where(['id'=>$post_id,'user_id'=>$user_id])
                        ->with('postfiles')
                        ->with('user')
                        ->first();
                        //dd($postData);
            if($post){            
                $success=1;
                $message="post Data";                
            }
        }
        if($success){
            return view('user.social.editPost',['post'=>$post]);
        }else{
            return view('user.page404');
        }
    }
    public function createUserSnap(Request $request){
        $success="error";
        $message="unable to Add Post, Something went wrong!";
        $snap_id=null;        
        if($request->snap_id){
            $snap_id=$request->snap_id;
        }
        $validator = Validator::make($request->all(), [
            'descriptions'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,JPG,JPEG,PNG',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $images=null;
            if($request->image){
                $fileName=$this->bulkFileUpload($request,"image",$this->snaps_file_path);
                $images=$fileName;
            }
            $descriptions = nl2br($request->descriptions);
            $descriptions = trim($descriptions);
            $insert_data=[
                'user_id'=>$user_id,
                'descriptions'=>$descriptions,
            ];
            $snap=Snap::updateOrCreate(['id'=>$snap_id],$insert_data);
            if($snap){
                $snapFiles=null;
                if($images){
                    foreach($images as $image) {
                        $snapFiles[]=[
                            'snap_id'=>$snap->id,
                            'file'=>$image['file'],
                            'file_type'=>$image['file_type'],
                        ];
                    }
                }
                if($snapFiles){
                    SnapFile::insert($snapFiles);
                }
                $success="success";
                $message="Snap added successfully !";
                if($snap_id){
                    $message="Snap updated successfully !";
                }
            }
        }
        return redirect()->back()->with($success,$message);
    }

    public function createSnapAlbum(Request $request){
        $success="error";
        $message="unable to Add Post, Something went wrong!";
        $snap_id=null;        
        if($request->snap_id){
            $snap_id=$request->snap_id;
        }
        $validator = Validator::make($request->all(), [
            'album_descriptions'=>'required',
            'images.*'=>'required|image|mimes:png,jpg,jpeg,JPG,JPEG,PNG',
        ]);
        if($validator->fails()){
            $success="error";
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $images=null;
            if($request->images){
                $fileName=$this->bulkFileUpload($request,"images",$this->snaps_file_path);
                $images=$fileName;
            }
            $descriptions = nl2br($request->album_descriptions);
            $descriptions = trim($descriptions);
            $insert_data=[
                'user_id'=>$user_id,
                'descriptions'=>$descriptions,
            ];
            $snap=Snap::updateOrCreate(['id'=>$snap_id],$insert_data);
            if($snap){
                $snapFiles=null;
                if($images){
                    foreach($images as $image) {
                        $snapFiles[]=[
                            'snap_id'=>$snap->id,
                            'file'=>$image['file'],
                            'file_type'=>$image['file_type'],
                        ];
                    }
                }
                if($snapFiles){
                    SnapFile::insert($snapFiles);
                }
                $success="success";
                $message="Snap Album added successfully !";
                if($snap_id){
                    $message="Snap Album updated successfully !";
                }
            }
        }
        return redirect()->back()->with($success,$message);
    }
    public function apiCreateSnapAlbum(Request $request){
        $response=array();
        $success=1;
        $snap_id=null;
        $msg="Snap Album added successfully !";
        $data=null;
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'descriptions'=>'required',
        ]);
        if ($validator->fails()) {
            $success=0;
            $msg=$validator->messages()->all()[0];
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $images=null;
            if($request->files){
                $fileName=$this->bulkFileUpload($request,"files",$this->snaps_file_path);
                $images=$fileName;
            }
            $descriptions = nl2br($request->descriptions);
            $descriptions = trim($descriptions);
            $insert_data=[
                'user_id'=>$user_id,
                'descriptions'=>$descriptions,
            ];
            $snap=Snap::updateOrCreate(['id'=>$snap_id],$insert_data);
            if($snap){
                $snapFiles=null;
                if($images){
                    foreach($images as $image) {
                        $snapFiles[]=[
                            'snap_id'=>$snap->id,
                            'file'=>$image['file'],
                            'file_type'=>$image['file_type'],
                        ];
                    }
                }
                if($snapFiles){
                    SnapFile::insert($snapFiles);
                }
                $success=1;
                $message="Snap added successfully !";
                if($snap_id){
                    $message="Snap updated successfully !";
                }
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        $response['data']=$data;
        return response()->json($response);
    }
    public function singelPostDetails(Request $request){
        $success=0;
        $message="Sorry Invalid post id!";
        $post_id=null;
        $listing_count= $this->perpage;
        $user=Auth::user();       
        if($request->post_id){
            $post_id=$request->post_id;
        }
        if($post_id){
            $postData=Post::where(['id'=>$post_id])
                        ->with('postfiles')
                        ->with('user')
                        ->withCount('comments')
                        ->first();
                        //dd($postData);
            if($postData){            
                $postComments=PostComment::where(['post_id'=>$post_id])
                        ->orderBy('id','DESC')
                        ->paginate($listing_count);
                $success=1;
                $message="post Data";
            }
        }
        if($success){
            return view('user.social.postDetails',['postData'=>$postData,'postComments'=>$postComments]);
        }else{
            return view('user.page404');
        }
    }

    public function makeAddComment(Request $request){
        $snap_id=$request->snap_id;
        $comment=$request->comment;
        $user=Auth::user();
        $comment_data=[
            'snap_id'=>$snap_id,
            'user_id'=>$user->id,
            'comment'=>$comment
        ];
        $comment=SnapComment::create($comment_data);
        return $comment;
    }
    public function apiAddSnapComment(Request $request){
        $response=array();
        $success=1;
        $msg="Comment successfully!";
        $data=null;
        $validator = Validator::make($request->all(), [
            'snap_id'=>'required|exists:snaps,id',
            'comment'=>'required',
        ]);
        if ($validator->fails()) {
            $success=0;
            $msg=$validator->messages()->all()[0];
        }else{
            $user=Auth::user();
            $snap_id=$request->snap_id;
            $comment=$request->comment;
            $comment=$this->makeAddComment($request);
            if($comment!=null){
                $success=1;
                $data=$comment;
            }else{
                $success=0;
                $msg="Unable to comment on this snap, Something went wrong please try again later!";
            }
        }
        if($comment){
            return response()->json(view('user.social.snapCommentView',['comment'=>$comment])->render());
        }else{
            $response['success']=$success;
            $response['message']=$msg;
            $response['data']=$data;
            return response()->json($response);
        }
    }
}