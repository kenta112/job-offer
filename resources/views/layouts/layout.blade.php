<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>job-offer</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?<?php echo date("Ymd-His"); ?>" media=" screen">
</head>
<body>
    <header class="header">
        <h1>
            <a href="{{route('profile.index')}}">Sai Tech</a>
        </h1>
        <nav class="pc-nav">
            <ul>　                    
    <!-- ユーザーは認証済み -->
                @auth
                <li><a href="{{route('mypage.index')}}">マイページ</a></li>
                <li><a href="{{route('chat.index')}}">チャット</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="btn-logout" type="submit" value="ログアウト">
                    </form>
                </li>
                @endauth
    <!-- ユーザーは認証されていない -->
                @guest
                <li><a href="{{route('login')}}">企業ログイン</a></li>
                <li><a href="{{route('login')}}">生徒ログイン</a></li>
            　　<li><a href="{{route('register')}}">会員登録</a></li>
                @endguest
            </ul>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="footer">
        <p>Saitech</p>
    </footer>
</body>
</html>