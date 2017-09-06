@extends('layouts.app')

@section('content')
<div class="form-container">
  <form id="contact" action="{{ route('join-beta') }}" method="post">
    {{ csrf_field() }}
    <h3>Join the beta!</h3>
    <h4>Tell us your email in order to be notified when the beta is available.</h4>
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
