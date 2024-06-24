<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class Portfolio extends Model{
    protected $guarded=[];
    protected $appends = [];
    public function user(){
        return $this->hasOne("App\User",'id','user_id');
    }
    public $path= "/public/user-dash/portfolio/";
    public function getFileAttribute($value){
        if($value){
            return asset($this->path.$this->user_id."/".$value);    
        }else{
            return $value;
        }
    }
    public function getThumbnailAttribute($value){
        if($value){
            return asset($this->path.$this->user_id."/".$value);    
        }else{
            return $value;
        }
    }
}
