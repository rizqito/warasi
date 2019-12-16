<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bootstrap 4 admin template with Flat design pre-built apps and pages">
<meta name="keywords" content="admin, admin theme, backend, bootstrap, bootstrap 4, bootstrap admin, clean, dashboard, modern, premium admin templates, responsive, sass">
<meta name="author" content="thememakker.com">
<link rel="icon" href="favicon.html" type="image/x-icon">
<title>Login Admin Warasi</title>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/fontawesome/css/font-awesome.min.css') }}">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('template/admin/assets/css/main.css') }}" type="text/css">

<!-- Demo CSS - No need to use these in your project -->
<link rel="stylesheet" href="{{ asset('template/admin/assets/css/demo.css') }}">
</head>
<body class="theme-blue auth-page">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('template/admin/assets/images/brand/icon.svg') }}" width="48" height="48" alt="ArrOwlite"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="vh100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <a href="../index-2.html" title="Back" class="btn btn-nobg btn-nob"><i class="fa fa-arrow-left"></i></a>
                            <a href="sign-up.html" title="Back" class="btn btn-nobg btn-nob">Sign Up</a>
                        </div>                        
                        <span class="clearfix"></span>
                        <img src="../assets/images/brand/icon.svg" alt="" style="width: 50px;">
                        <h4 class="heading h3 pt-3 pb-5">Welcome back,<br> login to your account.</h4>
                        <form class="form-primary" method="post" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" id="input_email" placeholder="Your email" value="{{ old('email') }}" name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" id="input_password" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-right mt-4"><a href="{{ url('/admin/password/reset') }}" class="text-muted">Forgot password?</a></div>
                            <button type="submit" class="btn btn-block btn-lg mt-4">Masuk <i class="fa fa-sign-in ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core -->
<script src="{{ asset('template/admin/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('template/admin/assets/bundles/vendorscripts.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('template/admin/assets/js/theme.js') }}"></script>
</body>
</html>