@extends('layout.template')

@section('content')
<div class="row">
@foreach($evnts as $e)
	
	   <div class="col-md-3 divider">
	    
		    <div class="thumbnail">
		         <img src="http://placehold.it/300x200">
		    
			    <div class="caption">
			                            <h4>title </h4>
			                            <small>Taj Lounge @ 7:00 AM</small>
			                            <p>www.GAMETIGHTNY.com Fridays at Club Amnesia NYC Guestlist - </p>
			    </div>
			</div>
		</div>
	
	@endforeach
</div>
@stop


