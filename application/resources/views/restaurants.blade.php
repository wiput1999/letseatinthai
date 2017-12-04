@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.nav')

<div class="page restaurant">
    <header>
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Thai Restaurants</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section food">
        <div class="container relative">

            <div class="row">
                <!-- Restaurant Loop Start -->
                <div class="card col-sm-12 col-md-6 col-lg-6 mb-60 mb-xs-40">
                    <div class="col-lg-5">
                        <!-- Restaurant image -->
                        <div class="menu-item">
                            <img src=""  />
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Name -->
                        <div class="food-title font-alt">
                            <a href=""><!-- Restaurant Name --></a>
                        </div>
                        <!-- Location -->
                        <div class="food-info">
                            <!-- Restaurant Des. and Location -->
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn add-to-order btn-mod btn-round">Navigate <i class="fa fa-location-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Restaurant Loop -->

            </div>
        </div>
    </section>
</div>

<footer class="page-section bg-gray-lighter footer">
@include('template.footer')
@endsection