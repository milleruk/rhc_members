<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{ asset('css/fonts.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/azzara.min.css') }}">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
            <form method="POST" action="{{ route('login') }}">
            <h3 class="text-center">Sign In To {{ config('app.name') }}</h3>
            @error('email')
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ $message }}
                </div>
            @enderror
            @error('password')
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ $message }}
                </div>
            @enderror
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input name="email" type="text" class="form-control input-lg" @error('email')
                                    is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus />
					<label for="username" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input name="password" type="password" class="form-control input-lg" @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" />
					<label for="password" class="placeholder">Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label" for="rememberme">Remember Me</label>
					</div>

					<a href="#" class="link float-right">Forget Password ?</a>
				</div>
				<div class="form-action mb-3">@csrf
                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
				</div>
				<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div>
			</div>
		</div>
    </form>
		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input  id="fullname" name="fullname" type="text" class="form-control input-border-bottom" required>
					<label for="fullname" class="placeholder">Fullname</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="passwordsignin" name="passwordsignin" type="password" class="form-control input-border-bottom" required>
					<label for="passwordsignin" class="placeholder">Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="form-group form-floating-label">
					<input  id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required>
					<label for="confirmpassword" class="placeholder">Confirm Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="form-action">
					<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
					<a href="#" class="btn btn-primary btn-rounded btn-login">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/core/popper.min.js') }}"></script>
	<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/ready.js') }}"></script>
</body>
</html>
