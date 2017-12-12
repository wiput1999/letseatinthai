@extends('admin.partials')
@section('content')
    <!-- Name -->
    <div class="container">
        <h1 class="page-header">Categories List</h1>
        @include('template.alert')
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name (TH)</th>
                <th>Category Name (EN)</th>
                <th class="butn"><a href="{{ route('admin.categories.new') }}" class="btn btn-success">Add New Category</a> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>{{ $category['name_th'] }}</td>
                        <td>{{ $category['name_en'] }}</td>
                        <td class="butn">
                            <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category['id']) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('admin.categories.delete', $category['id']) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection