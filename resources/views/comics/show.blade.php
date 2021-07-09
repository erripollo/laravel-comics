@extends('layout.app')

@section('title', 'Comic | DC')
    
@section('comic_content')

   @include('comics.partials.top_section')
   @include('comics.partials.bottom_section')
   
@endsection