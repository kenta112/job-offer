<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatRoom;
use App\ChatMessage;
use App\ChatRoomUser;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        
        $chat_room_ids = ChatRoomUser::where('user_id',$user_id)->pluck('chat_room_id');
        
         $room_ids = ChatRoom::whereIn('id',$chat_room_ids)->pluck('id');
        $matches = ChatRoomUser::whereIn('chat_room_id',$room_ids)->whereNotIn('user_id',[$user_id])->get();
        
        
   
        
     return view('chat.index',compact('matches'));
    }
        

    public function show($id)
    {
        //対象chatMessageの取得
        //room->idに適応するchatmessageを全て取得する
        $messages = ChatRoom::find($id)->chatMessages()->orderBy('created_at', 'desc')->get();

        return view('chat.show', compact('messages', 'id'));
    }

    public function store(Request $request)
    {
        //chatMessageの保存 (chat_room_id, user_id, message)
        ChatMessage::create([
            'chat_room_id' => $request->chat_room_id,
            'user_id' => Auth::id(),
            'message' => $request->message
        ]);
        
        return redirect()->back();
    }
}
