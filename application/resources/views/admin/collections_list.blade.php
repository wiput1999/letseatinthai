@extends('admin.partials')
@section('content')
    <!-- Name -->
    <div class="container">
        <h1 class="page-header">Food Collections List</h1>
        @include('template.alert')
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Food Name (TH)</th>
                <th>Food Name (EN)</th>
                <th class="butn"><a href="{{ route('admin.collection.new') }}" class="btn btn-success">Add New Food Collection</a> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($collections as $collection)
                    <tr>
                        <td>{{ $collection['id'] }}</td>
                        <td>{{ $collection['name_th'] }}</td>
                        <td>{{ $collection['name_en'] }}</td>
                        <td class="butn">
                            <a class="btn btn-primary" href="{{ route('admin.collection.edit', $collection['id']) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('admin.collection.delete', $collection['id']) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection