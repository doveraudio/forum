<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    protected $fillable = ['topic_id','title','description','created_by'];
    protected $table = 'threads';

    public function Topic(){

        return $this->belongsTo('App\Topic', 'topic_id', 'id');

    }

    public function CreatedBy(){

        return $this->belongsTo('App\User', 'created_by', 'id');

    }

    public function Posts(){

        return $this->hasMany('App\Post', 'id', 'thread_id');

    }



}
