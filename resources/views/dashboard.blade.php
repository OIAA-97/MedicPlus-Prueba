@extends('layouts.app')

@section('css')
@endsection

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif


    <div>Bienvenido: {{ Auth::user()->name }}</div>
    
    <form class="form-inline my-2 my-lg-0" form method="POST" action="{{ route('logout') }}">
      @csrf
     <button type="submit" class="btn btn-outline-dark">{{ __('Logout') }}</button>
    </form>

    <div class="uno">You are logged in!</div>

    <!-- <hr>
     -->
<!-- 
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('profile.update-password-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
        @include('profile.two-factor-authentication-form')
    @endif -->

@endsection

@section('js')

@endsection