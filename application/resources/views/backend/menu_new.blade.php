@extends('backend.partials')

@section('content')
    <div class="container" style="padding: 10px;">
        <h2 style="text-align: center;">เพิ่มเมนูอาหาร</h2>
        <hr>
        @include('template.alert')
        <form action="{{ route('portal.menu.new.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ืname_th">Name (Thai)</label>
                        <input type="text" class="form-control" id="ืname_th" name="name_th" placeholder="Menu name (Thai)" value="{{ old('name_th') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ืname_en">Name (English)</label>
                        <input type="text" class="form-control" id="ืname_en" name="name_en" placeholder="Menu name (English)" value="{{ old('name_en') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_th">Description (Thai)</label>
                        <textarea class="form-control" id="description_th" name="description_th" placeholder="Menu description (Thai)" rows="3" required>{{ old('description_th') }}</textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_en">Description (English)</label>
                        <textarea class="form-control" id="description_en" name="description_en" placeholder="Menu description (English)" rows="3" required>{{ old('description_en') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="available">Available :  </label>
                    <select class="form-control" name="available" required>
                        <option selected disabled>Available</option>
                        <option value="1" {{  (old('available') == "1" ? "selected":"") }}>Yes</option>
                        <option value="0" {{  (old('available') == "0" ? "selected":"") }}>No</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="categories">Category :  </label>
                    <select class="form-control" name="categories" required>
                        <option selected disabled>Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category['id'] }}" {{  (old('$category') == $category['id'] ? "selected":"") }}>{{ $category['name_en'] }} / {{ $category['name_th'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control-file" id="photo" accept="image/*" value="{{ old('photo') }}" required>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="control-label">Price</label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">฿</div>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price in THB" value="{{ old('price') }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">เพิ่มเมนู</button>
        </form>
    </div>
@endsection