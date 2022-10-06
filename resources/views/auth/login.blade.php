@extends('layouts.app')

@section('content')
<form action="{{ route('login') }}" method="POST" role="form" class="php-email-form">
    @csrf
    <div class="row no-gutters">
      <div class="col-md-6 form-group pr-md-1">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="col-md-6 form-group pl-md-1">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="text-center">
        <button type="submit">
            {{ __('Login') }}
        </button>
    </div>
</form>
<div style="text-align: left; margin-top: 50px;">
  NOTE:<br /> 
  Username: <b>admin@admin.com</b><br />
  Password: <b>password</b>
</div>
@endsection
