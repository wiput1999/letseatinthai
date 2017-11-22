@extends('template.partials')
@section('content')
{{--Navbar--}}
@include('template.nav')
<!-- Page Wrap -->
<div class="page" id="top">

    <section class="home-section bg-dark bg-dark-alfa-70" data-background="video/video-restaurant.jpg" id="home">
        <div class="js-height-full container">

            <div class="bg-video-wrapper">
                <video poster=" " id="bgvid" autoplay muted loop>
                <source src=" " type="video/mp4">
                </video>
            </div>

            <div class="home-content">
                <div class="home-text">
                <div class="row mb-30 mb-sm-20">
                        <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                            <img src=" " alt="" />
                        </div>
                </div>
                <h2 class="hs-line-3 mb-0">
                    SCAN &bull; SELECT &bull; SHOW
                </h2>

                </div>
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
</div>

<!-- Footer -->
<footer class="small-section footer pb-60">
@endsection