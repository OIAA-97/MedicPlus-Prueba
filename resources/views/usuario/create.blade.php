@extends('layouts.plantillabase')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mt-3">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-3">
                                <label>{{ __('Email') }}</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required />
                            </div>

                            <div class="mt-3">
                                <label>{{ __('Password') }}</label>
                                <input type="password" name="password" class="form-control" required autocomplete="new-password" />
                            </div>

                            <div class="mt-3">
                                <label>{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" />
                            </div>

                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Register') }}
                                </button>
                            </div>
</form>


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@endsection

@endsection