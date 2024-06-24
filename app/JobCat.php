<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCat extends Model{
    protected $guarded=[];

    public function subcats(){
        return $this->hasMany("App\JobSubcat",'cat_id','id');
    }
}
