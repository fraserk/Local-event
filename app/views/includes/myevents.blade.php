<div class="tab-pane active" id="home">

	<br />
		<table class="table table-striped  table-condensed table-hover">
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
			@if (count($evnts))	
				@foreach($evnts as $e)
			
				<tr>
					<td>{{$e->id}}</td>
					<td>{{$e->name}}</td>
					<td>{{$e->venue->venue_name}}</td>
					<td>{{$e->when}}</td>
					<td> <a href={{URL::route('evnts.edit',$e->id)}}><span class="glyphicon glyphicon-edit"></span></a> |<a href={{URL::route('upload',$e->id)}}><span class="glyphicon glyphicon-upload"></span></a>|</span><a href={{URL::route('evnts.destroy',$e->id)}}><span class="glyphicon glyphicon-trash"></span><a/></td>

				</tr>
			@endforeach	
			</tbody>

		</table>

		@else
			You have posted any event as yet....{{HTML::linkroute('evnts.create','post one now') }}
		@endif
	</div>

