@extends('layouts.app')

@section('content')
<div class="form-container">
  <form id="contact" action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <h3>Registration</h3>
    <h4>Create a free account to access the web app and save custom word lists.</h4>
    <fieldset>
      <input id="email" type="email" placeholder="Email Address" tabindex="1" name="email" value="{{ old('email') }}" required autofocus>
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
        <input id="password-confirm" type="password" placeholder="Confirm Password" tabindex="3" name="password_confirmation" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit"  tabindex="4" id="contact-submit" data-submit="...Sending">Login</button>
    </fieldset>
    <p class="iforgot"><a class="btn btn-link"  tabindex="5" href="{{ route('login') }}">Existing User?</a></p>
  </form>
</div>
@endsection
