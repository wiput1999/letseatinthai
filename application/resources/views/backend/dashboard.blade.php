@extends('backend.partials')
@section('content')
    <!-- Name -->
    <div class="container">
        <h1 class="page-header">{{ $restaurant['name_en'] }}</h1>
        @include('template.alert')
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Menu name</th>
                <th>ชื่อเมนู</th>
                <th>ราคา(฿)</th>
                <th class="butn"><a class="btn btn-success" href="{{ route('portal.menu.new') }}">Add New Menu</a> </th>
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
                        <a class="btn btn-primary" href="{{ route('portal.menu.detail', $food['id']) }}">Detail</a>
                        <a class="btn btn-danger" href="{{ route('portal.menu.delete', $food['id']) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection