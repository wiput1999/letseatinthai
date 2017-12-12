@extends('admin.partials')

@section('content')
    <div class="container">
        <h2 style="text-align: center;">Edit Restaurant Photo</h2>
        <hr>
        @include('template.alert')
        <form action="{{ route('admin.restaurant.photo.store', $restaurant['id']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ืname_th">Name (Thai)</label>
                        <input type="text" class="form-control" id="ืname_th" name="name_th" placeholder="Restaurant name (Thai)" value="{{ $restaurant['name_th'] }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ืname_en">Name (English)</label>
                        <input type="text" class="form-control" id="ืname_en" name="name_en" placeholder="Restaurant name (English)" value="{{ $restaurant['name_en'] }}" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_th">Description (Thai)</label>
                        <textarea class="form-control" id="description_th" name="description_th" placeholder="Restaurant description (Thai)" rows="3" disabled>{{ $restaurant['description_th'] }}</textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description_en">Description (English)</label>
                        <textarea class="form-control" id="description_en" name="description_en" placeholder="Restaurant description (English)" rows="3" disabled>{{ $restaurant['description_en'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="available">Available :  </label>
                        <select class="form-control" name="available" disabled>
                            <option selected disabled>Available</option>
                            <option value="1" {{  ($restaurant['available'] == "1" ? "selected":"") }}>Yes</option>
                            <option value="0" {{  ($restaurant['available'] == "0" ? "selected":"") }}>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="categories">Categories :  </label>
                        <select class="form-control" name="categories" disabled>
                            <option selected disabled>Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" {{  ($restaurant['categories'] == $category['id'] ? "selected":"") }}>{{ $category['name_th'] }} / {{ $category['name_en'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="location_lat">Location (Latitude)</label>
                        <input type="text" class="form-control" id="location_lat" name="location_lat" placeholder="Location (Latitude)" value="{{ $restaurant['location_lat'] }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="location_lng">Location (Longitude)</label>
                        <input type="text" class="form-control" id="location_lng" name="location_lng" placeholder="Location (Longitude)" value="{{ $restaurant['location_lng'] }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">E-Mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail Address" value="{{ $user['email'] }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control-file" id="photo" accept="image/*" required>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection