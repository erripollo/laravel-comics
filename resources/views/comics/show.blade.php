@extends('layout.app')

@section('title', 'Comic | DC')
    
@section('comic_content')

    <div class="comic_main">
        <div class="banner">
    
        </div>

        <div class="container">
            <div class="info">
                <h2>{{$comic['title']}}</h2>

                <div class="price_table">
                    <span>U.S. Price: {{$comic['price']}}</span>
                    <span>Check Availability</span>
                </div>

                <div class="desc">
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
            </div>
            
            <div class="adv">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
   
@endsection