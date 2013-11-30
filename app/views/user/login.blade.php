@extends('layout.template')
@section('head')
	<title>Get NYC Events-Login</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Login to your account" name="description">
	@stop
@section('content')
	<div class='row'>
		
		<div class="col-md-5 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Please Login.</h3> </div>
						{{ Form::open(array('route' => 'loginck','class'=>'form-horizontal','role'=>'form')) }}
			
				<div class="panel-body">

				<div class="form-group">
				<div class="col-xs-10">
					<div class="{{Session::has('message')? 'alert alert-warning' : ''}}">{{Session::get('message')}}</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						{{ Form::text('username',null,['class'=>'form-control']) }}
					</div>
				</div>
				</div>
				<div class="form-group">
				<div class='col-xs-10'>
					
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				{{ Form::password('password',['class'=>'form-control']) }}
				</div>
			</div>
					</div>
				<div class="checkbox">
					<label>
						 {{form::checkbox('remember')}} Remember Me
					</label>
				</div>
		
					
			</div>
			
			<div class="panel-footer">{{ Form::submit('login',['class'=>'btn btn-primary']) }}
				{{link_to_route('user.create','Sign-up')}} | {{link_to_route('password_reset.create','Forgot password?')}}
			</div>
			
		{{ Form::close() }}
					
			</div>		
		</div>
		</div>
	

	
@stop