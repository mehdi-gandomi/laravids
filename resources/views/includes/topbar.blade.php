<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="index.html">
                <img class="logo-default" src="{{asset("img/logo.png")}}" alt="logo">
                <img class="logo-inverse" src="{{asset("img/logo-light.png")}}" alt="logo">
            </a>
        </div>


        <div class="topbar-right">
            <ul class="topbar-nav nav">
            @auth
                Hey {{auth()->user()->name}}
            @else
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
            @endauth
            </ul>
        </div>

    </div>
</nav>
<!-- END Topbar -->
