{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--        <meta name="description" content="">--}}
{{--        <meta name="author" content="">--}}

{{--        <link rel="icon" href="{{ asset('panel/assets/images/favicon.png') }}" >--}}
{{--        <!--Page title-->--}}
{{--        <title>Admin easy Learning</title>--}}
{{--        <!--bootstrap-->--}}
{{--        <link rel="stylesheet" href="{{ asset('panel/assets/css/bootstrap.min.css') }}">--}}
{{--        <!--font awesome-->--}}
{{--        <link rel="stylesheet" href="{{ asset('panel/assets/css/all.min.css') }}">--}}
{{--        <!-- metis menu -->--}}
{{--        <link rel="stylesheet" href="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">--}}
{{--        <!-- chart -->--}}

{{--        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->--}}
{{--        <!--Custom CSS-->--}}
{{--        <link rel="stylesheet" href="{{ asset('panel/assets/css/style.css') }}">--}}
{{--    </head>--}}
{{--    <body id="page-top">--}}
{{--        <!-- preloader -->--}}
{{--        <div class="preloader">--}}
{{--            <img src="{{ asset('panel/assets/images/preloader.gif') }}" alt="">--}}
{{--        </div>--}}


{{--        <!-- wrapper -->--}}
{{--          <div class="wrapper without_header_sidebar">--}}
{{--            <!-- contnet wrapper -->--}}
{{--            <div class="content_wrapper">--}}
{{--                    <!-- page content -->--}}
{{--                    <div class="login_page center_container">--}}
{{--                        <div class="center_content">--}}
{{--                            <div class="logo">--}}
{{--  <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid">--}}
{{--                            </div>--}}




        @if(Session::has('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> {{ session::get('error') }} </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif





{{--   <form action="{{ route('admin.login') }}" class="d-block" method="post">--}}
{{--       <form action="" class="d-block" method="post">--}}
{{--    @csrf--}}

{{--      <div class="form-group icon_parent">--}}
{{--         <label for="password">Email</label>--}}
{{--         <input  type="email" class="form-control"  name="email" placeholder="Email Address">--}}
{{--              <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>--}}

{{--                                </div>--}}
{{--                                <div class="form-group icon_parent">--}}
{{--                                    <label for="password">Password</label>--}}
{{--       <input type="password" class="form-control" name="password"   placeholder="Password">--}}

{{--                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="chech_container">Remember me--}}
{{--                                        <input type="checkbox" name="remember" id="remember" >--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}

{{--       <a class="registration" href="">Create new account</a><br>--}}
{{--                                    <a class="registration" href="{{ route('admin.register') }}">Create new account</a><br>--}}
{{--                                    <a href=" " class="text-white">I forgot my password</a>--}}

{{--    <button type="submit" class="btn btn-blue">Login</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}


{{--                            <div class="footer">--}}
{{--                               <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--            </div><!--/ content wrapper -->--}}
{{--        </div><!--/ wrapper -->--}}



{{--        <!-- jquery -->--}}
{{--        <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>--}}
{{--        <!-- popper Min Js -->--}}
{{--        <script src="{{ asset('panel/assets/js/popper.min.js') }}"></script>--}}
{{--        <!-- Bootstrap Min Js -->--}}
{{--        <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>--}}
{{--        <!-- Fontawesome-->--}}
{{--        <script src="{{ asset('panel/assets/js/all.min.js') }}"></script>--}}
{{--        <!-- metis menu -->--}}
{{--        <script src="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>--}}
{{--        <script src="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>--}}
{{--        <!-- nice scroll bar -->--}}
{{--        <script src="{{ asset('panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>--}}
{{--        <script src="{{ asset('panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>--}}
{{--        <!-- counter -->--}}
{{--        <script src="{{ asset('panel/assets/plugins/counter/js/counter.js') }}"></script>--}}
{{--        <!-- chart -->--}}
{{--   <script src="{{ asset('panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>--}}
{{--        <script src="{{ asset('panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>--}}
{{--        <!-- pie chart -->--}}
{{--        <script src="{{ asset('panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>--}}
{{--        <script src="{{ asset('panel/assets/plugins/pie_chart/pie.active.js') }}"></script>--}}


{{--        <!-- Main js -->--}}
{{--        <script src="{{ asset('panel/assets/js/main.js') }}"></script>--}}





{{--    </body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('admin.login') }}" method="post">

                    @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('admin.register') }}" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
