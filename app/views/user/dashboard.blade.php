@extends('layout.template')
	@section('content')
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">
  <div class="panel-heading"><h1> Welcome.. .{{Auth::user()->username}}</h1></div>
  <div class="panel-body">
    
        	 

        	 <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#home">Events</a></li>
         <!--  <li><a href="#rsvp">Profile</a></li>
          <li><a href="#messages">Messages</a></li>
          <li><a href="#settings">Settings</a></li> -->
        </ul>

        <div class="tab-content">
          @include('includes.myevents')
          @include('includes.rsvp')
          <div class="tab-pane" id="messages">message</div>
          <div class="tab-pane" id="settings">lo</div>
        </div>
      </div>
        <div class="panel-footer"></div>
</div>
   </div>

 </div>
</div>

	@stop



