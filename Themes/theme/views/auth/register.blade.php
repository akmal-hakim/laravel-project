<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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

                {{ Form::open(array('url' => '/register', 'method' => 'POST', 'name'=>"registrationForm", 'class'=>"login100-form validate-form p-l-55 p-r-55 p-t-178")) }}

                    <span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						{{ Form::text('name', $value = null , $attributes = array('class'=>'input100',  'required'=> 'true', 'placeholder' => 'Full Name', )) }}
						<span class="focus-input100"></span>
					</div>
                    @if($errors->any())
                            <p style="color:red;">{{$errors->first('name')}}</p>
                    @endif

					<div class="wrap-input100 validate-input m-b-16">
                        {{ Form::text('user_name', $value = null , $attributes = array('class'=>'input100',  'required'=> 'true', 'placeholder' => 'Username', )) }}
                        <span class="focus-input100"></span>
					</div>
                    @if($errors->any())
                            <p style="color:red;">{{$errors->first('user_name')}}</p>
                    @endif

                    <div class="wrap-input100 validate-input m-b-16">
                        {{ Form::text('phone', $value = null , $attributes = array('class'=>'input100','required'=> 'true', 'placeholder' => 'Phone Number', )) }}
                        <span class="focus-input100"></span>
					</div>
                    @if($errors->any())
                            <p style="color:red;">{{$errors->first('phone')}}</p>
                    @endif

                    <div class="wrap-input100 validate-input m-b-16">
                        {{ Form::email('email', $value = null , $attributes = array('class'=>'input100', 'required'=> 'true', 'placeholder' => 'Email', )) }}
                        <span class="focus-input100"></span>
					</div>
                    @if($errors->any())
                            <p style="color:red;">{{$errors->first('email')}}</p>
                    @endif

                    <div class="wrap-input100 validate-input m-b-16">
                        {{ Form::password('password', $attributes = array('class'=>'input100', 'placeholder' => 'Password',  'required'=> 'true', )) }}
                        <span class="focus-input100"></span>
					</div>
                    @if($errors->any())
                            <p style="color:red;">{{$errors->first('password')}}</p>
                    @endif

                    <div class="container-login100-form-btn">
						<button id="submit" type="submit" class="login100-form-btn">Register</button>
					</div>

					<div class="flex-col-c p-t-50 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="{{URL_LOGIN}}" class="txt3">
							Login Now!
						</a>
					</div>

                {{ Form::close() }}

			</div>
		</div>
	</div>
</body>
</html>
