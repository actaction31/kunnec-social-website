<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Follow;
use App\SocialChat;
use App\User;
use auth;
use Validator;

class SocialChatController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function unreadChats($user_id){
        $chatCount=SocialChat::where(['is_read'=>'0','receiver_id'=>$user_id])
                        ->count();
        return $chatCount;
    }
    public function uploadChatfiles(Request $request){
        $response=array();
        $fileName=$this->fileUpload($request,"attachFile",$this->chat_file_path);
        if($fileName!=""){
            $attachFile = $request->file("attachFile");
            $ext=$attachFile->getClientOriginalExtension();
            $imgExts=[
                'png',
                'PNG',
                'jpg',
                'JPEG',
                'gif',
            ];
            if(in_array($ext, $imgExts)){
                $ext="img";
            }
            $file_data=null;
            $file_data=[
                'file_url'=>$fileName,
                'type'=>$ext,
                'file_path'=>asset($this->chat_file_path),
            ];
            $response['success']=1;
            $response['message']='Uploaded successfully';
            $response['file_data']=$file_data;
        }else{
            $response['success']=0;
            $response['message']='unable to Upload!';
        }
        return response()->json($response);
    }
    public function roomChats(Request $request){
        $room_id=0;
        if($request->room_id){
            $room_id=$request->room_id;
        }
        $listing_count=100;
        $chatRoom=Follow::where("id",$room_id)
                        ->with(array('receiver_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->with(array('sender_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->first();
        if($chatRoom){
            if($chatRoom->user_id==$user_id || $chatRoom->follow_userid==$user_id){
                $chats=SocialChat::where(['room_id'=>$room_id])
                        ->orderBy('id','DESC')
                        ->paginate($listing_count);

                if($chatRoom->follow_userid==$user_id){
                    $sender_user=$chatRoom->sender_user;
                    $receiver_user=$chatRoom->receiver_user;
                    $chatRoom->setRelation('receiver_user',$sender_user);
                    $chatRoom->setRelation('sender_user',$receiver_user);
                }
                $success=1;
            }
        }
        if (Request()->ajax()) {
            return response()->json(view("user.messages.chatMessagesView",['chats'=>$chats,'chatRoom'=>$chatRoom])->render());
        }
    }
    public function showChats(Request $request){
        $success=0;
        $message="Sorry Invalid room!";
        $listing_count= $this->perpage;
        $user=Auth::user();
        $user_id=$user->id;
        $room_id=null;
        $chats=null;
        if($request->room_id){
            $room_id=$request->room_id;
        }

        $follows=Follow::where(['status'=>'accepted'])
                        ->where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        });
        $allRooms=$follows->pluck('id')->toArray();
        $followsIds=array_unique(
                array_merge ($follows->pluck('user_id')->toArray(),
                $follows->pluck('follow_userid')->toArray())
            );
        $followProfiles=User::where('id','!=',$user_id)
                            ->whereIn('id',$followsIds)
                            ->paginate($listing_count);


        $chatRooms=Follow::where(['status'=>'accepted'])
                        ->where(function($query) use ($user_id){
                            return $query->orWhere(['follow_userid'=>$user_id,'user_id'=>$user_id]);
                        })
                        ->with(array('receiver_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->with(array('sender_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->with('last_msg')
                        ->withCount('uread_chat')
                        ->get()
                        ->sortBy('last_msg.created_at',SORT_REGULAR,true);
        if(!$room_id){
            $room_id=0;
            if($allRooms){
                $room_id=$allRooms[0];
            }
        }
        $listing_count=100;
        $chatRoom=Follow::where("id",$room_id)
                        ->with(array('receiver_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->with(array('sender_user'=>function($query){
                            $query->select('id','first_name','image');
                        }))
                        ->first();
        //dd($chatRoom);
        if($chatRoom){
            if($chatRoom->user_id==$user_id || $chatRoom->follow_userid==$user_id){
                $chats=SocialChat::where(['room_id'=>$room_id])
                        ->with('reply')
                        ->orderBy('id','DESC')
                        //->get()
                        //->groupBy('created_at');
                        ->paginate($listing_count);
                        //;
                //dd($chats);
                SocialChat::where(['room_id'=>$room_id,'receiver_id'=>$user_id,'is_read'=>'0'])->update(['is_read'=>'1']);
                if($chatRoom->follow_userid==$user_id){
                    $sender_user=$chatRoom->sender_user;
                    $receiver_user=$chatRoom->receiver_user;
                    $chatRoom->setRelation('receiver_user',$sender_user);
                    $chatRoom->setRelation('sender_user',$receiver_user);
                }
                //dd($chatRoom);
                $success=1;
            }
        }
        $bundle=['followProfiles'=>$followProfiles,'chats'=>$chats,'chatRoom'=>$chatRoom,'chatRooms'=>$chatRooms];
        if(Request()->ajax()){
            return response()->json(view("user.messages.chatMessagesView",$bundle)->render());
        }
        return view('user.messages.socialChats',$bundle);
        /* if($success){
            
        }else{
            return view('user.page404');
        } */
        
    }

    public function makeAddMsg(Request $request){
        $receiver_id=$request->receiver_id;
        $is_online=$request->is_online;
        $chat_content=$request->chat_content;
        $chat_content = nl2br($chat_content);
        $chat_content = utf8_encode(trim($chat_content));
        $chat_id=null;
        if($request->chat_id){
            $chat_id=$request->chat_id;
        }
        $msg_id=null;
        if($request->msg_id){
            $msg_id=$request->msg_id;
        }
        $reply_chat_id=NULL;
        if($request->reply_chat_id){
            $reply_chat_id=$request->reply_chat_id;
        }
        $user=Auth::user();
        $chat_data=[
            'receiver_id'  =>$receiver_id,
            'sender_id'    =>$request->sender_id,
            'room_id'      =>$request->room_id,
            'chat_content' =>$chat_content,
            'msg_type'     =>$request->msg_type,
            'reply_chat_id'=>$reply_chat_id,
            'msg_id'       =>$msg_id,
        ];
        $chat_data['is_read']='0';
        /*if(!$is_online){
            $chat_data['is_read']='0';
        }*/
        if($chat_id){
            $update_chat=[
                'chat_content'=>$chat_content,
                'is_edit'=>'1',
            ];
            $chat=SocialChat::where(['msg_id'=>$chat_id])->update($update_chat);
        }else{
            $chat=SocialChat::create($chat_data);
        }
        return $chat;
    }
    public function apiAddMsg(Request $request){
        $response=array();
        $success=1;
        $chatId=0;
        $msg="Your msg sent successfully!";
        $validator = Validator::make($request->all(), [
            'room_id'=>'required|exists:follows,id',
            'receiver_id'=>'required|exists:users,id',
            'sender_id'=>'required|exists:users,id',
            'chat_content'=>'required',
        ]);
        if ($validator->fails()) {
            $success=0;
            $msg=$validator->messages()->all()[0];
        }else{
            $user=Auth::user();
            $room_id=$request->room_id;
            $receiver_id=$request->receiver_id;
            $sender_id=$request->sender_id;
            $chatRoom=Follow::where('id',$room_id)->first();
            if($chatRoom!=null){
                $chatData=$this->makeAddMsg($request);
                if($chatData!=null){
                    if($request->chat_id){
                        $chatId=$request->chat_id;
                    }
                    if(!$chatId){
                        $chatId=$chatData->id;
                    }
                    
                    $success=1;
                    $msg="Msg has been sent successfully!";
                }else{
                    $success=0;
                    $msg="Unable to send Msg, Something went wrong please try again later!";
                }
            }else{
                $success=0;
                $msg="Unable to send msg, Invalid chat room id or user!";
            }
        }
        $response['success']=$success;
        $response['message']=$msg;
        $response['chat_id']=$chatId;
        return response()->json($response);
    }
}



