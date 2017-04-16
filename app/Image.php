<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ["user_id","title","description","filename","location"];
    protected $table = 'images';

    public function User(){

        return $this->belongsTo('App\User');

    }
    
       
}
