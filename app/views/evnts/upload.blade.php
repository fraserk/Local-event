@extends('layout.template')
@section('head')
	<title>Get NYC Events-Upload Image</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Upload iamge" name="description">
	@stop
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

				<p>View your event detail page {{link_to_route('evnts.show','Here',$evnt->slug)}} </p>
					
				{{Form::label('flier','Upload a flier:',array('class'=>'control-label'))}}
							
					{{Form::file('flier')}}
					{{Form::hidden('evnt_id',$evnt->slug)}}
			<br />
					{{Form::submit('Upload File',array('class'=>'btn btn-primary'))}}
				
		</div>
		
		{{Form::close()}}

		@if($evnt->flier)
		<br />
			<?php 

			//$img = getimagesize(asset('/uploads/'.$evnt->id .'/'.$evnt->flier));
			// echo ($img[0]);
			?>
			<br />
			<img src={{Cloudy::show($evnt->flier, array('width' => 350, 'height' => 300, 'crop' => 'fit', 'radius' => 0))}}>
			
			@endif
	</div>


	@stop