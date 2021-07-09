{{-- Comic top section --}}

<div class="comic_main">
    <div class="banner">
        <div class="container">
            <div class="poster">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="book">Comic book</div>
                <div class="gallery">View gallery</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="info">
            <h2>{{$comic['title']}}</h2>

            <div class="price_table">
                <div class="price">
                    <span>
                        U.S. Price: {{$comic['price']}}
                    </span>
                    <span>Available</span>
                </div>
                <div>Check Availability</div>
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