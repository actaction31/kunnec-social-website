<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use auth;
use Illuminate\Support\Str;

class Recorder extends Model{
    protected $guarded=[];

    public $path= "/public/user-dash/recorders/";
    public function getCoverImageAttribute($value){
        if($value){
            return asset($this->path.$value);    
        }
    }
    public function rating(){
        $rattings=$this->hasOne('App\RecorderComment','recorder_id','id')
                        ->selectRaw('recorder_id,COUNT(*) as total_rating,avg(star) as avg_rating')
                        ->groupBy('recorder_id');      
        return $rattings;
    }
    public function cat(){
        return $this->hasOne('App\RecordCat','id','record_cat_id');
    }
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    public function user_comment(){
        return $this->hasOne("App\RecorderComment",'recorder_id','id')->where('user_id',Auth::user()->id);
    }
    public function fav_recorders(){
        return $this->hasMany("App\FavRecorder",'user_id',Auth::user()->id);
    }
    public function schedules(){
        return $this->hasMany("App\RecorderSchedule",'recorder_id','id');
    }
    public function likes(){
        return $this->hasMany("App\FavRecorder",'recorder_id','id');
    }
    public function fav_recorder(){
        return $this->hasOne("App\FavRecorder",'recorder_id','id')->where('user_id',Auth::user()->id);
    }
    public function getShortDescriptionsAttribute(){
        return Str::limit($this->descriptions, 150, '...');
    }
}
