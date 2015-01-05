@include('partials.head')

<div class="row">
  <div class="large-12 medium-12 small-12 column">

    <h1>Update your account<h1>

      @if($errors->any())
      <p>Some fields did not validate:</p>
      @endif

      @if (Session::get('status'))
      <div class="alert-box success">{{ Session::get('status') }}</div>
      @endif

      {{ Form::open(array('url' => 'users/updateAccount')) }}

      {{Form::label('firstname', 'First Name:')}}
      {{Form::text('firstname', $user->firstname)}}
      @if($errors->first('firstname')) <span class="error">{{ $errors->first('firstname') }}</span> @endif

      {{Form::label('lastname', 'Last Name:')}}
      {{Form::text('lastname', $user->lastname)}}
      @if($errors->first('lastname')) <span class="error">{{ $errors->first('lastname') }}</span> @endif

      {{Form::label('email', 'Email:')}}
      {{Form::text('email', $user->email)}}

      {{Form::label('password', 'Password:')}}
      {{Form::password('password')}}
      @if($errors->any()) <span class="error">{{ $errors->first('password') }}</span> @endif

      <input type="submit" value="Update" class="button expand" />

      {{ Form::close() }}

    </div>
  </div>

  @include('partials.foot')
