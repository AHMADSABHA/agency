<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>@yield('page-title','page Title')</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        @stack('styles')

    </head>
    <body class="@yield('body-class','page-index')">
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== offcanvas-panel ======-->
        <div class="offcanvas-panel">
            <div class="panel-overlay"></div>
            <div class="offcanvas-panel-inner">
                <div class="panel-logo">
                    <a href="{{ route('multicreative.view') }}"><img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="Qempo"></a>
                </div>
                <div class="about-us">
                    <h5 class="panel-widget-title">About Us</h5>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsam alias quae cupiditate quas, neque eum magni impedit asperiores.
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="panel-widget-title">Contact Us</h5>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            121 King St, Melbourne VIC 3000, Australia.
                        </li>
                        <li>
                            <i class="fal fa-envelope-open"></i>
                            <a href="mailto:hello@barky.com"> hello@barky.com</a>
                            <a href="mailto:info@barky.com">info@barky.com</a>
                        </li>
                        <li>
                            <i class="fal fa-phone"></i>
                            <a href="tel:(312)-895-9800">(312) 895-9800</a>
                            <a href="tel:(312)-895-9888">(312) 895-9888</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
            </div>
        </div><!--====== offcanvas-panel ======-->
    
        @include('website-layout.header')

        

        
        <main id="main"> 

            @yield('main-content')
            {{-- @yield('website-shared.Start-Page-banner') --}}
        
        </main><!-- End #main -->

        @include('website-layout.footer')

        
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/vendor/jquery-3.6.0.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('assets/vendor/isotope.min.js') }}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('assets/vendor/imagesloaded.min.js') }}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('assets/vendor/jquery.counterup.min.js') }}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('assets/vendor/jquery.waypoints.js') }}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('assets/vendor/wow.min.js') }}"></script>
        <!--====== Parallax js ======-->
        <script src="{{ asset('assets/vendor/parallax.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('assets/js/theme.js') }}"></script>

        @stack('scripts')

    </body>
</html>