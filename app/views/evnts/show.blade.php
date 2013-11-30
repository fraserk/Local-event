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
						{{$evnt->detail}}
					</div>
			</div>		
		</div>

		<!-- sidebar -->
		<div class="col-md-5">
				<div class="panel panel-default">
					  <div class="panel-heading">When and Where</div>
							  <div class="panel-body">
							    {{$evnt->when->toDayDateTimeString()}} @ <br />
							    {{$evnt->venue->venue_name}}
							  </div>
				</div>	

				<div class="panel panel-default">
					  <div class="panel-heading">Flier</div>
							  <div class="panel-body">
								    @if($evnt->flier)
										
											<img src={{asset('/uploads/'.$evnt->id .'/'.$evnt->flier) }}>									
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
