<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\PostFile;
use App\PostComment;
use auth;
use Validator;

class PostsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getAdminAllPosts(Request $request){
        $listing_count= $this->perpage;
        $search_key="";
        if($request->search_key){
            $search_key=$request->search_key;
        }     
        $posts=Post::where(function($query) use ($search_key){
                        if($search_key!=""){
                            return $query->orWhere('post_content','LIKE','%'. $search_key .'%');
                        } 
                    })
                    ->orderBy('id','desc')
                    ->paginate($listing_count);
        $bundle=['posts'=>$posts];            
        if(Request()->ajax()){
            return response()->json(view('Admin.postsTable',$bundle)->render());
        }
        return view('Admin.posts',$bundle);
    } 
    public function deletePost(Request $request){
    	$response=null;
    	$success=0;
    	$message="Unable to delete, Something went wrong !!";
    	$user_id=Auth::user()->id;
    	$post_id=$request->id;
    	$post=Post::where(['user_id'=>$user_id,'id'=>$post_id])->delete();
    	if($post){
    		$success=1;
    		$message="Post Deleted successfully!";
    	}
    	$response['success']=$success;
        $response['message']=$message;
    	return response()->json($response);
    }
    public function likePost(Request $request){
        $response=null;
        $success=0;
        $message="Unable to like, Something went wrong !!";
        $user_id=Auth::user()->id;
        $post_id=$request->post_id;
        $post=Post::where(['id'=>$post_id])->first();
        if($post){
            $likes=$post->likes;
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
            $post->likes=$likes;
            $post->save();
            $success=1;
            $message="Post Liked successfully!";
        }
        $response['success']=$success;
        $response['message']=$message;
        return response()->json($response);
    }
    public function editPost(Request $request){
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
    public function createUserPost(Request $request){
        $success="error";
        $message="unable to Add Post, Something went wrong!";
        $post_id=null;        
        if($request->post_id){
            $post_id=$request->post_id;
        }
        $validator = Validator::make($request->all(), [
            'post_content'=>'required',
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $user_id=Auth::user()->id;
            $insert_data=array();
            $images=null;

            if($request->images){
                $fileName=$this->bulkFileUpload($request,"images",$this->posts_file_path);
                $images=$fileName;
            }
            $post_content=$request->post_content;
            $post_content = nl2br($post_content);
            $post_content = utf8_encode(trim($post_content));
            $insert_data=[
                'user_id'=>$user_id,
                'post_content'=>$post_content,
                'status'=>$request->status,
                'tag'=>$request->tag,
            ];
            $post=Post::updateOrCreate(['id'=>$post_id],$insert_data);
            if($post){
                $postFiles=null;
                if($images){
                    foreach($images as $image) {
                        $postFiles[]=[
                            'post_id'=>$post->id,
                            'file'=>$image['file'],
                            'file_type'=>$image['file_type'],
                        ];
                    }
                }
                if($postFiles){
                    PostFile::insert($postFiles);
                }
                $success="success";
                $message="Post added successfully !";
                if($post_id){
                    $message="Post updated successfully !";
                }
            }
        }
        return redirect()->route('dash')->with($success,$message);
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
        $post_id=$request->post_id;
        $comment=$request->comment;
        $user=Auth::user();
        $comment_data=[
            'post_id'=>$post_id,
            'user_id'=>$user->id,
            'comment'=>$comment
        ];
        $comment=PostComment::create($comment_data);
        return $comment;
    }
    public function apiAddComment(Request $request){
        $response=array();
        $success=1;
        $msg="Comment successfully!";
        $data=null;
        $validator = Validator::make($request->all(), [
            'post_id'=>'required|exists:posts,id',
            'comment'=>'required',
        ]);
        if ($validator->fails()) {
            $success=0;
            $msg=$validator->messages()->all()[0];
        }else{
            $user=Auth::user();
            $post_id=$request->post_id;
            $comment=$request->comment;
            $comment=$this->makeAddComment($request);
            if($comment!=null){
                $success=1;
                $data=$comment;
            }else{
                $success=0;
                $msg="Unable to comment on this post, Something went wrong please try again later!";
            }
        }
        if($comment){
            return response()->json(view('user.social.postCommentView',['comment'=>$comment])->render());
        }else{
            $response['success']=$success;
            $response['message']=$msg;
            $response['data']=$data;
            return response()->json($response);
        }
    }
}