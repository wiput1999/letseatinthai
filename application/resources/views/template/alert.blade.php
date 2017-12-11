@if (count($errors) > 0)
    <div class="alert alert-danger col-md-12" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success col-md-12" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i> {{ session('success') }}
    </div>
@endif