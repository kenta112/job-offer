

<!-- @extends('layouts.layout')

@section('content') -->

<h2>MyPage</h2>



{{$user->name}}<br>
{{$user->email}}<br>

@if($user->type === 0) 
@if($exist)
<a href="{{route('mypage.edit')}}">プロフィール更新</a>
@else
<a href="{{route('mypage.create')}}">プロフィール作成</a>
@endif
@endif

<!-- @endsection -->