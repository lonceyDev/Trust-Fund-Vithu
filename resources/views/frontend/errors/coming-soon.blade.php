<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uduvil Girl's College</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>

<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        {{-- <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">Cancel Preloader</span>
        </div> --}}
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=     Comming Soon Area Start       =-->
        <!--=====================================-->
        <section class="coming-soon-page-area ">
            <div class="container">
                <div class="coming-soon-content">
                    <h1 class="title">Coming Soon</h1>
                    <div class="coming-countdown"></div>
                    <p> <a class="text-white mt-5" href="https://www.lonceytech.com/">Solution by : Loncey Tech (Pvt) Ltd</a> </p>
                    {{-- <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <button class="edu-btn btn-medium" type="button">Subscribe <i class="icon-4"></i></button>
                    </div> --}}
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene">
                    <img data-depth="2" src="assets/images/others/shape-22.png" alt="Shape">
                </li>
                <li class="shape-2 scene">
                    <img data-depth="-2" src="assets/images/others/shape-23.png" alt="Shape">
                </li>
                <li class="shape-3">
                    <img class="rotateit" src="assets/images/others/shape-24.png" alt="Shape">
                </li>
                <li class="shape-4"></li>
            </ul>
        </section>

    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

<!-- JS
============================================ -->

<!-- Jquery Js -->
<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/backtotop.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnifypopup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotop.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imageloaded.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/svg-inject.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/vivus.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tipped.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/smooth-scroll.min.js') }}"></script>

<!-- Site Scripts -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script type="text/javascript">
    $(".coming-countdown").countdown("2023/05/20", function(event) {});
  </script>
</body>

</html>
