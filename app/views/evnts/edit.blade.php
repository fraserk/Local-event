@extends('layout.template')
    @section('content')

         <div class="page-header">
        <h1>Edit A Event</h1>
    </div>

    <div class="row">

        

           {{ Form::model($evnt,array('route' => array('evnts.update',$evnt->id),'method'=>'PUT','class'=>'form-horizontal','role'=>'form')) }}
            
            
                <div class="form-group">
                  {{ Form::label('name', 'Event Name:',array('class'=>'control-label col-md-2')) }}
                  <div class="col-md-4">
                  {{ Form::text('name',Input::old('name'),array('class'=>'form-control')) }} 
                  <small class="{{$errors->has('name')? 'has-error' : ''}}">{{$errors->first('name') }}</small>
                  </div>
                </div>
            

            <div class="form-group">
                  {{ Form::label('venue', 'Venue:',array('class'=>'control-label col-md-2')) }}
                <div class="col-md-4">
                  
                    {{ Form::select('venue',$venues)}} <a href="" data-toggle="modal" data-target="#myModal">Add a New Venue</a>
                   
                    <div id="kim"></div>
                </div>
            </div>



             <div class="form-group">
                {{ Form::label('when', 'When:',array('class'=>'control-label col-md-2')) }}
                <div class="col-md-4">
                    {{ Form::text('when',Input::old('when'),array('class'=>'form-control col-md-2','type'=>'date')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('detail', 'Detail:',array('class'=>'control-label col-md-2')) }}
                <div class="col-md-4">
                    {{ Form::textarea('detail',Input::old('detail'),array('class'=>'form-control col-md-4')) }}
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-4">
                     {{ Form::submit('Create Event',array('class'=>'btn btn-primary')) }}
                </div>
             </div>
                
           
        {{ Form::close() }}


    </div>

 @include('venues.create')
    @stop

