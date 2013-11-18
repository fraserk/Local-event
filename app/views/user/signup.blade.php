@extends('layout.template')

@section('content')

<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Sign-up</h2> </div>
					<div class="panel-body">		
						{{ Form::open(array('route' => 'user.store','class'=>'form-horizontal','role'=>'form')) }}
							
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

							<div>
								
								{{ Form::submit('Submit',array('class'=>'btn btn-primary')) }}
							</div>
						{{ Form::close() }}
					</div>
			</div>		
		</div>


@stop



