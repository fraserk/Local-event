@extends('layout.template')
@section('content')
	<div class="row">

        <div class="panel panel-default">
          <div class="panel-heading"><h2>Delete Event</h2> </div>
			{{Form::open(['route'=>['evnts.destroy', $evnt->slug],'method'=>'delete','role'=>'form','class'=>'form-horizontal'])}}
				<div class="panel-body">    
               <p>This will delete event <strong>{{$evnt->name}}</strong> from our site..</p>
		      </div>
        
			 	<div class="panel-footer">   
					{{Form::submit('Delete this Event',['class'=>'btn btn-danger'])}}
				</div>
			{{Form::close()}}
		</div>
	</div>
@stop