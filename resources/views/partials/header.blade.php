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