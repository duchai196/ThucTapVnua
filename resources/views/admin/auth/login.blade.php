<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <title>Quản trị website</title>
    <!-- Bootstrap Core CSS -->
    <base href="{{asset('assets_admin')}}/">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">

@yield('css')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(./images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-block">
                <form class="form-horizontal form-material" id="loginform" action="{{route('login')}}" method="POST">
                    {!!csrf_field()!!}
                    <h3 class="box-title m-b-20">ĐĂNG NHẬP</h3>
                    @if(Session('message'))
                        <p class=" alert alert-danger">{!!Session('message')!!}</p>
                    @endif
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="Email" name="email"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password"
                                   name="password"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Ghi nhớ </label>
                            </div>
                            <a href="" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i>
                                Quên mật khẩu?</a></div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Đăng nhập
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook">
                                    <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google">
                                    <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Chưa có tài khoản? <a href="{{route('register')}}" class="text-info m-l-5"><b>Đăng ký</b></a>
                            </p>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Khôi phục tài khoản</h3>
                            <p class="text-muted">Nhập email chúng tôi sẽ gửi hướng dẫn! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"></div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="plugins/bootstrap/js/tether.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


@yield('script')


</body>

</html>
