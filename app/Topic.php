<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $fillable = ['forum_id','title','description','created_by'];
    
    protected $table = 'topics';

    public function Forum(){

        return $this->belongsTo('App\Forum', 'forum_id');

    }

    public function Threads(){
        return $this->hasMany('App\Thread', 'topic_id', 'id');
    }

    public function CreatedBy(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    
}
