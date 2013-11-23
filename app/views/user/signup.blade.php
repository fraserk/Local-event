@extends('layout.template')

@section('content')

<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Sign-up</h2> </div>
						

						{{ Form::open(array('route' => 'user.store','class'=>'form-horizontal','role'=>'form')) }}
						<div class="panel-body">
						<div class="{{$errors->has('email')? 'alert alert-warning' : ''}}">{{$errors->first('email') }}</div>
						<div class="{{$errors->has('username')? 'alert alert-warning' : ''}}">{{$errors->first('username') }}</div>
						<div class="{{$errors->has('password')? 'alert alert-warning' : ''}}">{{$errors->first('password') }}</div>	
							<div class="form-group">
                  				<div class="col-xs-12"> 
								{{ Form::label('username', 'Username:',array('class'=>'control-label')) }}
								{{ Form::text('username','',array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
                  				<div class="col-xs-12"> 
								{{ Form::label('email', 'Email:',array('class'=>'control-label')) }}
								{{ Form::text('email','',array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
                  				<div class="col-xs-12"> 
								{{form::label('password', 'Password:',array('class'=>'control-label'))}}
								{{form::password('password',array('class'=>'form-control'))}}
								</div>
							</div>
						</div>
							<div class='panel-footer'>
								
								{{ Form::submit('Submit',array('class'=>'btn btn-primary')) }}
							</div>
						{{ Form::close() }}
					
			</div>		
		</div>


@stop



