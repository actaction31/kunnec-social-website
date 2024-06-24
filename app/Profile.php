<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
use Illuminate\Support\Str;

class Profile extends Model{
    protected $guarded=[];
    protected $appends = [];
    protected $casts = [
        'languages' => 'array',
        'availability' => 'array',
    ];
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    public function job_category(){
        return $this->hasOne("App\JobCat",'id','job_cat_id');
    }
    public function user_fav(){
        return $this->hasOne("App\FavProfile",'profile_id','id')->where('user_id',Auth::user()->id);
    }
    public function educations(){
        return $this->hasMany("App\ProfileEducation",'profile_id','id');
    }
    public function certifications(){
        return $this->hasMany("App\ProfileCertification",'profile_id','id');
    }
    public function work_histories(){
        return $this->hasMany("App\WorkHistory",'profile_id','id');
    }
    public function getShortAboutmeAttribute(){
        return Str::limit($this->about_me, 230, '...');
    }
    public function avg_rating(){
        $rattings=$this->hasOne('App\ProfileRating')
            ->selectRaw('profile_id,
                    COUNT(*) as total_rating,
                    ROUND(avg(star)) as avg_rating'
                    )
            ->groupBy('profile_id');      
        return $rattings;
    }
    
}
