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
                <li class="asv">Dashboards</li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "portal.dashboard" ? "active" : "" }}" href="{{ route('portal.dashboard') }}">Menu List</a>
                </li>
                <li class="lp">
                    <a class="ln {{ \Request::route()->getName() == "portal.menu.new" ? "active" : "" }}" href="{{ route('portal.menu.new') }}">Add new menu</a>
                </li>
                <li class="lp">
                    <a href="https://api.qrserver.com/v1/create-qr-code/?size=512x512&data=https://letseatinthai.com/order/{{Auth::user()->restaurants}}" class="ln">Your QRCode</a>
                </li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </ul>
        </div>
    </nav>
</div>