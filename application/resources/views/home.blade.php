@extends('template.partials')
@section('content')
{{--Navbar--}}
@include('template.nav')
<!-- Page Wrap -->
<div class="page" id="top">

    <section class="home-section bg-dark" data-background="{{ asset('/images/poster.jpg') }} id="home">
        <div class="js-height-full container">

            <div class="bg-video-wrapper">
                <div class="bg-video-overlay bg-dark-alfa-30"></div>
                <video poster="{{ asset('/images/poster.jpg') }}" id="bgvid" autoplay muted loop>
                <source src="{{ asset('/images/video-restaurant.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="home-content">
                <div class="home-text">
                <div class="row mb-sm-20">
                        <div class="col-sm-offset-2 col-sm-8 col-xs-8 col-xs-offset-2">
                            <img src="{{ asset('/images/logo.png') }}" alt="" />
                        </div>
                </div>
                <h2 class="hs-line-3 mb-0 text-center">
                    SCAN &bull; SELECT &bull; SHOW
                </h2>

                </div>
            </div>

            <div class="local-scroll">
                <a href="#steps" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>

        </div>
    </section>


    <section class="page-section" id="steps">
        <div class="container relative">

            <h2 class="section-title font-alt mb-70 mb-sm-40">
                Enjoy a happy meal in Thailand within 3 steps.
            </h2>

            <div class="row multi-columns-row alt-features-grid">

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="alt-features-item align-center">
                        <div class="alt-features-icon">
                            <span class="fa fa-qrcode"></span>
                        </div>
                        <h3 class="alt-features-title font-alt">SCAN</h3>
                        <div class="alt-features-descr align-center">
                            Scan QR code from the restaurant.
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="alt-features-item align-center">
                        <div class="alt-features-icon">
                            <span class="fa fa-check-square-o"></span>
                        </div>
                        <h3 class="alt-features-title font-alt">Select</h3>
                        <div class="alt-features-descr align-center">
                            Choose your desire meal in English with photo.
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="alt-features-item align-center">
                        <div class="alt-features-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <h3 class="alt-features-title font-alt">Show</h3>
                        <div class="alt-features-descr align-center">
                            Show them to the waiter.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="page-section bg-gray-lighter" id="browse">
        <div class="container relative">

            <div class="section-text align-center">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p class="lead">
                            Can't find the restaurant yet?
                        </p>
                        <div>
                            <a href="restaurants" class="btn btn-mod btn-medium btn-round">Discover Nearby Restaurants</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<footer class="page-section footer">
@include('template.footer')
@endsection