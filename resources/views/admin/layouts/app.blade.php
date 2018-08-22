<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <meta name="description" content="Latest updates and statistic charts">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--begin::Web font -->
    {!! Html::script(asset('admin/assets/vendors/base/fonts/webfont.js'))  !!}

    <link href="{{ asset('admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet">
    <!--end::Base Styles -->
    <link href="{{ asset('admin/assets/demo/default/media/img/logo/favicon.ico') }}" rel="stylesheet">
    @yield('style')

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-37564768-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<br><br>
@include('admin.layouts.header')

@section('content')

    @show

@include('admin.layouts.footer')

<!-- end::Footer -->


{!! Html::script(asset('admin/assets/vendors/base/vendors.bundle.js'))  !!}
{!! Html::script(asset('admin/assets/demo/default/base/scripts.bundle.js'))  !!}

<!--begin::Page Vendors -->
{!! Html::script(asset('admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js'))  !!}
{!! Html::script(asset('admin/assets/app/js/dashboard.js'))  !!}
@yield('scripts')


</body>