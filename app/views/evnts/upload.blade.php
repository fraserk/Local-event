@extends('layout.template')

	@section('content')
	<div class="row">
			<h2>Upload a flier for your event</h2>

		@if ($errors->any())
		    <ul>
		        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
		    </ul>
		@endif

		{{Form::open(array('files'=>true,'route'=>'postupload','role'=>'form'))}}		
		<div class=" well well-lg col-md-8"> 
				<div class="input-group">
				{{Form::label('flier','Upload a flier:',array('class'=>'control-label'))}}
							
					{{Form::file('flier')}}
					{{Form::hidden('evnt_id',$evnt->id)}}
			<br />
					{{Form::submit('Upload File',array('class'=>'btn btn-primary'))}}
				
		</div>
		
		{{Form::close()}}

		@if($evnt->flier)
		<br />
			<img src={{asset('/uploads/'.$evnt->id .'/'.$evnt->flier)}}>
			<h4>Thumbnail</h4>
			<img src={{asset('/uploads/'.$evnt->id .'/' .'thumb_' .$evnt->flier)}}>
			@else
			no image
			@endif
	</div>


	@stop