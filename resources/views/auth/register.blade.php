@extends('frontend.layout')
@section('content')
       

        <div class="rq-page-content">
            <div class="rq-content-block">
              <div class="rq-title-container bredcrumb-title small">
                <div class="container">
                  <h2 class="rq-title">Register</h2>
                  <ol class="breadcrumb rq-subtitle">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                  </ol>
                </div>
              </div>
              </div> <!-- end of login form portion -->
              <div class="rq-registration-content-single small-bottom-margin"> <!-- start of registration portion -->
                <div class="container">
                  <div class="rq-login-form no-border">
                    <h4>Don't have an account! Register now </h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h5>Sign Up TODAY AND YOU ` LL BE ABLE TO FOLLOWING</h5>
                    <ul class="rq-feature-list">
                      <li>Register and access all</li>
                      <li>Change your profile anytime</li>
                      <li>Keep a records of all your payment</li>
                      <li>Create your own Add at protfolio</li>
                      <li>Track your payment easily at your profile page</li>
                      <li>Quick registration for facebook, twitter and with Google+</li>
                    </ul>
                    <form class="form-horizontal"  action="{{ route('register') }}" method="POST" >
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <input id="name"  type="text" class="rq-form-control reverse" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                          {{-- <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                      <div class="col-md-6">
                        <input id="password" type="password" name="password" class="rq-form-control reverse" placeholder="Password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
                      <div class="col-md-6">
                        <input id="email" type="email" class="rq-form-control reverse" placeholder="Email Address" name="email" :value="old('email')" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                      <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="rq-form-control reverse" placeholder="Confirm Password" required name="password_confirmation" autocomplete="new-password">

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                      </div>
                      <div class="col-md-12">
                        <div class="register-button">
                          <button type="submit" class="rq-btn rq-btn-primary border-radius">Register <i class="arrow_right"></i></button>
                        </div>
                      </div>
                      </div> <!-- end of registration section -->
                    </form>
                    <div class="social-login"> <!-- start social icon div -->
                      <h5>or register with</h5>
                      <ul class="social-page-nav">
                        <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                        <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                        <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
                        <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
                        <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
                      </ul>
                    </div> <!-- end social icon div -->
    
                  </div>
                </div>
              </div><!--  end of registration form portin -->
            </div>
          </div>

@endsection
