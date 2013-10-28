@extends('layout.template')
	@section('content')
	 <h1> Welcome.. .{{Auth::user()->username}}</h1>

	 <ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">Home</a></li>
  <li><a href="#rsvp">Profile</a></li>
  <li><a href="#messages">Messages</a></li>
  <li><a href="#settings">Settings</a></li>
</ul>

<div class="tab-content">
  @include('includes.myevents')
  @include('includes.rsvp')
  <div class="tab-pane" id="messages">message</div>
  <div class="tab-pane" id="settings">lo</div>
</div>

	@stop



