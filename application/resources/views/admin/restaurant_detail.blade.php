@extends('admin.partials')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <img class="img-responsive" src="{{ route('api.restaurant.photo', $restaurant['id']) }}">
            </div>
            <div class="col-xs-6 col-md-4" style="background-color: #F3F3F3; padding: 1em;">
                <div class="detail">
                    <!-- Name in That -->
                    <h2>{{ $restaurant['name_th'] }}</h2>
                    <!-- Name in English -->
                    <h3>{{ $restaurant['name_en'] }}</h3>
                    <hr>
                    <ul>
                        <li>{{ $restaurant['description_th'] }}</li>

                        <li>{{ $restaurant['description_en'] }}</li>
                    </ul>
                    <a class="btn btn-info" href="{{ route('admin.restaurant.photo', $restaurant['id']) }}">Change Photo</a>
                    <a class="btn btn-warning" href="{{ route('admin.restaurant.edit', $restaurant['id']) }}">Edit</a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2em;">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Menu name</th>
                    <th>ชื่อเมนู</th>
                    <th>ราคา(฿)</th>
                    <th class="butn"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td>{{ $food['id'] }}</td>
                        <td>{{ $food['name_en'] }}</td>
                        <td>{{ $food['name_th'] }}</td>
                        <td>{{ $food['price'] }}</td>
                        <td class="butn">
                            <a class="btn btn-primary" href="{{ route('admin.menu.detail', $food['id']) }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection