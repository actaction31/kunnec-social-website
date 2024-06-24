<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SnapFile extends Model{
    protected $guarded=[];
    public $path= "/public/user-dash/snaps/";
    public function getFileAttribute($value){
        if($value){
            return asset($this->path.$value);    
        }else{
            return asset($this->path."placeholder.jpg");
        }
    }
}
