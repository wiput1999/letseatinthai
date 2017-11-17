<!-- Navigation panel for index and about us -->
<nav class="main-nav dark transparent stick-fixed">
    <div class="full-wrapper relative clearfix">

        <div class="nav-logo-wrap local-scroll">
            <a href="{{ $home }}" class="logo">
                <img src="{{ $logo }}" alt="" />
            </a>
        </div>
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist local-scroll">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="{{ $generic }}">Generic Food</a></li>
                <li><a href="{{ $northeast }}">Northeastern Food (Isan)</a></li>
                <li><a href="{{ $north }}">Northern Food</a></li>
                <li><a href="{{ $south }}">Southern Food</a></li>
                <li><a href="{{ $about }}">About Us</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation panel -->
