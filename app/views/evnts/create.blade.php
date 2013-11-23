@extends('layout.template')
    @section('content')


    <div class="row">

        <div class="panel panel-default">
          <div class="panel-heading"><h2>Creat A Event</h2> </div>
          <div class="panel-body">    
              <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('route' => 'evnts.store','class'=>'','role'=>'form')) }}
                   
                 @include('includes._evnt_form')


               
                </div>
              </div>
                <div class="panel-footer">   
                  <div class='col-md-12 col-md-offset-9'>          
                           <p>{{ Form::submit('Create Event',array('class'=>'btn btn-primary')) }} Cancel</p> 
                         </div>
                    </div>
                {{ Form::close() }}
          </div>
        </div>
      </div>    
   


 @include('venues.create')

    @stop

