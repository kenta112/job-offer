@extends('layouts.layout')

@section('content')

プロフィール更新画面

<form action="{{route('mypage.update')}}" method="POST">
@csrf
  <div>
    <lavel for="employment">雇用形態</lavel>
    <input id="employment" value="{{$profile->employment}}" type="text" name="employment" placeholder="例）フリーランス">
  </div>

<div>
    <lavel for="language">使用言語</lavel>
    <input id="language" type="text" value="{{$profile->language}}" name="language" placeholder="例）laravel">
  </div>

  <div>
    <lavel for="location">所在地</lavel>
    <input id="location" type="text" value="{{$profile->location}}" name="location" placeholder="例）長野県長野市">
  </div>

  <div>
    <lavel for="birthday">生年月日</lavel>
    <input id="birthday" type="number" value="{{$profile->birthday}}" name="birthday" placeholder="例）19940602">
  </div>

  <div>
    <lavel for="icon">アイコン</lavel>
    <input id="icon" type="text" value="{{$profile->icon}}" name="icon" >
  </div>

  <div>
    <lavel for="image">イメージ画像</lavel>
    <input id="image" value="{{$profile->image}}" type="text" name="image" >
  </div>


  <div>
    <lavel for="appeal">アピールポイント</lavel>
    <textarea id="appeal" name="appeal" >{{$profile->appeal}}</textarea>
  </div>

  <div>
    <lavel for="future">将来像</lavel>
    <textarea id="future" name="future" >{{$profile->future}}</textarea>
  </div>

  <div>
  <input type="submit" value="送信">
  </div>
</form>

@endsection