<span class="login100-form-title p-b-26">
						Registration
					</span>
<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
@if(session('info'))
	<div class="alert alert-success login100-form-title p-b-48">
		{{session('info')}}
	</div>
@endif
<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
    {!!  Form::text('name', null, ['class' => 'input100'])!!}
	<span class="focus-input100" data-placeholder="First Name"></span>
	@if ($errors->has('name'))
		<span class="text-danger">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
	@endif

</div>
<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
    {!!  Form::text('email', null, ['class' => 'input100'])!!}
    <span class="focus-input100" data-placeholder="Email"></span>
	@if ($errors->has('email'))
		<span class="text-danger">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
	@endif
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
    {!!  Form::password('password',['class' => 'input100'])!!}
    <span class="focus-input100" data-placeholder="Password"></span>
	@if ($errors->has('password'))
		<span class="text-danger">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
	@endif
</div>

<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
	{!!  Form::password('password_confirmation',['class' => 'input100'])!!}
	<span class="focus-input100" data-placeholder="Password"></span>

</div>

<div class="container-login100-form-btn">
    <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        {!!  Form::submit('Register',['class' => 'login100-form-btn'])!!}

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