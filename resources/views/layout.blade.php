<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title','Laravel')</title>
</head>
<body>
@yield('content')
<ul>
    <li><a href="/">Welcome</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>
</body>
</html>
