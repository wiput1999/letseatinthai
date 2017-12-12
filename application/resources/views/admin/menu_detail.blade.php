@extends('admin.partials')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-md-8">
            <img class="img-responsive" src="{{ route('api.food.photo', $food['id']) }}">
        </div>
        <div class="col-xs-6 col-md-4" style="background-color: #F3F3F3; padding: 1em;">
            <div class="detail">
                <!-- Name in That -->
                <h2>{{ $food['name_th'] }}</h2>
                <!-- Name in English -->
                <h3>{{ $food['name_en'] }}</h3>
                <hr>
                <ul>
                    <li>{{ $food['description_th'] }}</li>

                    <li>{{ $food['description_en'] }}</li>
                </ul>
                <p>Price : {{ $food['price'] }} บาท</p>
            </div>
        </div>
    </div>

@endsection