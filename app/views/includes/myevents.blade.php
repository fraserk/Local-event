		



		<div class="tab-pane active" id="home">

			<br />
				@if (count($evnts))	<table class="table table-striped  table-condensed table-hover">
					<thead>
						<tr style="font-weight:bold">
							<td>ID</td>
							<td>Event Name</td>
							<td>Venue</td>
							<td>Date</td>
							<td>Action</td>


						</tr>

					</thead>
					<tbody>
					
						@foreach($evnts as $e)
					
						<tr>
							<td>{{$e->id}}</td>
							<td>{{$e->name}}</td>
							<td>{{$e->venue->venue_name}}</td>
							<td>{{$e->when->toDayDateTimeString()}}</td>
							<td> <a href={{URL::route('evnts.edit',$e->slug)}}><span class="glyphicon glyphicon-edit"></span></a> |<a href={{URL::route('upload',$e->slug)}}><span class="glyphicon glyphicon-upload"></span></a>|</span><a href={{URL::route('remove',$e->slug) }}><span class="glyphicon glyphicon-trash"></span><a/></td>

						</tr>
					@endforeach	
					</tbody>

				</table>	
				<div class"row">
				<div class="col-md-12">
							{{$evnts->links()}}
				</div>
			</div>

				@else
					You have posted any event as yet....{{HTML::linkroute('evnts.create','Create a New Event') }}
				@endif
			</div>

