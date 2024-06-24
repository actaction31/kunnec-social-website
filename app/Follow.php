<?php

namespace App;
use auth;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model{
    protected $guarded=[];

	protected $appends = [];
    
    /*public function getReceverAttribute(){
        $auth_user=Auth::user()->id;
        $receiver=$this->follow_userid;
        if($this->follow_userid==$auth_user){
            $receiver=$this->user_id;
        }
        return $receiver;
    }
    public function getSenderAttribute(){
        $auth_user=Auth::user()->id;
        return $auth_user;
    }*/
    public function user(){
    	return $this->hasOne('App\User','id','user_id');
    }
    public function follow_user(){
    	return $this->hasOne('App\User','id','follow_userid');
    }
    public function sender_user(){
    	return $this->hasOne('App\User','id','user_id');
    }
    public function receiver_user(){
    	return $this->hasOne('App\User','id','follow_userid');
    }
    public function chats(){
        return $this->hasMany('App\SocialChat','room_id','id');
    }
    public function uread_chat(){
        return $this->chats()->where('receiver_id','=',Auth::user()->id)->where('is_read','=','0');
    }
    public function last_msg(){
       return $this->hasOne('App\SocialChat','room_id','id')->latest();
    }
}
