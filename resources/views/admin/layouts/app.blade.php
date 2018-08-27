<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>

    <title>Admin</title>

    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet">
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

@include('admin.layouts.header')
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            @include('admin.layouts.sitebar')

            @section('content')

            @show

</div>
@include('admin.layouts.footer')

</body>