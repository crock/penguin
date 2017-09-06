@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="form-container">
  <form id="contact" action="{{ route('password.request') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">
    <h3>Change Password</h3>
    <h4>Be sure to make it secure and write it down!</h4>
    <fieldset>
      <input id="email" type="email" placeholder="Email Address" tabindex="1" name="email" value="{{ $email or old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </fieldset>
    <fieldset>
      <input id="password" type="password" placeholder="Password" tabindex="2" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </fieldset>
    <fieldset>
      <input id="assword-confirm" type="password" placeholder="Confirm Password" tabindex="3" name="password_confirmation" required>
        @if ($errors->has('paspassword_confirmationsword'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </fieldset>
    <fieldset>
      <button name="submit" type="submit"  tabindex="4" id="contact-submit" data-submit="...Sending">Change Password</button>
    </fieldset>
  </form>
</div>
@endsection
