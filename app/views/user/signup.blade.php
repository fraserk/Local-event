@extends('layout.template')
@section('head')
	<title>Get NYC Events-Sign-up</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Create a new get nyc events account." name="description">
	@stop
@section('content')

<div class="col-md-5 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Sign-up</h2> </div>						

						{{ Form::open(array('route' => 'user.store','class'=>'form','role'=>'form')) }}
						<div class="panel-body">

						<div class="{{$errors->has('email')? 'alert alert-warning' : ''}}">{{$errors->first('email') }}</div>
						<div class="{{$errors->has('username')? 'alert alert-warning' : ''}}">{{$errors->first('username') }}</div>
						<div class="{{$errors->has('password')? 'alert alert-warning' : ''}}">{{$errors->first('password') }}</div>	
							<div class="form-group">
                  				<div class="col-xs-12"> 
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								{{ Form::text('username',null,array('class'=>'form-control','placeholder'=>'Username')) }}
								</div>
								</div>
							</div>

							<div class="form-group">
                  				<div class="col-xs-12"> 
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
								{{ Form::text('email',null,array('class'=>'form-control','Placeholder'=>'Email')) }}
								</div>
							</div>
							</div>

							<div class="form-group">
                  				<div class="col-xs-12"> 
								<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								{{form::password('password',array('class'=>'form-control','Placeholder'=>'Password'))}}
								</div>
							</div>
						</div>
							<div class='panel-footer'>
								
								{{ Form::submit('Submit',array('class'=>'btn btn-primary')) }} {{link_to_route('login','Login')}}
							</div>
						{{ Form::close() }}
					
			</div>		
		</div>


@stop



