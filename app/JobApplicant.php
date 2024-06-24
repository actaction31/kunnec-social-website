<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model{
    protected $guarded=[];

    public function subcats(){
        return $this->hasMany("App\Job",'id','job_id');
    }
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
}
