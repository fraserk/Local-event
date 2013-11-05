@extends('layout.template')

	@section('content')
		
	<div class="row">

		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">{{$evnt->name}} </div>
					<div class="panel-body">		
						{{$evnt->detail}}
					</div>
			</div>
			
			{{HTML::linkroute('evnts.edit','edit',$evnt->id)}} | 

			{{Form::open(array('url'=>route('evnts.destroy',$evnt->id),'method'=>'DELETE'))}}

			{{Form::submit('delete',array('class'=>'button'))}}

			{{Form::close()}}
		</div>

		<!-- sidebar -->
		<div class="col-md-5">
				<div class="panel panel-default">
					  <div class="panel-heading">When and Where</div>
							  <div class="panel-body">
							    {{$evnt->when}} @ <br />
							    {{$evnt->venue->venue_name}}
							  </div>
				</div>	

				<div class="panel panel-default">
					  <div class="panel-heading">Flier</div>
							  <div class="panel-body">
								    @if($evnt->flier)
										
											<img src={{asset('/uploads/'.$evnt->id .'/'.$evnt->flier) }} width="340px">									
											@else
											no image
									@endif
							  </div>
				</div>				
		</div>
	</div>
	
	@stop
