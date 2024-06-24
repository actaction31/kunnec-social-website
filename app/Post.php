<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $guarded=[];
    protected $casts = [
        'likes' => 'array',
    ];
    public function postfiles(){
    	 return $this->hasMany('App\PostFile','post_id','id');
    }
    public function user(){
         return $this->hasOne('App\User','id','user_id');
    }
    public function lastfile(){
         return $this->hasOne('App\PostFile','post_id','id')->latest();
    }
    public function comments(){
    	return $this->hasMany('App\PostComment','post_id','id');
    }
    public function last_comments(){
        return $this->hasOne('App\PostComment','post_id','id')->latest();
    }
    public function getShortDescAttribute(){
        return Str::limit($this->post_content, 200, '...');
    }
}
