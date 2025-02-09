<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model{
    protected $guarded=[];

    public function user(){
       return $this->hasOne('App\User','id','user_id')->latest();
    }
    
}
