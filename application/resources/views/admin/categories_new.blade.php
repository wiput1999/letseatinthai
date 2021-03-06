@extends('admin.partials')

@section('content')
    <div class="container">
        <h2 style="text-align: center;">Add new Categories</h2>
        <hr>
        @include('template.alert')
        <form action="{{ route('admin.categories.new.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ืname_th">Name (Thai)</label>
                        <input type="text" class="form-control" id="ืname_th" name="name_th" placeholder="Category name (Thai)" value="{{ old('name_th') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ืname_en">Name (English)</label>
                        <input type="text" class="form-control" id="ืname_en" name="name_en" placeholder="Category name (English)" value="{{ old('name_en') }}" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Add category</button>
        </form>
    </div>
@endsection