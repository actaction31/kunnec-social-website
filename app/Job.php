<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class Job extends Model{
    protected $guarded=[];
    protected $appends = ['is_applied','job_days','is_expired'];
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    public function loc_country(){
        return $this->hasOne('App\Country','id','country');
    }
    public function jobapplicants(){
        return $this->hasMany('App\JobApplicant','job_id','id');
    }
    public function loc_state(){
        return $this->hasOne('App\State','id','state');
    }
    public function loc_city(){
        return $this->hasOne('App\City','id','city');
    }
    public function getIsAppliedAttribute(){
        $status=false;
        if($this->hasOne('App\JobApplicant','job_id','id')->where('user_id',Auth::user()->id)->count()>0){
            $status=true;
        }
        return $status;
    }
    public function getJobDaysAttribute(){
        $diff_in_days=0;
        $today=date('Y-m-d H:s:i');
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$this->created_at);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$today);
        $diff_in_days = $to->diffInDays($from);
        return (config('services.job_duration')-$diff_in_days);
    }
    public function getIsExpiredAttribute(){
        $status=false;
        if($this->job_days<=0){
            $status=true;
        }

        return $status;
    }
}
