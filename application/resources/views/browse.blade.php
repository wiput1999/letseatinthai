@extends('template.partials')
@section('content')

{{--subNavbar--}}
@include('template.subnav')

<div class="page">
    <header>
        <div class="relative container align-left">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">{{ $restaurant['name_en'] }}</h1> <!-- ชื่อภาค Generic Food / Northeastern Food / Northen Food / Southen Food -->
                    <div class="hs-line-4 font-alt">
                        {{ $restaurant['description_en'] }}<!-- คำอธิบาย หรือไม่มีก็ได้ -->
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="page-section food">
        <div class="container relative">

            <div class="row">
                <!-- Menu Loop Start -->
                @foreach($foods as $food)
                <div class="card col-sm-12 col-md-6 col-lg-6 mb-60 mb-xs-40">
                    <div class="col-lg-5">
                        <!-- Menu image -->
                        <div class="menu-item">
                            <img src="{{ route('api.food.photo', $food['id']) }}"  />
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Name -->
                        <div class="food-title font-alt">
                            {{ $food['name_en'] }}
                        </div>
                        <!-- Reading -->
                        <div class="food-sub-title font-alt">
                            {{ $food['name_th'] }}
                        </div>
                        <!-- Short Description -->
                        <div class="food-info">
                            {{ $food['description_en'] }}
                        </div>
                        <div class="post-prev-more">
                            <a href="{{ route('cart.add', $food['id']) }}" class="btn add-to-order btn-mod btn-round">Add to order <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Post Loop -->

            </div>
        </div>
    </section>
</div>

<footer class="page-section bg-gray-lighter footer">
@include('template.footer')
@endsection