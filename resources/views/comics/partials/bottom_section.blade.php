{{-- Comic bottom section --}}

<div class="bottom_section">
    <div class="container">
        <div class="col_right">
            <h3>Talent</h3>
            <div class="art">
                <div>Art by:</div>
                <div>
                    @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}, </span>
                    @endforeach
                </div>
            </div>
            <div class="write">
                <div>Written by:</div>
                <div>
                    @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}, </span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col_left">
            <h3>Specs</h3>
        </div>
    </div>
</div>