@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.subnav')

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
                    <tr>
                        <th class="hidden-xs">
                            Photo
                        </th>
                        <th>
                            Food
                        </th>
                        <th class="text-center">
                            Quantity
                        </th>
                    </tr>
                <!-- Loop start -->
                    @foreach($foods as $food)
                    <tr>
                        <td class="hidden-xs checkout-img"">
                            <img src="{{ route('api.food.photo', $food['id']) }}" alt="" style="max-width: 200px;" />
                        </td>
                        <td>
                            <p class="mb-0">{{ $food['name_th'] }}</p>
                        </td>
                        <td class="text-center">
                            {{ $food['quantity'] }}
                        </td>
                    </tr>
                    @endforeach
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
                            <a href="{{ route('empty') }}" class="btn btn-mod btn-round btn-large">Empty Cart!</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    </section>
</div>

<footer class="page-section bg-gray-lighter footer">
@include('template.footer')
@endsection