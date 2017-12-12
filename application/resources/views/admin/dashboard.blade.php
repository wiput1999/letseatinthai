@extends('admin.partials')
@section('content')
    <!-- Name -->
    <div class="container">
        <h1 class="page-header">Restaurants List</h1>
        @include('template.alert')
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Restaurant Name</th>
                <th>ชื่อร้านอาหาร</th>
                <th class="butn"><a class="btn btn-success" href="{{ route('admin.restaurant.new') }}">Add New Restaurant</a> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant['id'] }}</td>
                        <td>{{ $restaurant['name_en'] }}</td>
                        <td>{{ $restaurant['name_th'] }}</td>
                        <td class="butn">
                            <a class="btn btn-primary" href="{{ route('admin.restaurant.detail', $restaurant['id']) }}">Detail</a>
                            <a class="btn btn-danger" href="{{ route('admin.restaurant.delete', $restaurant['id']) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection