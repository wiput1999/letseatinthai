<!-- Navigation panel for browse -->
<nav class="main-nav js-stick">
<div class="full-wrapper relative clearfix">
    <div class="nav-logo-wrap local-scroll">
        <a href="{{ $home }}" class="logo">
            <img src="{{ $img-src }}" alt="" />
        </a>
    </div>
    <div class="mobile-nav">
        <i class="fa fa-bars"></i>
    </div>

    <!-- Main Menu -->
    <div class="inner-nav desktop-nav">
        <ul class="clearlist">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li><a href="{{ URL('/about') }}">About Us</a></li>
            <li><a>&nbsp;</a></li>

            <li><a href="{{ $order }}"><i class="fa fa-shopping-cart"></i> Your Order(0)</a></li>
        </ul>
    </div>
    <!-- End Main Menu -->
</div>
</nav>
<!-- End Navigation panel -->
