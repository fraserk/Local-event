@extends('layout.template')
	@section('content')
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Create new Password </div>
				{{Form::open(['url'=>'password_reset/reset/'.$token,'class'=>'form-horizontal','role'=>'form'])}}
					<div class="panel-body">		
						
						@if (Session::has('error'))
						    <div class="alert alert-warning">{{ trans(Session::get('reason')) }}</div>
						@endif
						{{Form::hidden('token',$token)}}
							<div class="form-group">
								<div class="col-xs-8">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
										{{Form::text('email',null,['class'=>'form-control','required'=>'true'])}}
									</div>
								</div>
							</div>
							<div class="form-group">
									<div class="col-xs-8 ">
										<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										{{Form::password('password',['class'=>'form-control'])}}
									</div>
								</div>
							</div>
							<div class="form-group">
									<div class="col-xs-8 ">
										<div class="input-group">

									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									{{Form::password('password_confirmation',['class'=>'form-control'])}}
									</div>
								</div>
							</div>
									
						
					</div>
					
					<div class="panel-footer">
									{{form::submit('Reset Password',['class'=>'btn btn-primary'])}}


					{{Form::close()}}
					</div>
			</div>		
		</div>
	</div>

	@stop