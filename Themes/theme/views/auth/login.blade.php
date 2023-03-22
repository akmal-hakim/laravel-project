<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginRegister/image/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginRegister/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

                {{ Form::open(array('url' => '/login', 'method' => 'POST', 'name'=>"registrationForm", 'class'=>"login100-form validate-form p-l-55 p-r-55 p-t-178")) }}

                    <span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						{{ Form::email('email', $value = null , $attributes = array('class'=>'input100', 'placeholder' => 'Email' ,'required'=> 'true', )) }}
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<!-- WE DON'T NEED THE NULL $VALUE -->
                        {{ Form::password('password', $attributes = array('class'=>'input100', 'placeholder' => 'Password',  'required'=> 'true', )) }}
                        <span class="focus-input100"></span>
					</div>

                    @if($errors->any())
                            <p style="color:red;">{{$errors->first()}}</p>
                    @endif

                    <div class="container-login100-form-btn">
						<button id="submit" type="submit" class="login100-form-btn">Login</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="{{URL_REGISTER}}" class="txt3">
							Register Now!
						</a>
					</div>

                {{ Form::close() }}

                <!--
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Login
					</span>
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>
                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
                -->
			</div>
		</div>
	</div>
</body>
</html>
