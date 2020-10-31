@extends('layouts.layout')

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
                    <div class="profiles">
                        <!-- <div class="card__imgframe" src=""></div> -->
                    
                        <img src="{{$profile->icon}}" alt="" class="card__imgframe">

                        <div class="card__textbox">
                            <div class="card__titletext">
                                <h1>{{$profile->user->name}}</h1>
                            </div>
                            <div class="card__overviewtext">
                                {{$profile->birthday}} 
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