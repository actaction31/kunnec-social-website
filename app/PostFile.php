<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFile extends Model{
    protected $guarded=[];
    public $path= "/public/user-dash/posts/";
    public function getFileAttribute($value){
        if($value){
            return asset($this->path.$value);    
        }else{
            return asset($this->path."placeholder.jpg");
        }
    }
}
