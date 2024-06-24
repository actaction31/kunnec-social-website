<?php

namespace App;
use auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model{
   protected $guarded=[];
   protected $dates = ['startDate','endDate','deadLine'];
    protected $casts = [
        'startTime' => 'datetime',
        'endTime' => 'datetime',
    ];
   public $path= "/public/user-dash/events/";
   public function getBannerAttribute($value){
        if($value){
            return asset($this->path.$value);    
        }else{
            return asset($this->path."placeholder.jpg");
        }
   }
   public function getShortDescAttribute(){
      return Str::limit($this->descriptions, 100, '...');
   }
   public function accept_invites(){
      return $this->hasMany('App\EventInvite','event_id','id')->where('status','accepted');
   }
 
   public function invite(){
      return $this->hasOne('App\EventInvite','event_id','id')->where('user_id',Auth::user()->id);
   }
   public function user(){
      return $this->hasOne('App\User','id','user_id');
   }

   public function loc_country(){
      return $this->hasOne('App\Country','id','country');
   }
   public function loc_state(){
      return $this->hasOne('App\State','id','state');
   }
   public function loc_city(){
      return $this->hasOne('App\City','id','city');
   }
}
