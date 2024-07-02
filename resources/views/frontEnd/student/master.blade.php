<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduVibe - Education HTML Template Using Bootstrap 5</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/eduvibe-font.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/magnifypopup.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/odometer.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/lightbox.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/animation.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/style.css">
</head>

<body>
<div class="main-wrapper">
    @include("frontEnd.student.include.header")
    @yield('studentContent')

    <!-- Start Footer Area  -->
    @include("frontEnd.student.include.footer")
    <!-- End Footer Area  -->
</div>
<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>




<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('frontEnd')}}/assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="{{asset('frontEnd')}}/assets/js/vendor/jquery.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/bootstrap.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/sal.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/backtotop.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/magnifypopup.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/slick.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/countdown.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/jquery-appear.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/odometer.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/isotop.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/imageloaded.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/lightbox.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/wow.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/paralax.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/paralax-scroll.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/jquery-ui.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/vendor/tilt.jquery.min.js"></script>
<!-- Main JS -->
<script src="{{asset('frontEnd')}}/assets/js/main.js"></script>
</body>


</html>
