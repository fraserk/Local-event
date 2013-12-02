@extends('layout.template')
@section('head')
  <title>Get NYC Events - error</title>
  <meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn. Create a Local Event" name="description">

@stop
@section('content')
<div class="row">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Error.....</div>
  <div class="panel-body">
    The page you're looking for is not longer available.  Click  {{link_to_route('evnts.index','Here')}} to return to the home page or {{link_to_route('evnts.create','Post a new Event')}}.  Thanks
  </div>
</div>
@stop