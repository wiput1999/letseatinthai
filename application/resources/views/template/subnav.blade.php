<!-- Navigation panel for browse -->
<nav class="main-nav js-stick">
<div class="full-wrapper relative clearfix">
    <div class="nav-logo-wrap local-scroll">
        <a href="{{ URL('/') }}" class="logo">
            <img src="" alt="" />
        </a>
    </div>
    <div class="mobile-nav">
        <i class="fa fa-bars"></i>
    </div>

    <!-- Main Menu -->
    <div class="inner-nav desktop-nav">
        <ul class="clearlist">
            <li><a class="{{ \Request::route()->getName() == "home" ? "active" : "" }}" href="{{ URL('/') }}">Home</a></li>
            <li><a class="{{ \Request::route()->getName() == "about" ? "active" : "" }}" href="{{ URL('/about') }}">About Us</a></li>

            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> Your Order({{ $count }})</a></li>
        </ul>
    </div>
    <!-- End Main Menu -->
</div>
</nav>
<!-- End Navigation panel -->
