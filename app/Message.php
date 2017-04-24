<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['title','body','status_id','inbox_id','sender_id','receiver_id'];
    protected $table = 'messages';

    public function Sender(){

        return $this->belongsTo('App\User', 'sender_id', 'id');

    }

    public function Status(){

        return $this->belongsTo('App\MessageStatus', 'status_id', 'id');


    }

    public function Receiver(){

        return $this->belongsTo('App\User', 'receiver_id', 'id');

    }

    public function Inbox(){

        return $this->belongsTo('App\Inbox');

    }
}
