@extends('layout.template')

	@section('content')
		<h2>Upload a flier for your event</h2>
		{{$evnt->id}}

		{{Form::open(array('files'=>true,'route'=>'postupload','class'=>'form-horizontal','role'=>'form'))}}		
		<div class=form-group> 
			<div class="well well-lg">
				{{Form::label('flier','Upload a flier:',array('class'=>'control-label col-md-2'))}}
				
				<div class="col-md-4">
					{{Form::file('flier')}}
					{{Form::hidden('evnt_id',$evnt->id)}}
				</div>
				{{Form::submit()}}
			</div>
		</div>
		{{Form::close()}}


	@stop