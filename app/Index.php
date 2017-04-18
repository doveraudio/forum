<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    //
    protected $fillable = ['title','description','created_by'];
    
    protected $table = 'indexes';

    public function Forums(){
        return $this->hasMany('App\Forum');
    }

    public function CreatedBy(){

        return $this->belongsTo('App\User', 'user_id', 'created_by');

    }

    
}
