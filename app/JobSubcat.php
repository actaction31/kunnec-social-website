<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSubcat extends Model{
    protected $guarded=[];

    public function jobCat(){
        return $this->hasOne('App\JobCat','id','cat_id');
    }
}
