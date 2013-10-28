@extends('layout.template')

@section('content')

<h3>Please Sign-up</h3>
{{ Form::open(array('route' => 'user.store','class'=>'form-horizontal','role'=>'form')) }}
	<div>
		{{ Form::label('username', 'Username:') }}
		{{ Form::text('username') }}
	</div>

	<div>
		{{ Form::label('email', 'Email:') }}
		{{ Form::text('email') }}
	</div>

	<div>
		{{form::label('password', 'Password:')}}
		{{form::password('password')}}

	</div>

	<div>
		
		{{ Form::submit() }}
	</div>
{{ Form::close() }}


@stop