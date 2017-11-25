@extends('template.partials')
@section('content')
{{--subNavbar--}}
@include('template.subnav')

<link href="aboutus.css" rel="stylesheet" type="text/css">

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About Us</h2>
        <h3 class="section-subheading text-muted">Our teammates.</h3>
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
      <div class="col-sm-4">
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
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">(Custom Text)</p>
      </div>
    </div>
  </div>
</section>
