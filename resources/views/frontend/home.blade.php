@extends('layouts.front.index_blade')
@section('content')
    

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="1lXI4Jd7tamMKEDV3VnA2uy4afNQkKUwR3Ux3bkv">

    <title>Welcome to Vithu Trust Fund - Vithu Trust Fund</title>
<meta name="description" content="Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.">
<meta name="keywords" content="Charity">
<link rel="canonical" href="https://dev.vithu.org">
<meta property="og:title" content="Welcome to Vithu Trust Fund">
<meta property="og:description" content="Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.">
<meta property="og:type" content="site">
<meta property="og:image:secure_url" content="https://dev.vithu.org/assets/admin/images/default-image.jpg">
<meta property="og:url" content="https://dev.vithu.org">
<meta property="og:site_name" content="vithutrustfund">
<meta property="og:image" content="https://dev.vithu.org/assets/admin/images/default-image.jpg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@vithutrustfund">
<meta name="twitter:creator" content="@vithutrustfund">
<meta name="twitter:title" content="Welcome to Vithu Trust Fund">
<meta name="twitter:description" content="Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.">
<meta name="twitter:image" content="https://dev.vithu.org/assets/admin/images/default-image.jpg">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"Vithu Trust Fund","description":"Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy."}</script>

    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/icofont.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/meanmenu.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/modal-video.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/fonts/flaticon.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/animate.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/lightbox.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/odometer.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/nice-select.min.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/style.css?v=0.1">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/responsive.css">
    <link rel="stylesheet" href="https://dev.vithu.org/assets/front/css/theme-dark.css">

    <!-- Fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://dev.vithu.org/assets/front/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="https://dev.vithu.org/assets/front/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://dev.vithu.org/assets/front/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://dev.vithu.org/assets/front/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://dev.vithu.org/assets/front/img/fav/favicon-16x16.png">

    <link rel="shortcut icon" href="https://dev.vithu.org/assets/front/img/fav/favicon.ico">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://dev.vithu.org/assets/front/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .video-banner-area {
            position: relative;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(1 15 26 / 51%);
            ;
            /* Adjust the opacity value as needed */
            z-index: 1;
        }

        .background-video {
            position: relative;
            z-index: 0;
        }
    </style>
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
                                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview"><img src="https://dev.vithu.org/assets/front/img/flags/uk.gif" alt=""> <span>UK</span> </a>
                            </li>
                            <li>
                                <a href="http://csonet.org/index.php?menu=80"><img src="https://dev.vithu.org/assets/front/img/flags/uno.gif" alt=""> <span>UN</span> </a>
                            </li>
                            <li>
                                <a href="https://www.google.ch/maps/place/Europe/@48.1322498,4.1720587,4z/data=!3m1!4b1!4m5!3m4!1s0x46ed8886cfadda85:0x72ef99e6b3fcf079!8m2!3d54.5259614!4d15.2551187?hl=en"><img src="https://dev.vithu.org/assets/front/img/flags/eu.gif" alt=""> <span>EU</span> </a>
                            </li>
                            <li>
                                <a href="https://www.stadt-kriens.ch/dienstleistungen/vereine/vereine-detail.page/968/association/664"><img src="https://dev.vithu.org/assets/front/img/flags/ch.gif" alt=""> <span>CH</span> </a>
                            </li>
                            <li>
                                <a href="http://www.ngosecretariat.gov.lk/index.php?option=com_content&view=featured&Itemid=101"><img src="https://dev.vithu.org/assets/front/img/flags/lk.gif" alt=""> <span>LK</span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right">
                        <ul>
                            
                            <li>
                                <a href="https://www.facebook.com/vithutrustfund" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vithutrustfund" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCqWcfwkS8hLV3A5rdu22cDw/videos?disable_polymer=1" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vithutrustfund/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="header-search">
                            <i id="search-btn" class="icofont-search-2"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="icofont-close"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="https://dev.vithu.org" class="logo">
                <img src="https://dev.vithu.org/assets/front/img/vithu-white.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="https://dev.vithu.org">
                        <img src="https://dev.vithu.org/assets/front/img/logo-vithu.png" class="logo-one" alt="Logo">
                        <img src="https://dev.vithu.org/assets/front/img/logo-vithu.png" class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            
                            
                            <li class="nav-item active">
                                <a href="https://dev.vithu.org" class="nav-link">Home</a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle ">About <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/about-us" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/patron" class="nav-link">Our Patron</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/about-our-logo" class="nav-link">About Our Logo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/history" class="nav-link">Our History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/our-journery" class="nav-link">Our Journey</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/about/awards" class="nav-link">Awards</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle ">Our Work <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/projects" class="nav-link">All Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/projects/ongoing" class="nav-link">Ongoing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/projects/completed" class="nav-link">Completed</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle "> <img src="https://dev.vithu.org/assets/front/img/sign-language.png" alt="" class="header-sign-logo"> Sign Language<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/teaching-in-braille" class="nav-link">Teaching in Braille</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/teaching-in-sign-language" class="nav-link">Teaching in sign language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/education-for-disabled" class="nav-link">Education For Disabled</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/education-for-children" class="nav-link">Education For Children</a>
                                    </li>

                                </ul>
                            </li>



                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle ">Get Involved<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/volunteering" class="nav-link">Volunteering</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/sponsorship" class="nav-link">Sponsorship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/our-pledge" class="nav-link">Our Pledge</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/amazonsmile" class="nav-link">AmazonSmile</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle ">Explore<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="https://dev.vithu.org/news" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Accounts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Our Partners</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="https://dev.vithu.org/contact-us" class="nav-link">Contact Us</a>
                            </li>
                            
                            
                        </ul>
                        <div class="side-nav">

                            <a class="donate-btn" href="https://dev.vithu.org/donation">
                               <span>Donate</span>
                                <i class="icofont-heart-alt"></i>
                            </a>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div> --}}
<main wire:id="es1wN29HBrS0VyefMVZ5" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;es1wN29HBrS0VyefMVZ5&quot;,&quot;name&quot;:&quot;pages.home-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;660b384b&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;61a699591ce5e5f79723cabeb273019db773732df0fdaf04d0ebaa1ae9bbadc8&quot;}}">
    <div class="video-banner-area">
        <div class="video-overlay"></div>

        <video loop="" muted="" autoplay="" poster="#" class="background-video">
            <source src="https://dev.vithu.org/assets/front/img/home-screen.mp4" type="video/mp4">
        </video>


        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="video-banner-content">
                        <h1>We help all of the people in need around the world</h1>
                        <p>It is a long established fact that a reader will be page distracted by the readable content
                            of a pain</p>
                        <div class="banner-btn-area">
                            <a class="common-btn banner-btn" href="https://dev.vithu.org/donation">Get Start A Fundraising</a>
                            <a class="common-btn" href="https://dev.vithu.org/donation">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>Who we are?</h2>
                        </div>
                        <p> <b>Vithu Trust Fund</b>
                            is a charity organisation dedicated to improve and safeguard the lives of children in Sri
                            Lanka and raise voice for the needy.
                        </p>
                        <p>
                            There are thousands of children who go through the day without a single nourishing meal.
                            They include victims of war, which has thrown the bread-winners of these families out of
                            work and the future of our youngsters into darkness.


                        </p>
                        <ul>
                            <li>
                                <span>01</span>
                                Funds for Education

                            </li>
                            <li>
                                <span>02</span>
                                Funds for Shelter
                            </li>
                            <li>
                                <span>03</span>
                                Funds for upbringing children
                            </li>
                            <li>
                                <span>04</span>
                                Funds for the elderly
                            </li>
                        </ul>
                        <div class="about-btn-area">
                            <a class="common-btn about-btn" href="https://dev.vithu.org/donation">Get Start A Fundraising</a>
                            <a class="common-btn" href="https://dev.vithu.org/about/about-us">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://dev.vithu.org/assets/front/img/about/about-main2.jpg" alt="About">
                        <div class="video-wrap">
                            <button class="js-modal-btn" data-video-id="WkE5shDSrQw">
                                <i class="icofont-ui-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-item">
                        <i class="flaticon-solidarity"></i>
                        <h3>
                            <a href="https://dev.vithu.org/volunteering">Be a volunteer</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                            not simply.</p>
                        <a class="feature-btn" href="https://dev.vithu.org/volunteering">Join Now</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-item two">
                        <i class="flaticon-donation"></i>
                        <h3>
                            <a href="https://dev.vithu.org/donation">Donate now</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                            not simply.</p>
                        <a class="feature-btn" href="https://dev.vithu.org/donation">Join Now</a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="feature-item three">
                        <i class="flaticon-love"></i>
                        <h3>
                            <a href="https://dev.vithu.org/contact-us">Show your love</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                            not simply.</p>
                        <a class="feature-btn" href="https://dev.vithu.org/contact-us">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="benefit-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Core features</span>
                <h2>Our Values</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item">
                        <i class="flaticon-house"></i>
                        <h3>Leading</h3>
                        <p>With oppressed and marginalized groups, future generations and partners.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item three">
                        <i class="flaticon-fast-food"></i>
                        <h3>Feeding</h3>
                        <p>Deduction of poverty of himself and re motivated of Sustainability income</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item two">
                        <i class="flaticon-hospital"></i>
                        <h3>Protect</h3>
                        <p>The leading groups should be gain proper skill from the Common life & Individual human rights
                            and democratic Government.

                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item four">
                        <i class="flaticon-graduation-cap"></i>
                        <h3>Participation</h3>
                        <p>Every participant will participate each activities, getting skill, positive cooperation and
                            ensuring rights of society.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="donations-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Causes to care</span>
                <h2>Be the reason of someone smiles</h2>
                <p>Help others by donating to their fundraiser, or start one for someone you care about.</p>
            </div>
                        <div class="row">
                                                        <div class="col-sm-6 col-lg-4">
                        <div class="donation-item">
                            <div class="top">
                                <a class="tags text-capitalize"
                                    href="https://dev.vithu.org/projects/ongoing">ongoing</a>
                                <h3>
                                    <a
                                        href="https://dev.vithu.org/project/marappalam-pre-school">Marappalam Pre-School</a>
                                </h3>
                                <p></p>
                            </div>
                            <div class="img">
                                <img src="https://dev.vithu.org/storage/uploads/small/2023/09/download_7f3.webp" alt="Donation">
                                <a class="common-btn" href="https://dev.vithu.org/project/marappalam-pre-school">Read
                                    More</a>
                            </div>
                            <div class="inner">
                                <div class="bottom">
                                    <div class="skill">
                                        <div class="skill-bar skill1 wow fadeInLeftBig">
                                            <span class="skill-count1">85%</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Raised: £0.00</li>
                                        <li>Goal: £</li>
                                    </ul>
                                    <h4>Donated by <span>60 people</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                                                        <div class="col-sm-6 col-lg-4">
                        <div class="donation-item">
                            <div class="top">
                                <a class="tags text-capitalize"
                                    href="https://dev.vithu.org/projects/ongoing">ongoing</a>
                                <h3>
                                    <a
                                        href="https://dev.vithu.org/project/karadiyanaru-pre-school">Karadiyanaru Pre-School</a>
                                </h3>
                                <p></p>
                            </div>
                            <div class="img">
                                <img src="https://dev.vithu.org/storage/uploads/small/2023/09/download (1)_6ac.webp" alt="Donation">
                                <a class="common-btn" href="https://dev.vithu.org/project/karadiyanaru-pre-school">Read
                                    More</a>
                            </div>
                            <div class="inner">
                                <div class="bottom">
                                    <div class="skill">
                                        <div class="skill-bar skill1 wow fadeInLeftBig">
                                            <span class="skill-count1">85%</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Raised: £0.00</li>
                                        <li>Goal: £</li>
                                    </ul>
                                    <h4>Donated by <span>60 people</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                                                        <div class="col-sm-6 col-lg-4">
                        <div class="donation-item">
                            <div class="top">
                                <a class="tags text-capitalize"
                                    href="https://dev.vithu.org/projects/ongoing">ongoing</a>
                                <h3>
                                    <a
                                        href="https://dev.vithu.org/project/karadiyanaru-school-ndash-after-school-program">Karadiyanaru School – After School Program</a>
                                </h3>
                                <p></p>
                            </div>
                            <div class="img">
                                <img src="https://dev.vithu.org/storage/uploads/small/2023/09/download (2)_30c.webp" alt="Donation">
                                <a class="common-btn" href="https://dev.vithu.org/project/karadiyanaru-school-ndash-after-school-program">Read
                                    More</a>
                            </div>
                            <div class="inner">
                                <div class="bottom">
                                    <div class="skill">
                                        <div class="skill-bar skill1 wow fadeInLeftBig">
                                            <span class="skill-count1">85%</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Raised: £0.00</li>
                                        <li>Goal: £</li>
                                    </ul>
                                    <h4>Donated by <span>60 people</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>

        </div>
    </section>


    <section class="event-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our events</span>
                <h2>Upcoming events near you</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                                                                        <div class="event-item">
                                <img src="https://dev.vithu.org/storage/uploads/small/2023/09/Sing-language-CD-relise-23r-dec-2021-40_3f6.webp" alt="Event">
                                <div class="inner">
                                    <h4>29 <span>Jan</span></h4>
                                    <h3>
                                        <a href="https://dev.vithu.org/blog/17%E0%AE%B5%E0%AE%A4%E0%AF%81-%E0%AE%86%E0%AE%A3%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%A8%E0%AE%BF%E0%AE%B1%E0%AF%88%E0%AE%B5%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-%E0%AE%9A%E0%AF%88%E0%AE%95%E0%AF%88-%E0%AE%AE%E0%AF%8A%E0%AE%B4%E0%AE%BF-%E0%AE%95%E0%AE%BE%E0%AE%A3%E0%AF%8A%E0%AE%B3%E0%AE%BF-%E0%AE%B5%E0%AF%86%E0%AE%B3%E0%AE%BF%E0%AE%AF%E0%AF%80%E0%AE%9F%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-2021">17வது ஆண்டு நிறைவு விழாவும் சைகை மொழி காணொளி வெளியீட்டு விழாவும் 2021</a>
                                    </h3>
                                    <ul>
                                        
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            <span>LK</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                    
                </div>
                <div class="col-lg-6">
                                        
                                                            <div class="event-item-right">
                        <h4>16 <span>Jan</span></h4>
                        <h3>
                            <a href="https://dev.vithu.org/blog/blood-donation-camp-ahead-of-vtf-17th-anniversary">Blood Donation Camp ahead of VTF 17th Anniversary</a>
                        </h3>
                        <ul>
                            
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Lk</span>
                            </li>
                        </ul>
                    </div>
                    
                                                            <div class="event-item-right">
                        <h4>12 <span>May</span></h4>
                        <h3>
                            <a href="https://dev.vithu.org/blog/yoga-children-awards-giving-and-blood-donation">Yoga, Children Awards Giving And Blood Donation</a>
                        </h3>
                        <ul>
                            
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Lk</span>
                            </li>
                        </ul>
                    </div>
                    
                                                            <div class="event-item-right">
                        <h4>20 <span>Dec</span></h4>
                        <h3>
                            <a href="https://dev.vithu.org/blog/nalinaka-puram-pillai-nila-preschool">Nalinaka Puram Pillai Nila Preschool</a>
                        </h3>
                        <ul>
                            
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Lk</span>
                            </li>
                        </ul>
                    </div>
                    
                                        
                                        
                                        
                                        
                                    </div>
            </div>
        </div>
    </section>


    <div class="counter-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-index"></i>
                        <h3>
                            <span class="odometer" data-count="550">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Children we educated</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-event"></i>
                        <h3>
                            <span class="odometer" data-count="1200">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Shelters we built</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-charity"></i>
                        <h3>
                            <span class="odometer" data-count="900">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Children we supported</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-helping-hand"></i>
                        <h3>
                            <span class="odometer" data-count="1900">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Elders - We take care of</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="work-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-content">
                        <div class="section-title">
                            <span class="sub-title">How we work</span>
                            <h2>We exist for non-profits, social enterprises, community groups</h2>
                        </div>
                        <ul>
                            <li>
                                <h3><span>01</span>Raise money from different sources</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                    animi temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>02</span>Giving relief in rural area all over the world</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                    animi temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>03</span>Gather all the money and giving relief in need</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                    animi temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>04</span>Go to the country that really needs help</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                    animi temporibus iusto at dolorum</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-img">
                        <img src="https://dev.vithu.org/assets/front/img/work/work2.jpeg" alt="Work">
                        <img src="https://dev.vithu.org/assets/front/img/work/work1.jpeg" alt="Work">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-area two pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="sub-title">Our gallery</span>
                <h2>Discover the best things we do</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="gallery-slider owl-theme owl-carousel">
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery1.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery1.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery2.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery2.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery3.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery3.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery4.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery4.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery5.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery5.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="https://dev.vithu.org/assets/front/img/gallery/gallery6.jpg" data-lightbox="roadtrip">
                        <img src="https://dev.vithu.org/assets/front/img/gallery/gallery6.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>Review from our clients</h2>
            </div>
            <div class="testimonial-slider owl-theme owl-carousel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="https://dev.vithu.org/assets/front/img/testimonial/testimonial1.jpg"
                                alt="Testimonial">
                            <h3>Jac Jacson</h3>
                            <span>CEO & Abanda</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p> "I have a dream that my four little children will one day live in a nation where they
                                will not be judged by the color of their skin, but by the content of their character."
                            </p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="https://dev.vithu.org/assets/front/img/testimonial/testimonial2.jpg"
                                alt="Testimonial">
                            <h3>Tom Henry</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>
                                "Education is the most powerful weapon which you can use to change the world." </p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <section class="blog-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest news & blog</span>
                <h2>Latest charity blog</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">

                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/17%E0%AE%B5%E0%AE%A4%E0%AF%81-%E0%AE%86%E0%AE%A3%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%A8%E0%AE%BF%E0%AE%B1%E0%AF%88%E0%AE%B5%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-%E0%AE%9A%E0%AF%88%E0%AE%95%E0%AF%88-%E0%AE%AE%E0%AF%8A%E0%AE%B4%E0%AE%BF-%E0%AE%95%E0%AE%BE%E0%AE%A3%E0%AF%8A%E0%AE%B3%E0%AE%BF-%E0%AE%B5%E0%AF%86%E0%AE%B3%E0%AE%BF%E0%AE%AF%E0%AF%80%E0%AE%9F%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-2021">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/Sing-language-CD-relise-23r-dec-2021-40_3f6.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>29 Jan 2022</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/17%E0%AE%B5%E0%AE%A4%E0%AF%81-%E0%AE%86%E0%AE%A3%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%A8%E0%AE%BF%E0%AE%B1%E0%AF%88%E0%AE%B5%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-%E0%AE%9A%E0%AF%88%E0%AE%95%E0%AF%88-%E0%AE%AE%E0%AF%8A%E0%AE%B4%E0%AE%BF-%E0%AE%95%E0%AE%BE%E0%AE%A3%E0%AF%8A%E0%AE%B3%E0%AE%BF-%E0%AE%B5%E0%AF%86%E0%AE%B3%E0%AE%BF%E0%AE%AF%E0%AF%80%E0%AE%9F%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-2021">17வது ஆண்டு நிறைவு விழாவும் சைகை மொழி காணொளி வெளியீட்டு விழாவும் 2021</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/17%E0%AE%B5%E0%AE%A4%E0%AF%81-%E0%AE%86%E0%AE%A3%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%A8%E0%AE%BF%E0%AE%B1%E0%AF%88%E0%AE%B5%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-%E0%AE%9A%E0%AF%88%E0%AE%95%E0%AF%88-%E0%AE%AE%E0%AF%8A%E0%AE%B4%E0%AE%BF-%E0%AE%95%E0%AE%BE%E0%AE%A3%E0%AF%8A%E0%AE%B3%E0%AE%BF-%E0%AE%B5%E0%AF%86%E0%AE%B3%E0%AE%BF%E0%AE%AF%E0%AF%80%E0%AE%9F%E0%AF%8D%E0%AE%9F%E0%AF%81-%E0%AE%B5%E0%AE%BF%E0%AE%B4%E0%AE%BE%E0%AE%B5%E0%AF%81%E0%AE%AE%E0%AF%8D-2021">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/blood-donation-camp-ahead-of-vtf-17th-anniversary">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/blood-donation-vithu-trust-fund-2021-17_558.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>16 Jan 2022</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/blood-donation-camp-ahead-of-vtf-17th-anniversary">Blood Donation Camp ahead of VTF 17th Anniversary</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/blood-donation-camp-ahead-of-vtf-17th-anniversary">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/yoga-children-awards-giving-and-blood-donation">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/yoga_f51.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>12 May 2021</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/yoga-children-awards-giving-and-blood-donation">Yoga, Children Awards Giving And Blood Donation</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/yoga-children-awards-giving-and-blood-donation">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/nalinaka-puram-pillai-nila-preschool">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/Pillai-Nila-Preschool_bba.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>20 Dec 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/nalinaka-puram-pillai-nila-preschool">Nalinaka Puram Pillai Nila Preschool</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/nalinaka-puram-pillai-nila-preschool">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/pillai-nila-pre-school-farewell-and-road-signboard-opening">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/pillai-nila_592.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>20 Nov 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/pillai-nila-pre-school-farewell-and-road-signboard-opening">Pillai Nila Pre-School Farewell and Road Signboard Opening</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/pillai-nila-pre-school-farewell-and-road-signboard-opening">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/vithu-trust-fund-donated-books-to-jaffna-public-library">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/VTF-handover-books-to-jaffna-public-library_1bd.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>12 Feb 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/vithu-trust-fund-donated-books-to-jaffna-public-library">Vithu Trust Fund donated Books to Jaffna Public Library</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/vithu-trust-fund-donated-books-to-jaffna-public-library">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/braille-books-and-the-handing-over-of-perur-aadeenam-to-the-vithu-trust-fund">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/Braille-Books-and-the-Handing-over-of-Perur-Aadeenam-to-the-Vithu-Trust-Fund-1-vijitha (1)_838.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>07 Feb 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/braille-books-and-the-handing-over-of-perur-aadeenam-to-the-vithu-trust-fund">Braille Books and the Handing over of Perur Aadeenam to the Vithu Trust Fund</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/braille-books-and-the-handing-over-of-perur-aadeenam-to-the-vithu-trust-fund">Read More</a>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <div class="top">
                                <a href="https://dev.vithu.org/blog/honour-award-function">
                                    <img src="https://dev.vithu.org/storage/uploads/small/2023/09/award_c6f.webp" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>18 Jan 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-3"></i>
                                        <span>By:</span>
                                        <a href="#">Loncey Tech</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="https://dev.vithu.org/blog/honour-award-function">Honour Award Function</a>
                                </h3>
                                <p></p>
                                <a class="blog-btn" href="https://dev.vithu.org/blog/honour-award-function">Read More</a>
                            </div>
                        </div>
                    </div>
                

            </div>
        </div>
    </section>
</main>



<!-- Livewire Component wire-end:es1wN29HBrS0VyefMVZ5 -->
{{-- <footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="https://dev.vithu.org">
                            <img src="https://dev.vithu.org/assets/front/img/footer-logo.png" alt="Logo">
                        </a>
                        <p>Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of
                            children in Sri Lanka and raises voice for the needy.
                        </p>
                        <b>Registered Charity:</b>
                        <p class="links">England And Wales
                            <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview"
                                target="_blank" rel="noopener noreferrer">1107418</a>
                            <br>
                            Sri Lanka
                            <a href="http://www.ngosecretariat.gov.lk/index.php?option=com_content&amp;view=featured&amp;Itemid=101"
                                target="_blank" rel="noopener noreferrer">878</a>
                            <br>
                            Switzerland
                            <a href="https://www.stadt-kriens.ch/dienstleistungen/vereine/vereine-detail.page/968/association/664"
                                target="_blank" rel="noopener noreferrer">Verein</a>
                        </p>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/vithutrustfund" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vithutrustfund" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCqWcfwkS8hLV3A5rdu22cDw/videos?disable_polymer=1"
                                    target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vithutrustfund/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Get Started</h3>
                        <ul>
                            <li>
                                <a href="https://dev.vithu.org">
                                    <i class="icofont-simple-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/about/about-us">
                                    <i class="icofont-simple-right"></i>
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/projects">
                                    <i class="icofont-simple-right"></i>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/contact-us">
                                    <i class="icofont-simple-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/donation">
                                    <i class="icofont-simple-right"></i>
                                    Donate Now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="https://dev.vithu.org/about/about-our-logo">
                                    <i class="icofont-simple-right"></i>
                                    About our logo
                                </a>
                            </li>

                            <li>
                                <a href="https://dev.vithu.org/about/history">
                                    <i class="icofont-simple-right"></i>
                                    Our History
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/donation">
                                    <i class="icofont-simple-right"></i>
                                    Donate Now
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/about/our-journery">
                                    <i class="icofont-simple-right"></i>
                                    Our Journey
                                </a>
                            </li>
                            <li>
                                <a href="https://dev.vithu.org/about/awards">
                                    <i class="icofont-simple-right"></i>
                                    Awards
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Why This Logo?</h3>
                        <div class="logo">
                          <a href="https://dev.vithu.org/about/about-our-logo"><img src="https://dev.vithu.org/assets/front/img/vithu-logo.jpg" alt="Vithu Trust Fund"></a>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-details">
            <span class="copyright">
                Copyright @
                <script>
                    document.write(new Date().getFullYear())
                </script> Vithu Trust Fund.
            </span>
            <span class="credits">
                <a href="https://lonceytech.com/" target="_blank">Designed &
                    Developed by : Loncey Tech</a>
            </span>

        </div>


    </div>
</footer> --}}


{{-- <div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>


<script src="https://dev.vithu.org/assets/front/js/jquery.min.js"></script>
<script src="https://dev.vithu.org/assets/front/js/bootstrap.bundle.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/form-validator.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/contact-form-script.js"></script>

<script src="https://dev.vithu.org/assets/front/js/jquery.ajaxchimp.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/jquery.meanmenu.js"></script>

<script src="https://dev.vithu.org/assets/front/js/jquery-modal-video.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/wow.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/lightbox.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/owl.carousel.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/odometer.min.js"></script>
<script src="https://dev.vithu.org/assets/front/js/jquery.appear.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/jquery.nice-select.min.js"></script>

<script src="https://dev.vithu.org/assets/front/js/custom.js"></script>
</body>

</html> --}}
@endsection