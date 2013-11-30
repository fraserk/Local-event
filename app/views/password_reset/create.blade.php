@extends('layout.template')
@section('head')
	<title>Get NYC Events-Password Reminder/title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Upload iamge" name="description">
	@stop
	@section('content')
	<div class="row">

		<div class="col-md-7 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Recover Lost Password </div>
					<div class="panel-body">		
						{{Form::open(['route'=>'password_reset.store','class'=>'form','role'=>'form'])}}
							<div class="form-group">
								<div class="col-xs-8 ">
									<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
									{{Form::text('email',null,['class'=>'form-control','required'=>'true'])}}
									</div>
								</div>
							</div>
									<div class="form-group">
									{{form::submit('Reset Password',['class'=>'btn btn-primary'])}}
									</div>

								   <div class="{{$errors->has('email')? 'alert alert-warning' : ''}}">{{$errors->first('email') }}</div>
									@if (Session::has('error'))
   										<div class="alert alert-warning"> {{ trans(Session::get('reason')) }}</div>
									@elseif (Session::has('success'))
									    An e-mail with the password reset has been sent.
									@endif	
						{{Form::close()}}
					</div>
			</div>		
		</div>
	</div>

	@stop