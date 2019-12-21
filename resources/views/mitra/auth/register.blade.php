<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Sebagai Mitra</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('template/login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('template/login/images/bg-02.jpg') }}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width:500px;">
                <form class="login100-form validate-form" role="form" method="POST" action="{{ url('/mitra/register') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-49">
						Daftar Akun
					</span>

                    <div class="wrap-input100 validate-input m-b-23 {{ $errors->has('name') ? ' has-error' : '' }}" data-validate = "nama is required">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Nama Pengguna" value="{{ old('nama') }}" autofocus>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @if ($errors->has('nama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif

					<div class="wrap-input100 validate-input m-b-23 {{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email Pengguna" value="{{ old('email') }}" autofocus>
						<span class="focus-input100" data-symbol="&#xf15a;"></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input m-b-23 {{ $errors->has('no_telp') ? ' has-error' : '' }}" data-validate = "no telp is required">
						<span class="label-input100">No Telepon</span>
						<input class="input100" type="text" name="no_telp" placeholder="no_telp Pengguna" value="{{ old('no_telp') }}" autofocus>
						<span class="focus-input100" data-symbol="&#xf2be;"></span>
                    </div>
                    @if ($errors->has('no_telp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_telp') }}</strong>
                        </span>
                    @endif

					<div class="wrap-input100 validate-input m-b-23{{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Kata Sandi Pengguna">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input m-b-50{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" data-validate="konfirmasi password is required">
						<span class="label-input100">Konfirmasi Password</span>
						<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					@if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Daftar
							</button>
						</div>
					</div>

					<!-- <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> -->

					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Sudah punya akun ? <a href="{{ url('/mitra/login') }}" class="txt2"><b><u>Login</u></b></a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('template/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('template/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('template/login/js/main.js') }}"></script>

</body>
</html>