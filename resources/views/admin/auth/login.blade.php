<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('template/admin/assets/images/brand/logo.png') }}" type="image/x-icon">
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
        <div class="m-t-30"><img src="{{ asset('template/admin/assets/images/brand/logo.png') }}" width="48" height="48" alt="ArrOwlite"></div>
        <p>Mohon Tunggu...</p>
    </div>
</div>

<div class="vh100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mb-0">
                    <div class="card-body">
                        <span class="clearfix"></span>
                        <center><img src="{{ asset('template/admin/assets/images/brand/logo.png') }}" alt="" style="width: 70px;"></center>
                        <h4 class="heading h3 pt-3 pb-5">Selamat Datang Kembali,<br> di Halaman Login Admin.</h4>
                        <form class="form-primary" method="post" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" id="input_email" placeholder="Email Pengguna" value="{{ old('email') }}" name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" id="input_password" placeholder="Kata Sandi" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-right mt-4"><a href="{{ url('/admin/password/reset') }}" class="text-muted">Lupa Password?</a></div>
                            <button type="submit" class="btn btn-block btn-primary btn-lg mt-4">Masuk <i class="fa fa-sign-in ml-2"></i></button>
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