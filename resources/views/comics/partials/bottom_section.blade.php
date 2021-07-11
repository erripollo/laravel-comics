{{-- Comic bottom section --}}

<div class="bottom_section">
    <div class="container">

        <div class="col_left">
            <h3>Talent</h3>

            <div class="info">
                <div class="info_title">Art by:</div>
                <div class="info_section">
                    @foreach ($comic['artists'] as $artist)
                        <a href="#">{{$artist}}, </a>
                        @if ($loop->last)
                            <a href="#">{{$artist}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="info">
                <div class="info_title">Written by:</div>
                <div class="info_section">
                    @foreach ($comic['writers'] as $writer)
                        <a href="#">{{$writer}}, </a>
                        @if ($loop->last)
                            <a href="#">{{$writer}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col_right">
            <h3>Specs</h3>
            <div class="info">
                <div class="info_title">Series:</div>
                <div class="info_section">
                    <a href="#">
                        {{$comic['series']}}
                    </a>
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