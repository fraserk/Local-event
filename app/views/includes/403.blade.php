@extends('layout.template')

@section('content')
<div class="row">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Error.....</div>
  <div class="panel-body">
    An Error occured.  Click  {{link_to_route('evnts.index','Here')}} to return to the home page or {{link_to_route('evnts.create','Post a new Event')}}.  Thanks
  </div>
</div>
@stop