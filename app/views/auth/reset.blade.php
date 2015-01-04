@include('partials.head')

  <div class="row">
    <div class="large-12 medium-12 small-12 column">

      <h2>Reset your password</h2>

      @if (Session::get('error'))
      <div class="alert-box warning">{{ Session::get('error') }}</div>
      @endif

      <form action="{{ action('RemindersController@postReset') }}" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', Input::old('email'), array('placeholder' => 'email@domain.com')) }}

        {{ Form::label('password', 'New Password') }}
        {{ Form::password('password') }}

        {{ Form::label('password_confirmation', 'Confirm New Password') }}
        {{ Form::password('password_confirmation') }}

        <input type="submit" class="button expand" value="Reset Password">
      </form>

    </div>
  </div>

@include('partials.foot')
