@extends('template.partials')
@section('content')
<div class="page no-footer">

    <!-- Home Section -->
    <section class="home-section login" id="login">
        <div class="js-height-full container">

            <div class="home-content">
                <div class="home-text">

                    <h2 class="section-title font-alt mb-40 mb-sm-0 white">
                        Admin
                    </h2>

                    <div class="row">
                        <div class="col-sm-4 mb-40">
                        </div>
                        <div class="col-sm-4 mb-40">
                        <form method="post" action="#" id="admin-login" role="form" class="form">
                            <div class="mb-20 mb-md-10">
                                <input type="text" name="username" id="username" class="input-md form-control" placeholder="Username" maxlength="100">
                            </div>
                            <div class="mb-20 mb-md-10">
                                <input type="password" name="password" id="password" class="input-md form-control" placeholder="Password" maxlength="100">
                            </div>
                            <div class="mb-20 mb-md-10">
                            <button class="submit_btn btn btn-mod btn-medium btn-round" id="login_btn">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Home Section -->

</div>
<!-- End Page Wrap -->
@endsection