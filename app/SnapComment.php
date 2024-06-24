<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SnapComment extends Model{
    protected $guarded=[];

    public function user(){
       return $this->hasOne('App\User','id','user_id')->latest();
    }
    
}
