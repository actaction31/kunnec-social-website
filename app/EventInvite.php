<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventInvite extends Model{
   protected $guarded=[];
   /*public function user(){
      return $this->hasOne('App\User','id','user_id');
   }*/
   public function event(){
      return $this->hasOne('App\Event','id','event_id');
   }
}
