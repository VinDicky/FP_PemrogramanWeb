@extends('frontend.layout')
@section('content')
<section style="padding-top: 110px;">
    <div class="container">
      <h2 class="text-center">Our Team</h2>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="{{ asset('img/tim1.jpg') }}" alt="Team member 1">
            <h3>Rezanda</h3>
            <p>Leader</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="{{ asset('img/tim2.jpg') }}" alt="Team member 2">
            <h3>Dimas</h3>
            <p>Programmer</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="{{ asset('img/kevintampan.jpg') }}" alt="Team member 3">
            <h3>Kevin</h3>
            <p>Marketing</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="{{ asset('img/profil.jpg') }}" alt="Team member 4">
            <h3>Indra</h3>
            <p>Manajemen</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection