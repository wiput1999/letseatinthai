@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.subnav')

<div class="page {{ title-class }}">
    <header>
        <div class="relative container align-left">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">{{ title }}</h1> <!-- ชื่อภาค Generic Food / Northeastern Food / Northen Food / Southen Food -->
                    <div class="hs-line-4 font-alt">
                        {{ description }}<!-- คำอธิบาย หรือไม่มีก็ได้ -->
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="page-section food">
        <div class="container relative">

            <div class="row">
                <!-- Menu Loop Start -->
                <div class="card col-sm-12 col-md-6 col-lg-6 mb-60 mb-xs-40">
                    <div class="col-lg-5">
                        <!-- Menu image -->
                        <div class="menu-item">
                            <img src="{{ imgsrc }}"  />
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Name -->
                        <div class="food-title font-alt">
                            <a href="">{{ food-title }}</a>
                        </div>
                        <!-- Reading -->
                        <div class="food-sub-title font-alt">
                            <a href="">{{ food-reading }}
                        </div>
                        <!-- Short Description -->
                        <div class="food-info">
                            {{ food-description }}
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn add-to-order btn-mod btn-round">Add to order <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Post Loop -->

            </div>
        </div>
    </section>
</div>

@endsection