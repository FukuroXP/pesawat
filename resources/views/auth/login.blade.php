<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/login-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Mar 2021 00:05:58 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W24T6W7');</script>
    <!-- End Google Tag Manager -->
    <title>Logdy - Login and Register HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('login_assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('login_assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('login_assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('login_assets/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('login_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('login_assets/css/skins/default.css') }}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W24T6W7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 14 start -->
<div class="login-14">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 align-self-center">
                <div class="info">
                    <div class="btn-section clearfix">
                        <a href="/login" class="link-btn active btn-1 default-bg">Login</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">
                    <h3>Sign into your account</h3>
                    <div class="login-inner-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group form-box">
                                <input type="email" name="email" class="input-text @error('email') is-invalid @enderror" placeholder="Email Address">
                                <i class="flaticon-mail-2"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="password" class="input-text @error('password') is-invalid @enderror" placeholder="Password">
                                <i class="flaticon-password"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password</a>
                                @endif
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 14 end -->

<!-- External JS libraries -->
<script src="{{ asset('login_assets/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('login_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('login_assets/js/bootstrap.min.js') }}"></script>
<!-- Custom JS Script -->
</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/login-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Mar 2021 00:06:06 GMT -->
</html>
