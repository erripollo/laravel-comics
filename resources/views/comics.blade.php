@extends('layout.app')

@section('title', 'Comics | DC')
    
@section('content')
    <div class="cards container">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="title">
                {{$comic['series']}}
            </div>
        </div>
            
        @endforeach
        
    </div>
@endsection