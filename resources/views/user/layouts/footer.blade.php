<footer class="footer">
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 u-sm-down-margin-b-30">
                    <div class="site-logo">
                        <a href="{{route('home')}}"><img src="{{asset('uploads/'.$meta->logo)}}" alt="{{$meta->name}}"></a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 u-sm-down-margin-b-30">
                    <p style="text-align: justify">{{$meta->description}}</p>
                </div>

                <div class="col-md-2 offset-md-1">
                    <ul class="social social--redius social--color">
                        <li><a class="social__facebook" href="{{$meta->fb}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="social__twitter" href="{{$meta->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="social__google-plus" href="{{$meta->g_plus}}"><i class="fa fa-google-plus"></i></a></li>
                        {{--<li><a class="social__linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a class="social__instagram" href="#"><i class="fa fa-instagram"></i></a></li>--}}
                        {{--<li><a class="social__dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                        <li><a class="social__pinterest" href="{{$meta->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                        {{--<li><a class="social__behance" href="#"><i class="fa fa-behance"></i></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__end footer__end--brand">
        <div class="container">
            <div class="row u-flex--item-center">
                <div class="col-md-5 u-sm-down-margin-b-15">
                    <div class="footer__copyright">
                        <p class="text-left">© 2019 BatteryByte.com</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <nav class="footer__nav">
                        <ul>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Privacy Policy </a></li>
                            <li><a href="#">Copyright Policy </a></li>
                            <li><a href="#">Your ad choices</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Subscription Terms</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- inject:js -->
<script src="{{asset('user/vendor/jquery/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/vendor/sticky-kit/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('user/vendor/flexMenu-master/flexmenu.min.js')}}"></script>
<script src="{{asset('user/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user/vendor/nicescroll-master/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('user/js/newstoday.js')}}"></script>

@yield('footer')
<!-- endinject -->
</body>

<!-- Mirrored from phpstack-240591-745191.cloudwaysapps.com/live/newstoday/html/home-vancouver.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 18:20:42 GMT -->
</html>
