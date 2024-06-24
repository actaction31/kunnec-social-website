<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;
class RecorderSchedule extends Model{
    protected $guarded=[];
    protected $appends = [];
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
    public function recorder(){
        return $this->hasOne("App\Recorder",'id','recorder_id');
    }
}
