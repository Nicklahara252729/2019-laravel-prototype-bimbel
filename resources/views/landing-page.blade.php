<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Prototype</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('assets/landing-page/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('assets/landing-page/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets/landing-page/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('assets/landing-page/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('assets/landing-page/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- BASE CSS -->
    <link href="{{asset('assets/landing-page/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing-page/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/landing-page/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing-page/css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    @yield('css')

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('assets/landing-page/css/custom.css')}}" rel="stylesheet">

    
</head>
<body @if($uri ==  "login") id="login_bg" @elseif($uri == "register") id="admission_bg" @endif>
<div id="page">
@if($uri != "login" && $uri != "register")
    @include('theme.landing-page.header')
@endif
@if($uri == "register")
    @yield('main')
@else
    <main>
    @if($uri != "login" && $uri != "register")
        @include('theme.landing-page.banner')
    @endif
        @yield('main')
    </main>
@endif
@if($uri != "login" && $uri != "register")
    @include('theme.landing-page.footer')
@endif
</div>
<!-- COMMON SCRIPTS -->
    <script src="{{asset('assets/landing-page/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/landing-page/js/common_scripts.js')}}"></script>
    <script src="{{asset('assets/landing-page/js/main.js')}}"></script>
    <script src="{{asset('assets/landing-page/assets/validate.js')}}"></script>
    @yield('js')
</body>
</html>