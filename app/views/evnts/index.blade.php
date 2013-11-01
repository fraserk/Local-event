@extends('layout.template')

@section('content')
<div class="row">
@foreach($evnts as $e)
	
	   <div class="col-md-3 divider">
	    
		    <div class="thumbnail">
		    	@if($e->flier)
		    	<img src={{asset('/uploads/' .$e->id .'/thumb_' .$e->flier)}}>
		    	@else
				<img src="http://placehold.it/300x200">
				@endif
		         
		    
			    <div class="caption">
			                            <h4>{{HTML::linkroute('evnts.show',$e->name,$e->id)}} </h4>
			                            {{$e->id}}
			                            <small>Taj Lounge @ 7:00 AM</small>
			                            <p>www.GAMETIGHTNY.com Fridays at Club Amnesia NYC Guestlist - </p>
			    </div>
			</div>
		</div>
	
	@endforeach
</div>
@stop


