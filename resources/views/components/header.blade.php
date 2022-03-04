
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suryodaya Saving & Credit Cooperative</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--Fontaswome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('./asset/bootstrap-icons/bootstrap-icons.css')}}">

    <!--Custom CSS-->
    <link rel="stylesheet" href="{{asset('./asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./asset/css/other.css')}}">

    <!--Animation-->
    <link rel="stylesheet" href="{{asset('./asset/Animation/animate.css')}}">

    <!--Flaticon-->
    <link rel="stylesheet" href="{{asset('./asset/fonts/flaticon/font/flaticon.css')}}">

    <!--Carousel-->
    <link rel="stylesheet" href="{{asset('./asset/Carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('./asset/Carousel/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    @livewireStyles
</head>

<body onload="renderTime();">
   <!--Preloader
   <div id="preloader">
       <div id="status"></div>
   </div>-->
    <!--Top Header Start-->
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-clock"></i> Mon - Fri 10:00 - 5:00
                </div>
                <div class="date-service">
                    <p><i class="fa fa-calendar-alt"></i> Date:<span id="clockDisplay" class="container time"></span>
                    </p>
                </div>
            </div>
                
             
                    <div class="ht-right">
                    @if( Auth::check() && Auth::user()->role == 2)
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                            @else
                            <a href="/login" class="login-panel"><i
                            class="fa fa-user"></i>login</a>
                        @endif
                    <div class="lan-selector"></div>
                 </div>
                    
                 </div>
                      
                
                 
                 
                </div>
    </div>
    <!--Top Header Start-->
   
    <div class="py-3 top-brand">
        <div class="container">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0 brand">
                <div class="col-md-6 d-flex mb-2 mb-md-0 wow slideInRgiht" data-wow-duration=".5s">
                    <a class="navbar-brand d-flex align-items-center text-center" href="index.html"><span
                            class="flaticon flaticon-health"></span><img src="{{asset('./asset/img/logo.png')}}" alt=""></a>
                </div>
                <div class="col-md-3 d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="pr-md-3 pl-md-3 pl-3 text wow slideInLeft" data-wow-duration=".5s">
                        <p class="hr"><span>Contact Us</span></p>
                        <p class="con">+977980000000000</p>
                        <p class="con">+08640000000</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="fa fa-map-marker-alt"></span>
                    </div>
                    <div class="text pl-3 pl-md-3 wow slideInLeft" data-wow-duration=".5s">
                        <p class="hr"><span>Address</span></p>
                        <p class="con"> Sunilsmarti Rural Municipality-3</p>
                        <p class="con">Rolpa, Nepal</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <nav id="navbar" class="navbar m-auto">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li class="dropdown"><a href="/about"><span>About Us</span> <i
                                class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="/about">About Suryodaya</a></li>
                            <li><a href="/mission">Mission Vision & Objectives</a></li>
                            <li><a href="/chairmanmgs">Chairman Message</a></li>
                            <li><a href="/managermgs">Manager Message</a></li>
                            <li><a href="/team">Management Team</a></li>
                            <li><a href="memberships">Membership</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="service"><span>Services</span> <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="loans">Loans Service</a></li>
                            <li><a href="saving">Saving Service</a></li>
                            <li><a href="bank">Banking Service</a></li>
                            <li><a href="amb">Ambiulance Service</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="events">Events</a></li>
                    <li><a class="nav-link scrollto" href="event">Events</a></li>
                    <li><a class="nav-link scrollto" href="news">News</a></li>
                    <li><a class="nav-link scrollto" href="gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="download">Download</a></li>
                    <li><a class="nav-link scrollto" href="contact">Contact us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->