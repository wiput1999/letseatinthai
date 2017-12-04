@extends('template.partials')
@section('content')
    <div class="container-fluid no-footer" style="padding-top: 10px;">
        <div class="col-lg-12 ble ">
            <nav class="bll">
                <div class="blf">
                    <button class="bkb bkd blg collapsed" type="button" data-toggle="collapse"
                            data-target="#nav-toggleable-md" aria-expanded="false">
                        <span class="yz">Toggle nav</span>
                    </button>
                    <a class="blh bmh" href="./">
                        <span class="bv bch bli"></span>
                    </a>
                </div>

                <div class="bki collapse " id="nav-toggleable-md" style="">
                    <ul class="nav lq nav-stacked st">
                        <li class="asv">Dashboards</li>
                        <li class="lp">
                            <a class="ln active" href="#">Overview</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="#">Add new menu</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="#">For something</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="#">Add new branch</a>
                        </li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="col-sm-12 main">

            <!-- Name -->
            <h1 class="page-header">Par nothing</h1>

            <div class="row grid">

                <!-- start 1 menu -->
                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="https://thecozycook.com/wp-content/uploads/2015/02/Bobby-Flay-Meatball-Recipe.jpg"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Meatball</h4>
                            <p class="card-text">This is meatballs don't you see?</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end this menu -->


                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="https://atmedia.imgix.net/08bd6ad4d2ff82b8fb15cfa5c41bef05bf565752?auto=format&q=45&w=600.0&h=800.0&fit=max&cs=strip"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Waffle</h4>
                            <p class="card-text">A waffle is a dish made from leavened batter or dough that is cooked
                                between two plates</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://raanthai.co.uk/shop/NRF585lg.jpg" alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Mama</h4>
                            <p class="card-text">Mama is Mama nothing else</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="http://www.pbplc.co.th/fh/en/images/uploads/Snack%20Bread/13-16-04-449389750.jpg"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Farmhouse Bun</h4>
                            <p class="card-text">Nothing to say but I love this</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="http://www.pbplc.co.th/fh/en/images/uploads/Snack%20Bread/13-16-04-449389750.jpg"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Farmhouse Bun</h4>
                            <p class="card-text">Nothing to say but I love this</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="http://www.pbplc.co.th/fh/en/images/uploads/Snack%20Bread/13-16-04-449389750.jpg"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Farmhouse Bun</h4>
                            <p class="card-text">Nothing to say but I love this</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 grid-item  thumbnail_hover">
                    <div class="thumbnail">
                        <img class="img-responsive"
                             src="https://www.theramenrater.com/wp-content/uploads/2015/03/2015_3_9_1615_001.jpg"
                             alt="Waffle">
                        <div class="caption">
                            <h4 class="card-title">Mama</h4>
                            <p class="card-text">Mama is Mama nothing else</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change name</a></li>
                                    <li><a href="#">Change description</a></li>
                                    <li><a href="#">Change picture</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <script type="text/javascript">
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                fitWidth: true,
            });
        </script>

@endsection