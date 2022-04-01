<!DOCTYPE html>
<html lang="en">
    <head>
        <x-header />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="style/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->

            <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
            <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    
</head>
    <body >
        <!-- Navigation-->
        <x-navbar/>
        <!-- Page Header-->
        <div class="limiter" style="background-image: url('{{URL::asset('img/bg-01.jpg')}}');background-repeat: no-repeat;background-position: center;
        background-size: cover;">
		<div class="container-login100" style="height: 100%" >
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="{{url('/register')}}" method="POST">
					@csrf
                    <span class="login100-form-title p-b-53" style="padding: 0;">
						Sign In With
					</span>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							Full name
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="fullname" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Confirm Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="repassword" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							If you have an accout?
						</span>

						<a href="{{url('/login')}}" class="txt2 bo1">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{URL::asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{URL::asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{URL::asset('js/main.js')}}"></script>

        
    @includeIf('partials.scriptjs')
        
    </body>
</html>
