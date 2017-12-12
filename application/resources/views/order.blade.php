@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.subnav')

<div class="page">
    <header class="your-order">
        <div class="relative container align-left">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-0">Your Order</h1>
                        <div class="hs-line-4 font-alt">
                            Check your list before finish your order
                        </div>
                </div>
            </div>

        </div>
    </header>

    <section class="page-section">
        <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

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
                        <th>

                        </th>
                    </tr>
                    <!-- Loop start -->
                    @foreach ($foods as $food)
                        <tr>
                            <td class="hidden-xs order-img">
                                <img src="{{ route('api.food.photo', $food['id']) }}" alt="" style="max-width: 200px;"/>
                            </td>
                            <td>
                                <a href="#" title="">{{ $food['name_en'] }}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('cart.minus', $food['id']) }}"><i class="fa fa-minus"></i></a> {{ $order[$food['id']] }} <a href="{{ route('cart.plus', $food['id']) }}"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('cart.delete', $food['id']) }}"><i class="fa fa-times"></i> <span class="hidden-xs">Remove</span></a>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Loop end -->
                </table>

                <hr class="mb-60" />

                <div class="row">
                    <div class="col-sm-6 pt-10">
                    </div>
                    <div class="col-sm-6 text align-right pt-10">


                        <div style="font-size: 1.5em; margin-bottom: 1em;">
                            Total: <strong>{{ $total }}</strong>
                        </div>

                        <div>
                            <a href="{{ route('summary') }}" class="btn btn-mod btn-round btn-large">Finish my order</a>
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