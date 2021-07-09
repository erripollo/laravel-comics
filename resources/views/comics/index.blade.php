@extends('layout.app')

@section('title', 'Comics | DC')
    
@section('content')

    <div class="comics_main">
        
        <div class="container">
            <div class="label">
                Current series
            </div>
            <div class="cards">
                @foreach ($comics as $index => $comic)
                <div class="card">
                    <a href="{{route('comic', ['id' => $index])}}">
                        <img class="cover" src="{{$comic['thumb']}}" alt="">
                        <div class="title">
                            {{$comic['series']}}
                        </div>
                    </a>
                </div>
                @endforeach    
            </div>
            
            <div class="btn">
                <span class="btn_solid">Load more</span>
            </div>
        </div>
        <div class="main_bottom">
            <div class="container">
                <div class="card">
                    <img src="./img/buy-comics-digital-comics.png" alt="">
                    <div>
                        Digital comics
                    </div>
                </div>
                <div class="card">
                    <img src="./img/buy-comics-merchandise.png" alt="">
                    <div>
                        Dc merchandise
                    </div>
                </div>
                <div class="card">
                    <img src="./img/buy-comics-subscriptions.png" alt="">
                    <div>
                        Subscriptions
                    </div>
                </div>
                <div class="card">
                    <img src="./img/buy-comics-shop-locator.png" alt="">
                    <div>
                        Comic shop locator
                    </div>
                </div>
                <div class="card">
                    <img src="./img/buy-dc-power-visa.svg" alt="">
                    <div>
                        Dc power visa
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection