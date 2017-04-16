<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //

    protected $fillable = ['user_id','title','description','filename','location'];
    protected $table = 'uploads';

    public function User(){

        return $this->belongsTo('User');


    }

    


}
