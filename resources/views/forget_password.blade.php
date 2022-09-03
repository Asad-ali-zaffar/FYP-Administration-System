<!DOCTYPE html>
<html lang="en">
<head>
	<title>FYP Adminstration System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('res/indexpage/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="res/indexpage/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{$url}}">

                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{Session::get('fail')}}</div>
                    @endif
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}</div>
                    @endif
                    @csrf
                    <span class="login100-form-title">
						{{$title}}
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

					{{-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> --}}

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send reset password link
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">

						</span>
						<a class="txt2" href="/">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('res/indexpage/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('res/indexpage/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('res/indexpage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('res/indexpage/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('res/indexpage/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('res/indexpage/js/main.js')}}"></script>

</body>
</html>
