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
                    {!! Form::open(array('route' => 'admin.login')) !!}
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
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<title>admin</title>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link href="{{ asset('css/util.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/login.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="limiter">--}}
    {{--<div class="container-login100">--}}
        {{--<div class="wrap-login100">--}}
            {{--@if(session()->has('warning'))--}}
                {{--<p class="text-center text-danger" style="color: red">{{ session()->get('warning') }}</p>--}}
            {{--@endif--}}
            {{--{!! Form::open(['route' => 'admin.login']) !!}--}}

					{{--<span class="login100-form-title p-b-26">--}}
						{{--Welcome--}}
					{{--</span>--}}
                    {{--<span class="login100-form-title p-b-48">--}}
                        {{--<i class="zmdi zmdi-font"></i>--}}
                    {{--</span>--}}

                    {{--<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">--}}
                        {{--{!!  Form::text('email', null, ['class' => 'input100'])!!}--}}
                        {{--<span class="focus-input100" data-placeholder="Email"></span>--}}
                    {{--</div>--}}

                    {{--<div class="wrap-input100 validate-input" data-validate="Enter password">--}}
                        {{--<span class="btn-show-pass">--}}
                            {{--<i class="zmdi zmdi-eye"></i>--}}
                        {{--</span>--}}
                        {{--{!!  Form::password('password',['class' => 'input100'])!!}--}}
                        {{--<span class="focus-input100" data-placeholder="Password"></span>--}}
                    {{--</div>--}}

                    {{--<div class="container-login100-form-btn">--}}
                        {{--<div class="wrap-login100-form-btn">--}}
                            {{--<div class="login100-form-bgbtn"></div>--}}
                            {{--{!!  Form::submit('login',['class' => 'login100-form-btn'])!!}--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="text-center p-t-115">--}}
                            {{--<span class="txt1">--}}
                                {{--Don’t have an account?--}}
                            {{--</span>--}}

                        {{--<a class="txt2" href="#">--}}
                            {{--Sign Up--}}
                        {{--</a>--}}
                    {{--</div>--}}
            {{--{!! Form::close() !!}--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div id="dropDownSelect1"></div>--}}
{{--<script src="{{ asset('js/login.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
