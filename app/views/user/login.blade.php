@extends('layout.template')

@section('content')

<h3>Please Login</h3>
{{ Form::open(array('route' => 'loginck','class'=>'form-horizontal','role'=>'form')) }}
	<div>
		{{ Form::label('username', 'Username:') }}
		{{ Form::text('username') }}
	</div>

	<div>
		{{ Form::label('password', 'password:') }}
		{{ Form::password('password') }}
	</div>

	<div>
		{{ Form::submit() }}
	</div>
{{ Form::close() }}


@stop