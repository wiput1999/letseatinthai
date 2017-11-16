@extends('template.partials')
@section('content')
<div class="page">
    <header class="your-order">
        <div class="relative container align-left">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-0">Show below list to the Waiter</h1>
                </div>
            </div>

        </div>
    </header>

    <section class="page-section">
        <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <p>
                ฉันต้องการสั่งอาหารดังนี้:
            </p>

                <table class="table table-striped shopping-cart-table">
                <!-- Loop start -->
                    <tr>
                        <td class="hidden-xs checkout-img">
                            <a href=""><img src="{{ $img-src }}" alt=""/></a>
                        </td>
                        <td>
                            <p class="mb-0">{{ $food-title }}</p>
                        </td>
                        <td>
                        {{ $img-quantity}}
                        </td>
                    </tr>
                <!-- Loop end -->
                </table>

                <hr />
                <div class="col-sm-12 text align-center pt-10">
                Enjoy Your Meals!
                </div>

                <hr class="mb-60" />

                <div class="row">
                    <div class="col-sm-12 text align-center pt-10">

                        <div>
                            <a href="#" class="btn btn-mod btn-round btn-large">Send Feedback</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>
    </section>
</div>
<footer class="page-section bg-gray-lighter footer">
@endsection