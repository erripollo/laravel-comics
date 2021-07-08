@extends('layout.app')

@section('title', 'Comics | DC')
    
@section('content')
    <div class="cards">
        @foreach ($comics as $comic)
        <img src="{{$comic['thumb']}}" alt="">
        <div class="title">
            {{$comic['series']}}
        </div>
            
        @endforeach
        
    </div>
@endsection