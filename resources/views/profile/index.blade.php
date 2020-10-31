@extends('layouts.layout')


    <body>
        <header class="header">
            <h1>
                <a href="https://sa-i.jp/">Sai Tech</a>
            </h1>
            <nav class="pc-nav">
                <ul>　                    
        <!-- ユーザーは認証済み -->
                    @auth
                    <li><a href="{{route('mypage.index')}}">マイページ</a></li>
                    @endauth
        <!-- ユーザーは認証されていない -->
                    @guest
                    <li><a href="{{route('login')}}">企業ログイン</a></li>
                    <li><a href="{{route('login')}}">生徒ログイン</a></li>
                　　<li><a href="{{route('register')}}">会員登録</a></li>
                    @endguest
                </ul>、
            </nav>
        </header>
@section('content')
        <div class="navigation">
            <h1>\プログラミングスクールSaiTechの生徒と企業を繋げたい/<h1>
        </div>

        <!-- 生徒一覧表記 -->
        <div class="content">
            <h2>〜 生徒一覧 〜</h2>　 
            <div class="container"> 
                @foreach ($profiles as $profile)
                <a href="{{route('profile.show',$profile->user->id)}}">
                <div class="card">
                    <div class="card__imgframe" src=""></div>
                    <div class="card__textbox">
                        <div class="card__titletext">
                            <h1>{{$profile->user->name}}</h1>
                        </div>
                        {{$profile->user->id}}
                        <div class="card__overviewtext">
                            <br>
                            {{$profile->birthday}} 
                            <br>
                            {{$profile->location}}  
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class ="pagenate">
            <h1>{{ $profiles->links()}}</h1>
        </div>   

@endsection