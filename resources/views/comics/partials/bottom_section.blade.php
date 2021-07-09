{{-- Comic bottom section --}}

<div class="bottom_section">
    <div class="container">

        <div class="col_right">
            <h3>Talent</h3>

            <div class="info">
                <div class="info_title">Art by:</div>
                <div class="info_section">
                    @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}, </span>
                    @endforeach
                </div>
            </div>
            <div class="info">
                <div class="info_title">Written by:</div>
                <div class="info_section">
                    @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}, </span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col_left">
            <h3>Specs</h3>
            <div class="info">
                <div class="info_title">Series:</div>
                <div class="info_section">
                   {{$comic['series']}}
                </div>
            </div>
            <div class="info">
                <div class="info_title">U.S. Price:</div>
                <div class="info_section">
                   {{$comic['price']}}
                </div>
            </div>
            <div class="info">
                <div class="info_title">On Sale Date:</div>
                <div class="info_section">
                   {{$comic['sale_date']}}
                </div>
            </div>
        </div>
    </div>
</div>