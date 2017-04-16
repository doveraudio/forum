<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['user_id','image_id','headline','description','birthdate','location','signature'];
    protected $table = 'profiles';

    public function User(){
        return $this->belongsTo('User');
    }


    public function Image(){

        return $this->hasOne('Image');

    }

    

}
