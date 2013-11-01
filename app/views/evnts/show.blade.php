@extends('layout.template')

	@section('content')
		
	<div class="row">

		<div class="col-md-8">
			<div class="head">
				<h3>{{$evnt->name}} </h3>
			</div>

			
			<p>{{$evnt->detail}}</p>

			<hr />
			{{HTML::linkroute('evnts.edit','edit',$evnt->id)}} | 

			{{Form::open(array('url'=>route('evnts.destroy',$evnt->id),'method'=>'DELETE'))}}

			{{Form::submit('delete',array('class'=>'button'))}}

			{{Form::close()}}
		</div>

		<!-- sidebar -->
		<div class="col-md-4">
			<div class="panel">
				<span class="label ">where:</span>{{$evnt->venue}} <span class="label alert">when:{{date("M,d",strtotime($evnt->when))}}</span>
			</div>
		</div>
	</div>
	@stop
