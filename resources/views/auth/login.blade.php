@extends('layouts.app')

@section('content')
<div class="form-container">
  <form id="contact" action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <h3>User Login</h3>
    <h4>Sign in to access the web app and save word lists.</h4>
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
        <div class="checkbox">
            <label>
                <input type="checkbox" tabindex="3" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit"  tabindex="4" id="contact-submit" data-submit="...Sending">Login</button>
    </fieldset>
    <p class="iforgot"><a class="btn btn-link"  tabindex="5" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
  </form>
</div>
@endsection
