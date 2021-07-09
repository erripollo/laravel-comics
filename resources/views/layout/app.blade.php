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

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- style css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    {{-- site header --}}
    <header id="site_header">
        
        <div class="top_header">
            <div class="container">
                <div>Dc powered&#x2120; visa&reg;</div>
                <div>Additional dc sites</div>
            </div>
        </div>
        
        <div class="container">
            <nav class="menu">
                <div class="logo">
                    <img src="./img/dc-logo.png" alt="">
                </div>
                <div class="links">
                    <a href="#">Characters</a>
                    <a href="{{route('comics')}}" class="{{Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                    <a href="#">Movies</a>
                    <a href="#">Tv</a>
                    <a href="#">Games</a>
                    <a href="#">Collectibles</a>
                    <a href="#">Vides</a>
                    <a href="#">Fans</a>
                    <a href="#">News</a>
                    <a href="#">Shop</a>

                    <div class="input_group">
                        <input type="text" placeholder="Search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </nav>
        </div>
        <div class="jumbotron">
            
        </div>
    </header>

    {{-- Site main --}}
    <main id="site_main">
        @yield('content')
    </main>

    {{-- Site footer --}}
    <footer id="site_footer">

        <div class="footer_top">
            <div class="container">
                <div class="links">
                    @foreach ($links as $title => $links_array)
                    <div class="list">
                        <h2>{{$title}}</h2>
    
                        @foreach ($links_array as $link)
                        <a href="#">{{$link}}</a>
                        @endforeach
    
                    </div>
                    @endforeach
                </div>
                <div class="copyright">
                    <p>
                        All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.
                    </p>
                    <a href="#">Cookies Settings</a>
                </div>

            </div>

        </div>
        
        <div class="footer_bottom">
            <div class="container">
                <div class="btn">
                    <span class="btn_outline">
                        Sign-up now!
                    </span>
                </div>
                <div class="social">
                    <span>Follow us</span>
                    <img src="./img/footer-facebook.png" alt="">
                    <img src="./img/footer-twitter.png" alt="">
                    <img src="./img/footer-youtube.png" alt="">
                    <img src="./img/footer-pinterest.png" alt="">
                    <img src="./img/footer-periscope.png" alt="">
                </div>
            </div>
        </div>

    </footer>

</body>
</html>