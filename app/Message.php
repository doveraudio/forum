<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['title','body','sender_id','receiver_id'];
    protected $table = 'messages';

    public function Sender(){

        return $this->belongsTo('Sender', 'sender_id', 'id');

    }

    public function Receiver(){

        return $this->belongsTo('Receiver','receiver_id','id');

    }
}
