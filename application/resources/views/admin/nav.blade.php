<div class="col-lg-12 ble ">
    <nav class="bll">
        <div class="blf">
            <button class="bkb bkd blg collapsed" type="button" data-toggle="collapse"
                    data-target="#nav-toggleable-md" aria-expanded="false">
                <span class="yz">Toggle nav</span>
            </button>
        </div>

        <div class="bki collapse " id="nav-toggleable-md" style="">
            <ul class="nav lq nav-stacked st">
                <li class="asv">Admin Dashboards</li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.dashboard" ? "active" : "" }}" href="{{ route('admin.dashboard') }}">Restaurants</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.restaurant.new" ? "active" : "" }}" href="{{ route('admin.restaurant.new') }}">Add new restaurant</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.categories" ? "active" : "" }}" href="{{ route('admin.categories') }}">Categories</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.categories.new" ? "active" : "" }}" href="{{ route('admin.categories.new') }}">Add new categories</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.collection" ? "active" : "" }}" href="{{ route('admin.collection') }}">Collections</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "admin.collection.new" ? "active" : "" }}" href="{{ route('admin.collection.new') }}">Add new collection</a>
                </li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </ul>
        </div>
    </nav>
</div>