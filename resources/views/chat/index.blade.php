@extends('layouts.layout')

@section('content')

@foreach($matches as $match)
<a href="{{route('chat.show',$match->chat_room_id)}}"> {{$match->user->name}}</a>
@endforeach

@endsection