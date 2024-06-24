<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialChat extends Model{
    protected $guarded=[];
    public $file_path="/public/user-dash/chats/";

	public function sender_user(){
        return $this->belongsTo('App\User','id','sender_id');
    }
    public function receiver_user(){
        return $this->hasOne('App\User','id','receiver_id');
    }
    public function reply(){
        return $this->hasOne('App\SocialChat','msg_id','reply_chat_id');
    }
    public function getChatContentAttribute($value){
        if($this->msg_type!="text"){
            return asset($this->file_path.$value);
        }else{
            return $value;
        }
    }
}
