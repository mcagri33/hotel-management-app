<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Royalking Hotel & Resort HTML Template</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/site/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/style.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('assets/site/css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{asset('assets/site/css/color.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/site/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/site/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

   @include('site.layouts.header')

     @yield('content')

    @include('site.layouts.footer')

</div>

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

<script src="{{asset('assets/site/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/site/js/isotope.js')}}"></script>
<script src="{{asset('assets/site/js/appear.js')}}"></script>
<script src="{{asset('assets/site/js/wow.js')}}"></script>
<script src="{{asset('assets/site/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/site/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/site/js/parallax-scroll.js')}}"></script>
<script src="{{asset('assets/site/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('assets/site/js/booking-form.js')}}"></script>
<script src="{{asset('assets/site/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/site/js/script.js')}}"></script>


</body>
</html>













