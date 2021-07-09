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
                <a href="{{route('home')}}">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </a>
            </div>
            <div class="links">
                <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                <a href="{{route('comics')}}" class="{{Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                <a href="{{route('movies')}}" class="{{Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                <a href="{{route('tv')}}" class="{{Route::currentRouteName() === 'tv' ? 'active' : '' }}">Tv</a>
                <a href="{{route('games')}}" class="{{Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                <a href="{{route('collectibles')}}" class="{{Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                <a href="{{route('videos')}}" class="{{Route::currentRouteName() === 'videos' ? 'active' : '' }}">Vides</a>
                <a href="{{route('fans')}}" class="{{Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                <a href="{{route('news')}}" class="{{Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                <a href="{{route('shop')}}" class="{{Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>

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