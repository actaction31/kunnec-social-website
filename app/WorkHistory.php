<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class WorkHistory extends Model{
    protected $guarded=[];
    protected $appends = [];
    protected $dates = ['start_date','end_date'];
    
}
