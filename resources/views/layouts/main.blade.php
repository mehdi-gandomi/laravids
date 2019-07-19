<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TheSaaS - Responsive Bootstrap SaaS, Software & WebApp Template</title>

    <!-- Styles -->
    <link href="{{asset("css/core.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/thesaas.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset("img/apple-touch-icon.png")}}">
    <link rel="icon" href="{{asset("img/favicon.png")}}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body>
<div id="app">
@include("includes.topbar")
@yield("header")

<!-- Main container -->
<main class="main-content">




    @yield('content')






</main>
<!-- END Main container -->

@if(!auth()->check())
        <login></login>
@endif
<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row gap-y justify-content-center">
            <div class="col-12 col-lg-6">
                <ul class="nav nav-primary nav-hero">
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link" href="/">Bahdcasts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>
<!-- END Footer -->
</div>
<!-- Scripts -->
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/thesaas.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
