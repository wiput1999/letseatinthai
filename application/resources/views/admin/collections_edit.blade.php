@extends('admin.partials')

@section('content')
    <div class="container">
        <h2 style="text-align: center;">Edit Collection</h2>
        <hr>
        @include('template.alert')
        <form action="{{ route('admin.collection.edit.store', $collection['id']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ืname_th">Name (Thai)</label>
                        <input type="text" class="form-control" id="ืname_th" name="name_th" placeholder="Food name (Thai)" value="{{ $collection['name_th'] }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ืname_en">Name (English)</label>
                        <input type="text" class="form-control" id="ืname_en" name="name_en" placeholder="Food name (English)" value="{{ $collection['name_en'] }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_th">Description (Thai)</label>
                        <textarea class="form-control" id="description_th" name="description_th" placeholder="Food description (Thai)" rows="3" required>{{ $collection['description_th'] }}</textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_en">Description (English)</label>
                        <textarea class="form-control" id="description_en" name="description_en" placeholder="Food description (English)" rows="3" required>{{ $collection['description_en'] }}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection