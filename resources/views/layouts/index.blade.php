<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - @yield('title', 'One')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/images/favicon.ico')}}" />
    <!-- CSS
    ============================================ -->
    @yield('style.before')
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/font.awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="{{asset('/assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.min.css')}}"> -->
    @yield('style.after')
</head>

<body>
    @yield('body')

    @yield('modal')

    @yield('script.before')

    @section('script')
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="{{asset('/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/scrollUp.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/mailchimp-ajax.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/js.cookie.min.js')}}"></script>

    <!-- Minify Version -->
    <!-- <script src="{{asset('/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('/assets/js/main.min.js')}}"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('/assets/js/main.js')}}"></script>
    @show

    @yield('script.after')
</body>

</html>