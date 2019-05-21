

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login BetterLife</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->

<!--===============================================================================================-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/banner.jpg);">
					<span class="login100-form-title-1">
						Ingresar
					</span>
				</div>

				<form method = "POST" class="login100-form validate-form" action="{{ route('login') }}">
					    @csrf
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" value="{{ old('email') }}" type="text" name="email">
						<span class="focus-input100"></span>
						@if ($errors->has('email'))
						<div class="alert-validate" data-validate = "{{ $errors->first('email') }}"></div>
						@endif
					</div>

					<div class=" wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<input class="input100" value="{{ old('password') }}" name="password" type="password" >
						<span class="focus-input100"></span>
						@if ($errors->has('password'))
						<div class="alert-validate" data-validate = "{{ $errors->first('password') }}"></div>
						@endif
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="label-checkbox100" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>

						<div>
								@if (Route::has('password.request'))
								<a class="txt1" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
							@endif

						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>

				</form>
			</div>
		</div>
	</div>

</body>
</html>
