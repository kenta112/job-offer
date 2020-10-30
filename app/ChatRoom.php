<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    public function chatRoomUsers()
    {
        return $this->hasMany('App\ChatRoom');
    }

    public function chatMessages()
    {
        return $this->hasMany('App\ChatMessage');
    }
}
