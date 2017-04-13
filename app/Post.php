<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['thread_id', 'title', 'body', 'has_attachments','created_by'];
    protected $table = 'posts';

    public function Thread(){

        return $this->belongsTo('App\Thread', 'thread_id', 'id');

    }
    
    public function CreatedBy(){

        return $this->belongsTo('App\User', 'created_by','id');

    }

    

}
