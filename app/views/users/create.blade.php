<h1>Create an user<h1>

<p><em>@if($errors->any()) {{$errors->first()}} @endif</em></p>

{{ Form::open(array('url' => 'users/store')) }}

{{Form::label('firstname', 'First Name:')}}
{{Form::text('firstname')}}

{{Form::label('lastname', 'Last Name:')}}
{{Form::text('lastname')}}

{{Form::label('email', 'Email:')}}
{{Form::text('email')}}

{{Form::label('password', 'Password:')}}
{{Form::password('password')}}

<input type="submit" value="Create" class="button expand" />

{{ Form::close() }}
