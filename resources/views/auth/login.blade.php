<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/login_simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Mar 2018 05:10:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan</title>

    <!-- Global stylesheets -->
    <link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/core/app.js"></script>

    <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-indigo">
        <div class="navbar-header"> 
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo_light.png" alt="">
            </a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li>
                    <a data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="icon-tree5"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300">
                                    <i class="icon-reading"></i>
                                </div>
                                <h5 class="content-group">Login to your account
                                    <small class="display-block">Enter your credentials below</small>
                                </h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                {{ __('E-Mail Address') }}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-control-feedback">
                                    <i class="icon-email text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                            {{ __('Password') }}
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="form-control-feedback">
                                </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block">{{ __('Login') }}
                                    <i class="icon-circle-right2 position-right"></i>
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                            </div>


                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2022.
                        <a href="https://blogbugabagi.blogspot.com">Stone Depot</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <script type="text/javascript">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/login_simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Mar 2018 05:10:05 GMT -->

</html>
