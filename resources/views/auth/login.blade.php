@extends('frontend.layout')
@section('content')
<div class="rq-content-block">
    <div class="rq-title-container bredcrumb-title small">
      <div class="container">
        <h2 class="rq-title">Login</h2>
        <ol class="breadcrumb rq-subtitle">
          <li><a href="#">Home</a></li>
          <li class="active">Login</li>
        </ol>
      </div>
    </div>
    <div class="rq-registration-content-single"> <!-- start of login form portion -->
      <div class="container">
        <h4>Login your account</h4>
        <p class="subtitle">Login to your accounts to discover the great features in this template</p>
        <div class="rq-login-form">
        <form method="POST" action="{{ route('login') }}"">
            @csrf
            <div class="row">
              <div class="col-md-5">
                <input id="email" type="email" class="rq-form-control" placeholder="Your email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="col-md-5">
                <input id="password" type="password" name="password" class="rq-form-control"  placeholder="Your password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
            <div class="col-md-2">
                <button type="submit" class="rq-btn rq-btn-primary fluid border-radius">Login <i class="arrow_right"></i></button>
              </div>
              <div class="col-md-12">
                <div class="rq-checkbox">
                </div>
              </div>
              <div class="col-md-12">
                <div class="remember-me">
                  <span class="rq-checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Keep me loged in</label>
                  </span>
                  <span class="forgotpass">
                    <a href="#">Forgot your password ?</a>
                  </span>
                </div>
              </div>
            </div>
          </form>
          <div class="social-login"> <!-- start social icon div -->
            <h5>or login with</h5>
            <ul class="social-page-nav">
              <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
              <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
              <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
              <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
              <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
            </ul>
          </div> <!-- end social icon div -->
        </div> <!-- end login div -->
      </div>
      @endsection
{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
