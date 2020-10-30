<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\ChatRoom;
use App\ChatRoomUser;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    public function store($id)
    {
        $match = Match::create([
            'user_id' => $id,
            'company' => Auth::id()
        ]);

        ChatRoom::create();

        $latest_chat_room = ChatRoom::orderBy('created_at', 'desc')->first();
        $chat_room_id = $latest_chat_room->id;

        ChatRoomUser::create(
            [
                'chat_room_id' => $chat_room_id,
                'user_id' => Auth::id()
            ]
        );
        ChatRoomUser::create(
            [
                'chat_room_id' => $chat_room_id,
                'user_id' => $id
            ]
        );

        return redirect()->back();
    }

    
}
