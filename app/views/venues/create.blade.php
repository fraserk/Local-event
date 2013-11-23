<!-- Button trigger modal -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Search for venue</h4>
        </div>
        <div class="modal-body">
        {{ Form::open(array('route' => 'venues.store','class'=>'add_venue','role'=>'form')) }}
    <div class='form-group'>
      {{form::label('Search','Find Venue:',array('class'=>'control-label'))}}
      
      {{Form::text('Search','',array('id'=>'location_search','class'=>'form-control'))}}
    </div>
      

    <div class="form-group">
      <div class="col-sm-8">
        {{form::label('venue_name','Venue Name:',array('class'=>'control-label'))}}
            {{Form::text('venue_name','',array('class'=>'form-control','required'=>'true'))}}
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-9">
      {{form::label('address','Address:',array('class'=>'control-label'))}}
      
      {{Form::text('address','',array('class'=>'form-control'))}}
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-4">
        {{form::label('city','City:',array('class'=>'control-label'))}}
        {{Form::text('city','',array('class'=>'form-control'))}}
      </div>

      <div class="col-sm-4">
        {{form::label('state','state:',array('class'=>'control-label'))}}
        {{Form::text('state','',array('class'=>'form-control'))}}
      </div>
      <div class="col-sm-4">
        {{form::label('zipcode','zipcode:',array('class'=>'control-label'))}}
        {{Form::text('zipcode','',array('class'=>'form-control'))}}
      </div>
      
      
    </div>

    <div class="form-group">
      <div class="col-sm-6">
      {{form::label('phone','Phone #:',array('class'=>'control-label'))}}
      
      {{Form::text('phone','',array('class'=>'form-control'))}}
      <br />
      </div>
    </div>

    <div class='row'>
      <div class="col-md-12">
        <br />
      <div id="map" class="" style="width: 540px; height: 200px"></div>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&libraries=places" type="text/javascript"></script>
        {{Form::hidden('lat',Input::old('location'),array('id'=>'lat'))}} 
        {{Form::hidden('lng',Input::old('location'),array('id'=>'lng'))}} 
      
      </div>
    </div>
    

{{ Form::close() }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="submit">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->