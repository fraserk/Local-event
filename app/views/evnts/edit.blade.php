@extends('layout.template')

  @section('head')
  <title>Get NYC Events-{{count($evnt)>0 ? $evnt->name :'Invalid Event ID' }}</title>
  <meta content="Get NYC Events, get infomation about local events in NYC and Brooklyn" name="description">
  @stop
    @section('content')


    <div class="row">
@if (count($evnt)>0)
        <div class="panel panel-default">
          <div class="panel-heading"><h2>Edit Event</h2> </div>
           {{ Form::model($evnt,array('route' => array('evnts.update',$evnt->slug),'method'=>'PUT','class'=>'form-horizontal','role'=>'form')) }}
          <div class="panel-body">    
              <div class="col-md-8 col-md-offset-2">
               
                   
                 @include('includes._evnt_form')


               
             
                
          </div>
        </div>
 <div class="panel-footer">   
                  <div class='col-md-12 col-md-offset-9'>          
                           <p>{{ Form::submit('Edit Event',array('class'=>'btn btn-primary')) }} Cancel</p> 
                         </div>
                    </div>
        {{ Form::close() }}
      </div>    
   


 @include('venues.create')
 @include('inclues.evnt_js')
@else
  
  Invalid Event ID..
  @endif
    @stop



