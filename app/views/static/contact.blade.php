@extends('layout.template')
@section('head')
	<title>Get NYC Events-Contact us</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Contact us" name="description">
	@stop
	@section('content')
		<div class="col-md-5 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Contact Us</h2> </div>						

						{{ Form::open(array('to' => '/contact','class'=>'form','role'=>'form')) }}
						<div class="panel-body">
						<p>Have a question?  Fill out this form and I'll get back to you asap.  Thanks</p>
						<div class="{{$errors->has('email')? 'alert alert-warning' : ''}}">{{$errors->first('email') }}</div>
						<div class="{{$errors->has('name')? 'alert alert-warning' : ''}}">{{$errors->first('name') }}</div>
						<div class="{{$errors->has('detail')? 'alert alert-warning' : ''}}">{{$errors->first('detail') }}</div>	

						@if(Session::has('message'))
							<div class="alert alert-info">{{session::get('message')}}</div>
							@endif
							<div class="form-group">
                  				<div class="col-xs-12"> 
								{{Form::label('name','Nam:',array())}}
								{{ Form::text('name',null,array('class'=>'form-control','placeholder'=>'Name')) }}
								
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
								{{form::label('message','Message:',array())}}
								{{form::textarea('detail',null,array('class'=>'form-control','Placeholder'=>'Message'))}}
								
							</div>
						</div>
					</div>	
							<div class='panel-footer'>
								
								{{ Form::submit('Submit',array('class'=>'btn btn-primary')) }} 
								{{ Form::close() }}
					
							</div>
			</div>
		</div>
	@stop