<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/') }}front/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/main.css">
</head>
<body>
<header>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul class="nav-menu float-right">
                        <li><a href="#"><span class="lnr lnr-phone-handset"></span><span>+88 01741 300002</span></a></li>
                        <li><a href="http://www.easternuni.edu.bd/" target="_blank"><span class="lnr lnr-envelope"></span><span>easternuni.edu.bd</span></a></li>
                        @if(Session::get('visitorId'))
                            <li class="nav-item dropdown menu-has-children"><a href="">{{ Session::get('visitorName') }}</a>
                                <ul class="dropdown-menu" style="width: 100px">
                                    <li><a href="" class="dropdown-item text-success" style="width: 100px" onclick="
                                    event.preventDefault(); document.getElementById('visitorLogoutForm').submit();
                                    ">Logout</a></li>
                                </ul>
                                <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('visitor-login') }}"><span class="lnr lnr-user"></span><span>Login</span></a></li>
                            <li><a href="{{ route('sign-up') }}"><span class="lnr lnr-lock"></span><span>Sign Up</span></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="{{ route('/') }}">
                        <!--<img class="img-fluid" src="img/logo.png" alt="">-->
                        <img class="float-left" src="{{ asset('/') }}front/img/eulogo.png" alt="" style="height: 60px;width: 400px;">
                        <!--<h3 style="color: #0c5460">EU <span style="color:#ff1493;">News</span></h3>-->
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right">
                    {{--<img class="img-fluid" src="{{ asset('/') }}front/img/add-two.jpg" alt="">--}}
                    {{--<h3 style="color: #0c0c0c">Eastern University</h3>--}}
                    <marquee  scrollamount="4" scrolldelay="10">
                        <div>
                            <p class="pt-3 text-danger">Career Opportunity  <span class="ml-3 mr-3">|</span>   6th Convocation Registration   <span class="ml-3 mr-3">|</span>   Result of the Admission Test(LLB)  <span class="ml-3 mr-3">|</span>  Admission open for Summer 2019   <span class="ml-3 mr-3">|</span>   Admission Office will remain open 16th to 19th August 2018 from 9AM to 6PM  <span class="ml-3 mr-3">|</span>   Eastern University receives IEB Accreditation   <span class="ml-3 mr-3">|</span>   Chinese Language Course  <span class="ml-3 mr-3">|</span>   Admission Office Open on weekly holidays also   <span class="ml-3 mr-3">|</span>  Admission Open for Spring 2019 of Chinese Language Course  <span class="ml-3 mr-3">|</span>   Certificate Course on Maritime Law and Practice  <span class="ml-3 mr-3">|</span>  Group Admission Facilities   <span class="ml-3 mr-3">|</span>   Payment through bkash for Admission form   <span class="ml-3 mr-3">|</span>   Social Business Certificate Course – 4th batch  </p>
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <!--<li><a href="archive.html">Archive</a></li>-->
                    <!--<li><a href="category.html">Category</a></li>-->
                    <li class="menu-has-children"><a href="#">Category</a>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{ route('category-news',['name'=>$category->category_name,'id'=>$category->id] ) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                            <!--<li><a href="video-post.html">Video Post</a></li>-->
                            <!--<li><a href="audio-post.html">Audio Post</a></li>-->
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="#">Students</a>
                        <ul>
                            <li><a href="#">View Post</a>
                                <ul>
                                    <li><a href="{{ route('view-story') }}">View Story</a></li>
                                    <li><a href="{{ route('view-poem') }}">View Poem</a></li>
                                    <li><a href="{{ route('view-joke') }}">View Jokes</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Written Post</a>
                                <ul>
                                    <li><a href="{{ route('written-story') }}">Written Story</a></li>
                                    <li><a href="{{ route('written-poem') }}">Written Poem</a></li>
                                    <li><a href="{{ route('written-joke') }}">Written Jokes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
            {{--<div class="navbar-right">--}}
                {{--<form class="Search">--}}
                    {{--<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">--}}
                    {{--<label for="Search-box" class="Search-box-label">--}}
                        {{--<span class="lnr lnr-magnifier"></span>--}}
                    {{--</label>--}}
                    {{--<span class="Search-close">--}}
								{{--<span class="lnr lnr-cross"></span>--}}
							{{--</span>--}}
                {{--</form>--}}
            {{--</div>--}}
        </div>
    </div>
</header>

@yield('body')

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 single-footer-widget">
                <h4>Categories</h4>
                @foreach($below_categories as $below_category)
                <ul>
                    <li class=""><a href="{{ route('category-news', ['id' => $below_category->id, 'name' => $below_category->category_name]) }}">{{ $below_category->category_name }}</a></li>
                </ul>
                @endforeach
            </div>

            <div class="col-lg-3 col-md-4 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Study</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">International Relations</a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-4 single-footer-widget">
                <h4>Instragram Feed</h4>
                <ul class="instafeed d-flex flex-wrap">
                    <li><img src="{{ asset('/') }}front/img/eu-one.png" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/eu-two.jpg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/eu-three.jpg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/i4.jpg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/i5.jpg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/i6.jpg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/eu-four.jpeg" alt=""></li>
                    <li><img src="{{ asset('/') }}front/img/eu-five.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Bondhu</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 footer-social">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->
<script src="{{ asset('/') }}front/js/vendor/jquery-2.2.4.min.js"></script>
<script src="{{ asset('/') }}front/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}front/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('/') }}front/js/easing.min.js"></script>
<script src="{{ asset('/') }}front/js/hoverIntent.js"></script>
<script src="{{ asset('/') }}front/js/superfish.min.js"></script>
<script src="{{ asset('/') }}front/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('/') }}front/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/') }}front/js/mn-accordion.js"></script>
<script src="{{ asset('/') }}front/js/jquery-ui.js"></script>
<script src="{{ asset('/') }}front/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}front/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}front/js/mail-script.js"></script>
<script src="{{ asset('/') }}front/js/main.js"></script>
</body>
</html>