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