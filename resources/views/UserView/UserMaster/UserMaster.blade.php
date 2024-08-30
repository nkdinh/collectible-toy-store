<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/peca-04.png')}}">
    <link rel="stylesheet" href="{{asset('css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app-modern.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/app-modern-dark.min.css')}}">--}}
<!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <link rel="shortcut icon" href="{{asset('images/peca.png')}}">
    @yield('css')
    <title>Peca puppy</title>
</head>
<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<header>
    @yield('header')
</header>
@yield('main')

<script src="{{asset('javascript/vendor.min.js')}}"></script>
<script src="{{asset('javascript/app.min.js')}}"></script>
</body>
</html>
