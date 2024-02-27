<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEO::generate() !!}

    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}?v=0.1">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/theme-dark.css') }}">

    <!-- Fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/front/img/fav/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/front/img/fav/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/front/img/fav/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/front/img/fav/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/front/img/fav/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/front/img/fav/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/front/img/fav/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/front/img/fav/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/front/img/fav/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/front/img/fav/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/front/img/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/front/img/fav/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/front/img/fav/favicon-16x16.png') }}">

    <link rel="shortcut icon" href="{{ asset('assets/front/img/fav/favicon.ico') }}">
    {{-- <meta property="og:image" content="{{ asset('assets/front/img/meta-bakthi.jpg') }}"> --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/front/img/fav/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

@stack('custom-style')
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-box-one">
                    <div class="pre-box-two"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left">
                        <ul class="header-flags">
                            
                            <li>
                                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" target="_blank">
                                    <img src="{{ asset('assets/front/img/flags/uk.gif') }}" alt=""> 
                                    <span>UK</span> 
                                </a>
                            </li>
                            <li>
                                <a href="http://csonet.org/index.php?menu=80" target="_blank">
                                    <img src="{{ asset('assets/front/img/flags/uno.gif') }}" alt=""> 
                                    <span>UN</span> </a>
                            </li>
                            <li>
                                <a href="https://www.google.ch/maps/place/Europe/@48.1322498,4.1720587,4z/data=!3m1!4b1!4m5!3m4!1s0x46ed8886cfadda85:0x72ef99e6b3fcf079!8m2!3d54.5259614!4d15.2551187?hl=en" target="_blank">
                                    <img src="{{ asset('assets/front/img/flags/eu.gif') }}" alt=""> 
                                    <span>EU</span> 
                                </a>
                            </li>
                            <li>
                                <a href="https://www.stadt-kriens.ch/dienstleistungen/vereine/vereine-detail.page/968/association/664" target="_blank">
                                    <img src="{{ asset('assets/front/img/flags/ch.gif') }}" alt=""> 
                                    <span>CH</span> 
                                </a>
                            </li>
                            <li>
                                <a href="http://www.ngosecretariat.gov.lk/index.php?option=com_content&view=featured&Itemid=101" target="_blank">
                                    <img src="{{ asset('assets/front/img/flags/lk.gif') }}" alt=""> 
                                    <span>LK</span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right">
                        <ul>
                           
                            <li>
                                <a href="https://www.facebook.com/vithutrustfund" target="_blank" alt="facebook">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vithutrustfund" target="_blank" alt="twitter">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCqWcfwkS8hLV3A5rdu22cDw/videos?disable_polymer=1" target="_blank" alt=youtube>
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vithutrustfund/" target="_blank" alt="instagram">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/front/img/vithu-white.png') }}" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/front/img/logo-vithu.png') }}" class="logo-one" alt="Logo">
                        <img src="{{ asset('assets/front/img/logo-vithu.png') }}" class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           
                            <li class="nav-item active">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('about.about-us') }}" class="nav-link dropdown-toggle ">About <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('about.about-us') }}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.patron') }}" class="nav-link">Our Patron</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.logo') }}" class="nav-link">About Our Logo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.history') }}" class="nav-link">Our History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.journey') }}" class="nav-link">Our Journey</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.awards') }}" class="nav-link">Awards</a>
                                    </li>
                                </ul>
                            </li>

                           <li class="nav-item">
                                <a href="{{ route('projects') }}" class="nav-link dropdown-toggle ">Our Work <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('projects') }}" class="nav-link">All Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="tags text-capitalize" href="{{ route('ongoing', ['status' => 'Ongoing']) }}">Ongoing</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="tags text-capitalize" href="{{ route('completed', ['status' => 'Completed']) }}">Completed</a>

                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('teaching-in-braille') }}" class="nav-link dropdown-toggle "> <img src="{{ asset('assets/front/img/sign-language.png') }}" alt="" class="header-sign-logo"> Sign Language<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('teaching-in-braille') }}" class="nav-link">Teaching in Braille</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('teaching-in-sign-language') }}" class="nav-link">Teaching in sign language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('education-for-disabled') }}" class="nav-link">Education For Disabled</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('education-for-children') }}" class="nav-link">Education For Children</a>
                                    </li>

                                </ul>
                            </li>



                            <li class="nav-item">
                                <a href="{{route('events')}}" class="nav-link dropdown-toggle ">Get Involved<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('volunteering') }}" class="nav-link">Volunteering</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('sponsorship') }}" class="nav-link">Sponsorship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('our-pledge') }}" class="nav-link">Our Pledge</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('amazonsmile') }}" class="nav-link">AmazonSmile</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('blogs')}}" class="nav-link dropdown-toggle ">Explore<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('blogs')}}" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('accounts')}}" class="nav-link">Accounts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('our-parners')}}" class="nav-link">Our Partners</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact.create') }}" class="nav-link">Contact Us</a>
                            </li>

                        </ul>
                        <div class="side-nav">

                            <a class="donate-btn" href="{{ route('donation') }}">
                               <span>Donate</span>
                                <i class="icofont-heart-alt"></i>
                            </a>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
