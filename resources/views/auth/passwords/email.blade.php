@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="form-container">
  <form id="contact" action="{{ route('password.email') }}" method="post">
    {{ csrf_field() }}
    <h3>Reset Password</h3>
    <h4>Enter your email address to be emailed a link to change your password.</h4>
    <fieldset>
      <input id="email" type="email" placeholder="Email Address" tabindex="1" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </fieldset>
    <fieldset>
      <button name="submit" type="submit"  tabindex="4" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
@endsection
