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
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a>

<div class="limiter">

    <div class="container-login100">
        <div class="wrap-login100">

            {!! Form::open(array('route' => 'user.register')) !!}

            @include('user.partials._form')

            {!! Form::close() !!}
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>