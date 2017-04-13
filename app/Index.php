<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    //
    protected $table = 'indexs';

    public function Forums(){
        return $this->hasMany('App\Forum');
    }

    public function CreatedBy(){

        return $this->belongsTo('App\User', 'user_id', 'created_by');

    }

    
}
