@extends('layout.template')
	@section('content')
		 <div class="row">

        <div class="panel panel-default">
          <div class="panel-heading"><h2>Delete Event</h2> </div>
			{{Form::open(['route'=>['evnts.destroy', $evnt->slug],'method'=>'delete','role'=>'form','class'=>'form-horizontal'])}}

		          </div>
        
 	<div class="panel-footer">   
      <div class='col-md-12 col-md-offset-9'>
		{{Form::submit('Delete this Event',['class'=>'btn btn-denger'])}}
	</div>
	</div>
		{{Form::close()}}
	</div>
	@stop