<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

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
                    <a href="#">Comics</a>
                    <a href="#">Movies</a>
                    <a href="#">Tv</a>
                    <a href="#">Games</a>
                    <a href="#">Collectibles</a>
                    <a href="#">Vides</a>
                    <a href="#">Fans</a>
                    <a href="#">News</a>
                    <a href="#">Shop</a>
                    <input type="text">
                </div>
    
            </nav>
        </div>
    </header>

    {{-- Site main --}}
    <main id="site_main">
        @yield('content')
    </main>

    {{-- Site footer --}}
    <footer id="site_footer">

        Footer content

    </footer>

</body>
</html>