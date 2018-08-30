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
                @if(session('warning'))
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        {{session('warning')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="login-form">
                    {!! Form::open(array('route' => 'user.login')) !!}
                        <div class="form-group">
                            <label>Email</label>
                            {!!  Form::text('email', null, ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            {!!  Form::password('password',['class' => 'form-control'])!!}
                        </div>
                        {!!  Form::submit('login',['class' => 'btn btn-success btn-flat m-b-30 m-t-30'])!!}
                    {!! Form::close() !!}
                </div>
                <div class="register-link m-t-15 text-center">
                    <p>Don't have account ? <a href="{{ route('register') }}">Registration</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
