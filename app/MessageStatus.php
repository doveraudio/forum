<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageStatus extends Model
{
    //
    protected $fillable = ['value'];
    protected $table = 'message_statuses';

    public function Messages(){

        return $this->hasMany('App\Message', 'id', 'status_id');

    }

}
