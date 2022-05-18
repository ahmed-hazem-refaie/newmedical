<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-3 | randerc </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- modernizr css -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

    @include('includes.shared.header')

    @yield('content')

    @include('includes.shared.footer')
    <!-- all js here -->

    <!-- jquery latest version -->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Counter js -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- waypoint js -->
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <!-- magnific js -->
    <script src="{{asset('assets/js/magnific.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- venobox js -->
    <script src="{{asset('assets/js/venobox.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <!-- Form validator js -->
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
    <script src="{{asset('assets/js/mapcode.js')}}"></script>
</body>

</html>