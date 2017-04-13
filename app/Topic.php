<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $table = 'topics';

    public function Forum(){

        return $this->belongsTo('App\Forum', 'forum_id');

    }

    public function Threads(){
        return $this->hasMany('App\Thread', 'id', 'thread_id');
    }
}
