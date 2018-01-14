<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="{{asset('/')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Hai Duc Nguyen">
    <meta name="description" content="Cửa hàng đồ dùng thể thao Hùng Hải Sport">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/owl.carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/fancyBox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>
    @yield('css')

    <title>Kute shop</title>
</head>
<body class="@yield('page')">

@include('frontend.elements.header')

@yield('content')
@include('frontend.elements.footer')


<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/select2/js/select2.min.js"></script>

<script type="text/javascript" src="assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>

{{--<script type="text/javascript" src="assets/lib/jquery.elevatezoom.js"></script>--}}
<script type="text/javascript" src="assets/js/theme-script.js"></script>
<script type="text/javascript" src="assets/lib/jquery-ui/jquery-ui.min.js"></script>

@yield('script')

</body>
</html>