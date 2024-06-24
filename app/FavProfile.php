<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class FavProfile extends Model{
    protected $guarded=[];
    protected $appends = [];
    
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    public function profile(){
        return $this->hasOne("App\Profile",'id','profile_id');
    }
}
