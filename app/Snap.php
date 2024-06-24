<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snap extends Model{
    protected $guarded=[];
    protected $casts = [
        'likes' => 'array',
    ];
    public function snapfiles(){
    	return $this->hasMany('App\SnapFile','snap_id','id');
    }
    public function lastfile(){
       return $this->hasOne('App\SnapFile','snap_id','id')->latest();
    }
    public function user(){
       return $this->hasOne('App\User','id','user_id');
    }
    public function comments(){
    	return $this->hasMany('App\SnapComment','snap_id','id');
    }
    public function last_comments(){
       return $this->hasOne('App\SnapComment','snap_id','id')->latest();
    }
}
