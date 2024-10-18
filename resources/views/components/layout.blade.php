<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <h2 class="portfolio-heading">PORTFOLIO</h2>
            <ul>
                <li id="home"><a href="{{ route('home') }}">HOME</a></li>
                <li id="about"><a href="{{ route('about') }}">ABOUT ME</a></li>
                <li id="content"><a href="{{ route('content') }}">EDUCATION</a></li>
                <li id="about"><a href="{{ route('routes') }}">ROUTES</a></li>
                <li id="content"><a href="{{ route('layouts') }}">LAYOUTS</a></li>
                <li id="projects"><a href="{{ route('middleware') }}">MIDDLEWARE</a></li>
            </ul>
        </div>
        @yield('content')
    </div>
</body>
</html>
