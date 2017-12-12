@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.nav')

<div class="page aboutus">
    <header>
        <div class="relative container align-left">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">About Us</h1>
                </div>
            </div>

        </div>
    </header>

<section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-subheading mb-20">We made this</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="{{ asset('/images/team/090.jpg') }}" alt="">
          <h4>Wiput Pootong</h4>
          <p class="text-muted">Joey</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="{{ asset('/images/team/102.jpg') }}" alt="">
          <h4>Sakorn Saokaeo</h4>
          <p class="text-muted">Beer</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="{{ asset('/images/team/029.jpg') }}" alt="">
          <h4>Taitana Yumee</h4>
          <p class="text-muted">Wan</p>
        </div>
      </div>
      <div class="col-lg-offset-2 col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="{{ asset('/images/team/183.jpg') }}" alt="">
          <h4>Teerapat Kraisrisirikul</h4>
          <p class="text-muted">Saint</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="{{ asset('/images/team/058.jpg') }}" alt="">
          <h4>Pacharapon Promma</h4>
          <p class="text-muted">Mix</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 mx-auto text-center">
        <p class="large text-muted">This project is a part of the subject Information Technology Fundamentals, Faculty of Information Technology, King Mongkut's Institute of Technology Ladkrabang (KMITL).</p>
      </div>
    </div>
  </div>
</section>

<footer class="page-section footer">
@include('template.footer')
@endsection