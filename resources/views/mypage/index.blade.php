mypage

{{$user->name}}
{{$user->email}}

@if($exist)
<a href="{{route('mypage.edit')}}">プロフィール更新</a>
@else
<a href="{{route('mypage.create')}}">プロフィール作成</a>
@endif
