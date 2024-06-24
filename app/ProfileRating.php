<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class ProfileRating extends Model{
    protected $guarded=[];
    protected $appends = [];
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    
}
