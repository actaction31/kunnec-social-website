<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    public $path= "/public/user-dash/images/users/profiles/";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password','dob', 'gender', 'plan', 'role', 'city', 'state', 'country','ques1','ques2','ques3','ans1','ans2','ans3'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loc_country(){
        return $this->hasOne('App\Country','id','country');
    }
    public function loc_state(){
        return $this->hasOne('App\State','id','state');
    }
    public function loc_city(){
        return $this->hasOne('App\City','id','city');
    }

    public function getImageAttribute($value){
        if($value){
            return asset($this->path.$value);    
            //return asset(Storage::url('app/public'.$this->path.$value));
        }else{
            return asset($this->path."placeholder.jpg");
        }
    }

    public function followReq(){
        return $this->hasOne('App\Follow','user_id','id');
    }
    public function jobs_count(){
        return $this->hasMany('App\Job','user_id','id');
    }
}
