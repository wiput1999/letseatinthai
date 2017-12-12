<!-- Navigation panel for index and about us -->
<nav class="main-nav dark transparent stick-fixed">
    <div class="full-wrapper relative clearfix">

        <div class="nav-logo-wrap local-scroll">
            <a href="" class="logo">
                <img src="" alt="" />
            </a>
        </div>
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist local-scroll">
                <li><a class="{{ \Request::route()->getName() == "home" ? "active" : "" }}" href="{{ URL('/') }}">Home</a></li>
                <li><a class="{{ \Request::route()->getName() == "about" ? "active" : "" }}" href="{{ URL('/about') }}">About Us</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation panel -->
