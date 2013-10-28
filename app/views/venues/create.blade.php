<!-- Button trigger modal -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
{{ Form::open(array('route' => 'venues.store','class'=>'add_venue')) }}
        <div>
                {{ Form::label('venue_name', 'Venue name:') }}
                {{ Form::text('venue_name','',array('id'=>'venue_name')) }}
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