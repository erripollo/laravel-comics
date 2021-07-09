@php
    $links = config('links');
    //dd($links);
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- style css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

   
    @include('partials.header')

    {{-- Site main --}}
    <main id="site_main">
        @yield('content')
    </main>

   @include('partials.footer')

</body>
</html>