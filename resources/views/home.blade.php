<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            @if(session()->has('warning'))
                <p class="text-center text-danger" style="color: red">{{ session()->get('warning') }}</p>
            @endif

            {!! Form::open(array('route' => 'user.login')) !!}


            <span class="login100-form-title p-b-26">
						Welcome user
					</span>
            <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                {!!  Form::text('email', null, ['class' => 'input100'])!!}
                <span class="focus-input100" data-placeholder="Email"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                {!!  Form::password('password',['class' => 'input100'])!!}
                <span class="focus-input100" data-placeholder="Password"></span>
            </div>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    {!!  Form::submit('login',['class' => 'login100-form-btn'])!!}

                </div>
            </div>

            <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

                <a class="txt2" href="#">
                    Sign Up
                </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
