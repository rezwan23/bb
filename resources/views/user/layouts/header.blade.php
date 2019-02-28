<!DOCTYPE html>
<html class="html" lang="en">

<!-- Mirrored from phpstack-240591-745191.cloudwaysapps.com/live/newstoday/html/home-vancouver.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 18:18:18 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | {{$meta->name}}</title>

    <!-- Google fonts -->
    <link href="{{asset('user/fonts.googleapis.com/css0a13.css?family=Roboto:300,400,400i,500,700,900')}}" rel="stylesheet">
    <link href="{{asset('user/fonts.googleapis.com/cssde1d.css?family=Open+Sans:300,300i,400,400i,600,700,800')}}" rel="stylesheet">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/owl.carousel2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/owl.carousel2/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/custom-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/newstoday-v.min.css')}}">
    <!-- endinject -->
    <style>
        p{
            text-align: justify;
        }
    </style>
    <!-- inject:head:js -->
    <script src="{{asset('user/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- endinject -->
    @yield('head')
</head>
<body class="u-gray-bg">

<header class="header header--style-two">
    <div class="headet__top">
        <div class="container">
            <div class="row u-flex--item-center">
                <div class="col-2">
                    <div class="aside-menubar">
                        <button id="JS-openButton">
                            <i class="ico-bar"></i>
                        </button>
                    </div>
                </div>
                <div class="col-8 text-center">
                    <div class="header__logo">
                        <a href="#"><img src="{{asset('uploads/'.$meta->logo)}}" alt="{{$meta->name}}"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="header__search text-right">
                        <button class="JS-search-trigger">
                            <i class="ico-search"></i>
                        </button>
                    </div>
                    <!--header search area -->
                    <div class="header__search__form">
                        <div class="header__search__inner">
                            <button class="close-btn JS-form-close"><i class="ico-close"></i></button>
                            <form class="header__search__form-wrapper" action="#">
                                <button class="search-action"><span class="ico-search"></span></button>
                                <input class="search-input" type="text" placeholder="Search here">
                            </form>
                        </div>
                    </div><!--// header search area end-->
                </div>
            </div>
        </div>
    </div>

    <nav class="header__nav d-none d-lg-block">
        <div class="container text-center u-relative">
            <ul>
                <li class="has-dropdown"><a href="#">Home</a>
                    <ul class="menu-dropdown">
                        <li><a href="home-new-york.html">New York</a></li>
                        <li class="active"><a href="home-vancouver.html">Vancouver</a></li>
                        <li><a href="home-tokyo.html">Tokyo</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-mega-menu has-mega-menu parent__megaMenu pos-left"><a href="#">Sports</a>
                    <div class="mega-menu">
                        <!-- Nav tabs -->
                        <ul class="mega-menu__nav">
                            <li class="active"><a href="#">Football</a></li>
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#"> Basketball</a></li>
                            <li><a href="#">Board sports</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="megam-menu__content">
                            <div class="megam-menu__content__inner">
                                <article  class="post-item">
                                    <div class="post-item__inner">
                                        <figure>
                                            <a href="#"><img src="{{asset('user/img/thumb/p118-350x200.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h6 class="post-title">
                                                <a href="#">The easiest way to own
                                                    the Bohemyan Look</a></h6>
                                            <div class="post-meta">
                                                <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>Sept. 20, 2018  </time>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                                <article  class="post-item">
                                    <div class="post-item__inner">
                                        <figure>
                                            <a href="#"><img src="{{asset('user/img/thumb/p118-350x200.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h6 class="post-title">
                                                <a href="#">Jaguar Type on Display
                                                    at the LA Auto Show</a></h6>
                                            <div class="post-meta">
                                                <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>Sept. 20, 2018  </time>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                                <article  class="post-item">
                                    <div class="post-item__inner">
                                        <figure>
                                            <a href="#"><img src="{{asset('user/img/thumb/p118-350x200.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h6 class="post-title">
                                                <a href="#">Mutual Fund Mark Down
                                                    UberInvestments</a></h6>
                                            <div class="post-meta">
                                                <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>Sept. 20, 2018  </time>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div> <!--//Mega Menu end -->


                </li>
                <li><a href="#">Entertainment</a>
                </li>
                <li><a href="#">World News</a></li>
                <li><a href="#">Opinion</a></li>
                <li><a href="contact.html">Technology</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="mobile-menu-area">
    <div class="btn-wrap">
        <button  id="JS-closeButton"><i class="ico-close"></i></button>
    </div>
    <div class="search-form">
        <form action="#">
            <input placeholder="Search Here" type="text">
            <button><i class="ico-search"></i></button>
        </form>
    </div>
    <nav class="mobile-menu">
        <ul>
            <li class="active"><a class="collapsed has-child" data-toggle="collapse" aria-expanded="true"  href="#cat-col-1">Home</a>
                <ul id="cat-col-1" class="collapse" aria-expanded="true">
                    <li><a href="home-new-york.html">New York</a></li>
                    <li><a href="home-vancouver.html">Vancouver</a></li>
                    <li><a href="home-tokyo.html">Tokyo</a></li>
                </ul>
            </li>
            <li><a class="collapsed has-child"  data-toggle="collapse" href="#cat-col-2" aria-expanded="true">Archive</a>
                <ul aria-expanded="true" id="cat-col-2" class="collapse">
                    <li><a href="archive-nyork.html">Archive(New York)</a></li>
                    <li><a href="archive-tokyo.html">Archive(Tokyo)</a></li>
                </ul>
            </li>
            <li><a class="no-child"  href="contact.html">Contact</a></li>
            <li><a class="collapsed has-child"  data-toggle="collapse" href="#cat-col-4" aria-expanded="true">News</a>
                <ul aria-expanded="true" id="cat-col-4" class="collapse">
                    <li><a href="single-post-nyork.html">Single News (New York)</a></li>
                    <li><a href="single-post-vancouver.html">Single News (Vancouver)</a></li>
                    <li><a href="single-post-tokyo.html">Single News (Tokyo)</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <div class="social-links">
        <ul>
            <li><a href="#"><span class="ion-social-facebook"></span></a></li>
            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
            <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
            <li><a href="#"><span class="ion-social-tumblr"></span></a></li>
        </ul>
    </div>
</div><!--// Mobile menu area end -->