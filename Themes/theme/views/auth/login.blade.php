<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('ioFolder/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ioFolder/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ioFolder/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ioFolder/css/iofrm-theme7.css') }}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{ asset('ioFolder/images/logo-light.svg') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('ioFolder/images/graphic3.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Signup And Become a Professional</h3>
                        <p>Access to the most powerfull tool in the entire photography industry.</p>
                        <div class="page-links">
                            <a class="active" href="{{URL_LOGIN}}">Login</a><a href="{{URL_REGISTER}}" >Register</a>
                        </div>
                        <!--
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget7.html">Forget password?</a>
                            </div>
                        </form>
                        -->
        
                        {!! Form::open(array('url' => '/login', 'method' => 'POST', 'name'=>"registrationForm")) !!}
                        Email:
                        {{ Form::email('email', $value = null , $attributes = array('class'=>'form-control',  'required'=> 'true', )) }}
                        Password:
                        {{ Form::password('password', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Password',  'required'=> 'true', )) }}
                        <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Log In</button>
                        </div>

                        {!! Form::close() !!}
                        <div class="other-links">
                            <span>Follow us on</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
