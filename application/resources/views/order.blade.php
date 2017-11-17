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
                        <th>
                            Quantity
                        </th>
                        <th>

                        </th>
                    </tr>
                    <!-- Loop start -->
                    <tr>
                        <td class="hidden-xs order-img">
                            <a href=""><img src="{{ $img-src }}" alt=""/></a>
                        </td>
                        <td>
                            <a href="#" title="">{{ $food-title}}</a>
                        </td>
                        <td>
                            <form class="form">
                                <input type="number" class="input-sm" style="width: 60px;" min="1" max="10" value="1" />
                            </form>
                        </td>
                        <td>
                            <a href=""><i class="fa fa-times"></i> <span class="hidden-xs">Remove</span></a>
                        </td>
                    </tr>
                    <!-- Loop end -->
                </table>

                <hr />

                <div class="row">
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4 text align-right">
                        <div>
                            <a href="" class="btn btn-mod btn-gray btn-round btn-small">Update Order</a>
                        </div>

                    </div>
                </div>

                <hr class="mb-60" />

                <div class="row">
                    <div class="col-sm-6 pt-10">
                    </div>
                    <div class="col-sm-6 text align-right pt-10">


                        <div>
                            Total: <strong> {{ }} </strong>
                        </div>

                        <div>
                            <a href="./checkout" class="btn btn-mod btn-round btn-large">Finish my order</a>
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