<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $table = 'forums';

    public function Index(){

        return $this->belongsTo('App\Index');

    }

    public function Forums(){
        return $this->hasMany('App\Forum','index_id','id');
    }

    public function CreatedBy(){

        return $this->belongsTo('App\User', 'id', 'created_by');

    }


}
