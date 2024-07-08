
<!doctype html>
<html class="no-js" lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>@yield('title','Restaurant store-name') | Restaurant store-name</title>
    <meta name="description" content="Restaurant store-name – the heart of authentic Indian and Halal cuisine in the beautiful city of Lausanne. Our restaurant is named after store-name, a city known for its rich cultural heritage and culinary traditions."/>
    <meta name="keywords" content="indian halal restaurant, indian restarant"/>
    <meta name="author" content="store-name.ch"/>

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Restaurant store-name"/>
    <meta property="og:url" content="http://store-name.ch"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Restaurant store-name"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ secure_asset('assets/img/logo2.png') }}"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" media="all"/>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/fontawesome/css/font-awesome.min.css') }}" media="all"/>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/maginificpopup/magnific-popup.css') }}" media="all"/>
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/owlcarousel/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/owlcarousel/owl.theme.default.min.css') }}" media="all" />
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900%7cRaleway:300,400,400i,500,600,700,900"/>
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/animate/animate.css') }}" media="all" />

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ secure_asset('assets/libs/datepicker/bootstrap-datetimepicker.min.css') }}" media="all"/>
    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{ secure_asset('assets/css/style-default.min.css') }}" media="all"/>
    <!-- MODERNIZER CSS  -->
    <script src="{{ secure_asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!--Custonstyele-->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/custom-css.css')}}">
</head>

<body class="home">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<div class="lgx-container ">
    @include('inc.header')
        @yield('content')
    @include('inc.footer')
</div>
<!--//.LGX SITE CONTAINER-->
@push('js')
<!-- JQUERY  -->
<script src="{{ secure_asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!-- BOOTSTRAP JS  -->
<script src="{{ secure_asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('assets/libs/jquery.smooth-scroll.js') }}"></script>

<!-- SKILLS SCRIPT  -->
<script src="{{ secure_asset('assets/libs/jquery.validate.js') }}"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="{{ secure_asset('assets/libs/maginificpopup/jquery.magnific-popup.min.js') }}"></script>

<!-- Owl Carousel  -->
<script src="{{ secure_asset('assets/libs/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- bootstrap date picker js with moment js -->
<script src="{{ secure_asset('assets/libs/datepicker/moment-with-locales.min.js') }}"></script>
<script src="{{ secure_asset('assets/libs/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Counter JS -->
<script src="{{ secure_asset('assets/libs/waypoints.min.js') }}"></script>
<script src="{{ secure_asset('assets/libs/counterup/jquery.counterup.min.js') }}"></script>

<!-- MENU FILTER   -->
<script src="{{ secure_asset('assets/libs/isotope/isotope.pkgd.min.js') }}"></script>

<!-- SMOTH SCROLL -->
<script src="{{ secure_asset('assets/libs/jquery.smooth-scroll.min.js') }}"></script>
<script src="{{ secure_asset('assets/libs/jquery.easing.min.js') }}"></script>

<!-- type js -->
<script src="{{ secure_asset('assets/libs/typed/typed.min.js') }}"></script>

<!-- Sticky Sidebar js -->
<script src="{{ secure_asset('assets/libs/stickysidebar/theia-sticky-sidebar.min.js') }}"></script>

<!-- CUSTOM SCRIPT  -->
<script src="{{ secure_asset('assets/js/custom.script.js') }}"></script>

<!--Google Translate Language -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
