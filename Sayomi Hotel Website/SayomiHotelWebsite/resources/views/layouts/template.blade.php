<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sayomi Hotel</title>

    <meta name="author" content="themesflat.com">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/jquery.datetimepicker.css')}}">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/colors/color1')}}.css" id="colors">

    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/animate.css')}}">

    <link href="{{asset('icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon" sizes="48x48">
    <link href="{{asset('icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">

</head>

<body class="">
    <!--<section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section>-->

    <div class="box">
        <header id="header" class="header clearfix">
            <div class="header-wrap clearfix">
                <div class="container">
                    <div class="logo-mobi"><a href="/"><h1>SAYOMI</h1></a></div>
                    <div class="btn-menu">
                        <span></span>
                    </div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li>
                                <a href="/rooms">Rooms</a>
                            </li>
                            <li>
                                <a>Reservation </a><ul class="submenu">
                                    <li><a href="/rooms">Rooms</a></li>
                                    <li><a href="/suites">Suites</a></li>
                                </ul>
                            </li>
                            <li class="logo">
                                <a href="/"><h1>Sayomi</h1></a>
                            </li>
                            <li class="has-sub"> <a href="/about">About Us</a></li>
                            <li class="has-sub"> <a href="/contactus">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <!-- Google Map -->
        <div id="flat-map">

        </div>

        <footer class="footer">
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget widget_text">
                                <h3 class="widget-title">About Us</h3>
                                <div class="textwidget">
                                    <p>We are Sayomi, <br /> together, we will make your American stays great again.</p>
                                    <ul class="footer-info">
                                        <li class="address">
                                            203, Segway Road, Cleveland,
                                            Ohio, The United States Of America.
                                        </li>
                                        <li class="email">Email us: sayomi@magatrumpified.com</li>
                                        <li class="phone">Call us: +12345 678 910</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget-link clearfix">
                                <h3 class="widget-title">Contact Us</h3>
                                <ul class="links">
                                    <li><a>Follow</a></li>
                                    <li><a>Us</a></li>
                                </ul>
                                <div class="social-links">
                                    <a target="_blank" href="https://facebook.com/iamanas22"><i class="fa fa-facebook-square"></i>Facebok</a>
                                    <a target="_blank" href="https://twitter.com/iamanas20"><i class="fa fa-twitter-square"></i>Twitter</a>
                                    <a target="_blank" href="https://instagram.com/iamanas22"><i class="fa fa-instagram"></i>Instagram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <div class="copyright-content">
                                    Copyright © 2017. Made by <a target="_blank" href="https://instagram.com/iamanas22"> Anas Latique</a>. All Rights Reserved
                                </div>
                            </div>
                            
                            <a class="go-top-v1"> <i class="fa fa-arrow-up"></i>&nbsp;Back to Top</a>
                            <br />
                            <div style="text-align: center; margin-bottom: 20px; margin-top: -20px;">
                                <a target="_blank" href="https://instagram.com/iamanas22">
                                <img src="{{asset('images/AnasLogo.png')}}" style="max-width: 40px; text-align: center" alt="Alternate Text" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!--box -->
    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('javascript/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.datetimepicker.full.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.easing.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/imagesloaded.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery-waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery-validate.js')}}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvV0EE3yFozGhjmUv3BgoyviVdXzCwHlk"></script>
    <script type="text/javascript" src="{{asset('javascript/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/main.js')}}"></script>

    <script type="text/javascript" src="{{asset('javascript/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/slider.js')}}"></script>

</body>
</html>