<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $fillable = ['index_id','created_by','title','description'];

    protected $table = 'forums';

    public function Index(){

        return $this->belongsTo('App\Index');

    }

    public function Topics(){
        return $this->hasMany('App\Topic','forum_id','id');
    }

    public function CreatedBy(){

        return $this->belongsTo('App\User', 'id', 'created_by');

    }


}
