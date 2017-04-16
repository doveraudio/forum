<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    //
    protected $fillable = ['user_id'];

    protected $table = "inboxes";

    public function User(){

        return $this->belongsTo('User');

    }

    public function Messages(){

        return $this->hasMany('Message');

    }

    
}
