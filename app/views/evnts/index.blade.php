@extends('layout.template')

@section('head')
	<title>Get NYC Events</title>
	<meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn" name="description">

@stop
@section('content')
	<div class="row ">
		
	    <div class="col-md-12 coming">
	  <h1 class="splash"> 
	    	Discover great local events in the New York Area. See what's happening this weekend..   
	    </h1>
	    		<span class="label label-info">UPCOMING EVENTS</span> <br />
	    	
		</div>
		
			@foreach($evnts as $e)
		
				   <div class="col-md-3 divider">
				    
					    <div class="thumbnail">
					    	<br />
					    	@if($e->flier)
					    	<img src={{asset('/uploads/' .$e->id .'/thumb_' .$e->flier)}}>
					    	@else
							<img src="http://placehold.it/300x200">
							@endif
					         
					    
						    <div class="caption">
						                            <h4>{{HTML::linkroute('evnts.show', Str::Limit($e->name,$limit=14, $end ='..'),$e->slug)}} </h4>
						                            
						                           
						                            <p>{{Str::Limit($e->detail,$limit=45,$end='...')}}</p>
						    </div>
						    <div class="event_footer">
						    	<span class="glyphicon glyphicon-time"></span> 
						    	{{ $e->when->toDayDateTimeString() }}<br/>
						    	<span class="glyphicon glyphicon-map-marker"></span> {{$e->venue->venue_name}}
						    	
						    </div>
						</div>
					</div>
		
			@endforeach

		
				
			
	</div> 
	<div class"row">
		<div class="col-md-12">
					{{$evnts->links()}}
		</div>
	</div>
@stop


