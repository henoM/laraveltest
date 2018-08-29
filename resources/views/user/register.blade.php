@extends('layouts.app')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    {!! Form::open(array('route' => 'user.register')) !!}
                        <div class="form-group">
                            {!!  Form::label('User Name')!!}
                            {!!  Form::text('name', null, ['class' => 'form-control'])!!}
                            @if ($errors->has('name'))
                                <span class="text-danger">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!!  Form::label('Email')!!}
                            {!!  Form::text('email', null, ['class' => 'form-control'])!!}
                            @if ($errors->has('name'))
                                <span class="text-danger">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!!  Form::label('Password')!!}
                            {!!  Form::password('password',['class' => 'form-control'])!!}
                            @if ($errors->has('name'))
                                <span class="text-danger">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!!  Form::label('Repeat Password')!!}
                            {!!  Form::password('password_confirmation',['class' => 'form-control'])!!}
                        </div>
                        {!!  Form::submit('Register',['class' => 'btn btn-primary btn-flat m-b-30 m-t-30'])!!}
                        {{--<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>--}}

                    {!! Form::close() !!}

                </div>
                <div class="register-link m-t-15 text-center">
                    <p> <a href="{{ route('login') }}">Login  Page</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
