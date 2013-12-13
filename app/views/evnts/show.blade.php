@extends('layout.template')
	
	@section('head')
	<title>Get NYC Events-{{count($evnt)>0 ? $evnt->name :'Invalid Event ID' }}</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn" name="description">
	@stop
	
	@section('content')
		
	<div class="row">
@if (count($evnt)>0)
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">{{$evnt->name}} </div>
					<div class="panel-body">		
						{{nl2br($evnt->detail)}}
					</div>
			</div>		
		</div>

		<!-- sidebar -->
		<div class="col-md-5">
				<div class="panel panel-default">
					  <div class="panel-heading">When/Where</div>
							  <div class="panel-body">
							    <strong>{{$evnt->when->toDayDateTimeString()}}</strong> <br />
							   <div class="well well-sm">
							   	<h3> {{$evnt->venue->venue_name}}</h3>
							    {{$evnt->venue->address}}<br />
							    {{$evnt->venue->phone}}
								</div>
							  </div>
				</div>	

				<div class="panel panel-default">
					  <div class="panel-heading">Flier/Poster</div>
							  <div class="panel-body">
								    @if($evnt->flier)
										
											<img src={{Cloudy::show($evnt->flier, array('width' => 600, 'height' => 350, 'crop' => 'fit', 'radius' => 0))}}>									
											@else
											no image
									@endif
							  </div>
				</div>				
		</div>
	</div>
	@else
	
	Invalid Event ID..
	@endif
	
	@stop
