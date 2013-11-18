@extends('layout.template')
    @section('content')


    <div class="row">

        <div class="panel panel-default">
          <div class="panel-heading"><h2>Edit Event</h2> </div>
          <div class="panel-body">    
              <div class="col-md-8 col-md-offset-2">
                {{ Form::model($evnt,array('route' => array('evnts.update',$evnt->id),'method'=>'PUT','class'=>'form-horizontal','role'=>'form')) }}
                   
                 @include('includes._evnt_form')


                <div class="form-group">
                  <div class="col-xs-12">              
                           <p>{{ Form::submit('Edit Event',array('class'=>'btn btn-primary')) }}</p>
                    </div>
                </div>
              </div>

                {{ Form::close() }}
          </div>
        </div>
      </div>    
   


 @include('venues.create')

    @stop



