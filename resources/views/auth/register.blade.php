@extends('layouts.app')
@section('content')

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
					{{ __('Register') }}
					</span>
				</div>

				<form method = "POST" class="login100-form validate-form" action="{{ route('register') }}">
					    @csrf
              <div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">{{__('Name')}} </span>
    						<input class="input100" value="{{ old('name') }}" type="text" name="name">
    						<span class="focus-input100"></span>
    						@if ($errors->has('name'))
    							<div class="alert-validate" data-validate = "{{ $errors->first('name') }}"></div>
    						@endif
    					</div>

						<div class="wrap-input100 validate-input m-b-26">
							<span class="label-input100">{{ __('E-Mail Address')}}</span>
							<input class="input100" value="{{ old('email') }}" type="text" name="email">
							<span class="focus-input100"></span>
							@if ($errors->has('email'))
						   	<div class="alert-validate" data-validate = "{{ $errors->first('email') }}"></div>
							@endif
						</div>

					<div class=" wrap-input100 validate-input m-b-18">
						<span for="password" class="label-input100">{{ __('Password') }}</span>
						<input id="password" class="input100" value="" name="password" type="password" >
						<span class="focus-input100"></span>
						@if ($errors->has('password'))
							<div class="alert-validate" data-validate = "{{ $errors->first('password') }}"></div>
						@endif
					</div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">{{ __('Confirm Password') }}</span>
            <input  class="input100" id="password-confirm" type="password" name="password_confirmation" required>
						<span class="focus-input100"></span>
          </div>

					<div class="flex-sb-m w-full p-b-30"></div>
					<div class="container-login100-form-btn ">
						<button type="submit" class="login100-form-btn">{{ __('Register') }}</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

@endsection
