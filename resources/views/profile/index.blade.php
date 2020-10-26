<!doctype html>
    <head>
        <meta charset="utf-8"/>
        <title>job-offer</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header class="header">
            <h1>
                <a href="https://sa-i.jp/">Sai Tech</a>
            </h1>
            <nav class="pc-nav">
                <ul>　                    
        <!-- // ユーザーは認証済み -->
                    @auth
                    <li><a href="{{route('login')}}">企業ログイン</a></li>
                    <li><a href="{{route('login')}}">生徒ログイン</a></li>
                    <li><a href="{{route('mypage.index')}}">マイページ</a></li>
                    @endauth

        <!-- // ユーザーは認証されていない -->
                    @guest
                　　<li><a href="{{route('register')}}">会員登録</a></li>
                    @endguest
                </ul>
            </nav>
        </header>
        
        <div class="Navigation">
        <h1>aaaaaaaaaaaaaaaaaaaaaaaa</h1>
        </div>
        <!-- 生徒一覧表記 -->
        <div class="content">　 
            <div class="container"> 
                <div class="card">
                    <div class="card__imgframe" src="">写真入る</div>
                    <div class="card__textbox">
                        <div class="card__titletext">
                            ホゲホゲホゲほげ
                        </div>
                        <div class="card__overviewtext">
                            ホゲホゲホゲ
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>Saitech</p>
        </footer>
        </body>
<html>
