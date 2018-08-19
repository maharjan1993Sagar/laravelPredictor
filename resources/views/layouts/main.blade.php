<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('colorlib/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('colorlib/images/favicon.ico')}}"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('colorlib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('colorlib/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/style.css')}}">
    <link rel="stylesheet" href="{{asset('colorlib/css/responsive.css')}}">
    <script src="{{asset('colorlib/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!--Mainmenu-area-->
<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{url('/')}}" class="navbar-brand logo">
                <h2>Predictor</h2>
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())

                    @if(auth::user()->role=="Admin")
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{url('/user')}}">Users</a></li>
                        <li><a href="{{url('/match')}}">Matches</a></li>
                    @elseif(auth::user()->role=="User")
                        <li><a href="{{url('/prediction')}}">Predictions</a></li>
                        <li><a href="{{url('/match')}}">Matches</a></li>
                    @endif
                @endif

                @guest
                        <li ><a href="{{route('about')}}">About</a></li>
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest


            </ul>
        </nav>
    </div>
</div>
<!--Mainmenu-area/-->


<section class="angle-bg sky-bg section-padding">
    <div style="min-height:313px;">

        @yield('content')
    </div>
</section>

<footer class="relative sky-bg" id="contact-page">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy;Copyright 2018 All right reserved. Supported and Made with  <i class="ti-heart"
                                                                                              aria-hidden="true"></i> by
                        <a href="https://colorlib.com">Sagar Maharjan</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Vendor-JS-->
<script src="{{asset('colorlib/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('colorlib/js/vendor/bootstrap.min.js')}}"></script>
<!--Plugin-JS-->
<script src="{{asset('colorlib/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('colorlib/js/contact-form.js')}}"></script>
<script src="{{asset('colorlib/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('colorlib/js/scrollUp.min.js')}}"></script>
<script src="{{asset('colorlib/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('colorlib/js/wow.min.js')}}"></script>
<!--Main-active-JS-->
<script src="{{asset('colorlib/js/main.js')}}"></script>
</body>

</html>
