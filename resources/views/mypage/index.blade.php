<h2>MyPage</h2><br>

{{$user->name}}<br>
{{$user->email}}<br>

@if($exist)
<a href="{{route('mypage.edit')}}">プロフィール更新</a>
@else
<a href="{{route('mypage.create')}}">プロフィール作成</a>
@endif
