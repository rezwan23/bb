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
                        <a href="{{route('home')}}"><img src="{{asset('uploads/'.$meta->logo)}}" alt="{{$meta->name}}"></a>
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
                            <form class="header__search__form-wrapper" action="{{route('search')}}" method="post">
                                @csrf
                                <button class="search-action" type="submit"><span class="ico-search"></span></button>
                                <input class="search-input" name="search" type="text" placeholder="Search here">
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
                <li><a href="{{route('home')}}">Home</a></li>
                @foreach($menus as $menu)
                    @if($menu->subMenus->count()>0)
                        <li class="has-dropdown"><a href="#">{{$menu->name}}</a>
                            <ul class="menu-dropdown">
                                @foreach($menu->subMenus as $s_menu)
                                <li><a href="{{\Illuminate\Support\Facades\URL::to('/'.$s_menu->slug)}}">{{$s_menu->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{\Illuminate\Support\Facades\URL::to('/'.$menu->slug)}}">{{$menu->name}}</a>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
</header>
<div class="mobile-menu-area">
    <div class="btn-wrap">
        <button  id="JS-closeButton"><i class="ico-close"></i></button>
    </div>
    <div class="search-form">
        <form action="{{route('search')}}" method="post">
            @csrf
            <input placeholder="Search Here" name="search" type="text">
            <button type="submit"><i class="ico-search"></i></button>
        </form>
    </div>
    <nav class="mobile-menu">
        <ul>
            <li><a class="no-child"  href="{{route('home')}}">Home</a></li>
            @foreach($menus as $m_menu)
                @if($m_menu->subMenus->count()>0)
                    <li class="active"><a class="collapsed has-child" data-toggle="collapse" aria-expanded="true"  href="#cat-col-{{$m_menu->id}}">Home</a>
                        <ul id="cat-col-{{$m_menu->id}}" class="collapse" aria-expanded="true">
                            @foreach($m_menu->subMenus as $m_s_menu)
                                <li><a href="{{\Illuminate\Support\Facades\URL::to('/'.$m_s_menu->slug)}}">{{$m_s_menu->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a class="no-child"  href="{{\Illuminate\Support\Facades\URL::to('/'.$m_menu->slug)}}">Contact</a></li>
                @endif
            @endforeach
        </ul>
    </nav>
    <div class="social-links">
        <ul>
            <li><a href="{{$meta->fb}}"><span class="ion-social-facebook"></span></a></li>
            <li><a href="{{$meta->twitter}}"><span class="ion-social-twitter"></span></a></li>
            <li><a href="{{$meta->g_plus}}"><span class="ion-social-googleplus"></span></a></li>
            <li><a href="{{$meta->pinterest}}"><span class="ion-social-pinterest"></span></a></li>
        </ul>
    </div>
</div><!--// Mobile menu area end -->