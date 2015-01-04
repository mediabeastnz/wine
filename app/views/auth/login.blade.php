@include('partials.head')

  <div class="row">
    <div class="large-12 medium-12 small-12 column">

      {{ Form::open(array('url' => 'login')) }}
      <h1>Login</h1>

      <!-- if there are login errors, show them here -->
      @if (Session::get('loginError'))
      <div class="alert-box alert-warning">{{ Session::get('loginError') }}</div>
      @endif

      @if($errors->any())
      <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
      </p>
      @endif

      {{ Form::label('email', 'Email Address') }}
      {{ Form::text('email', Input::old('email'), array('placeholder' => 'email@domain.com')) }}

      {{ Form::label('password', 'Password') }}
      {{ Form::password('password') }}

      <input type="submit" value="Login" class="button expand" />
      {{ Form::close() }}

      <div class="row">
        <div class="large-6 column"><p><a href="/password/remind">Forgotten your password?</a></p></div>
        <div class="large-6 column"><p class="text-right">Dont have an accont? <a href="/users/create">Sign up</a></p></div>
      </div>


    </div>
  </div>

@include('partials.foot')
