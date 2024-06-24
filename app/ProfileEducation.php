<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class ProfileEducation extends Model{
    protected $guarded=[];
    protected $appends = [];
    
    public function profile(){
        return $this->hasOne("App\Profile",'id','profile_id');
    }
    
}
