
 <div class="form-group">
                  <div class="col-xs-12"> 
                  {{ Form::label('name', 'Event Name:',array('class'=>'control-label')) }} 
                   {{ Form::text('name',null,array('class'=>'form-control','placeholder'=> 'Enter Event Name.')) }} 
                   <div class="{{$errors->has('name')? 'alert alert-warning' : ''}}">{{$errors->first('name') }}</div>
                  </div>        
                </div>
            

            <div class="form-group">
              <div class="col-xs-12"> 
                  {{ Form::label('venue', 'Event Venue:',array('class'=>'control-label')) }}
                   {{ Form::select('venue',$venues, isset($evnt) ? $evnt->venue_id : null,array('class'=>'form-control'))}} 
                   <a href="" data-toggle="modal" data-target="#myModal">Add a New Venue</a>
                    <div id="kim"></div>  
              </div>            
            </div>
            <div class="form-group">
            <div class="input-group">
                  <div class="col-xs-12"> 
                 {{ Form::label('When', 'Event Date?:',array('class'=>'control-label')) }}
                  </div>
           
                    <div class="col-xs-4">  
                        <small>Month</small>                      
                       {{Form::selectMonth('month',isset($evnt) ? $evnt->when->month : null,array('class'=>'form-control '))}}
                     </div>
            
           
                    <div class="col-xs-2"> 
                      <small>Day.</small>
                  {{form::selectRange('day','01','31',isset($evnt) ? $evnt->when->day : null,array('class'=>'form-control'))}}
                     </div>
                  
                 
                    <div class="col-xs-3"> 
                      <small/>Year</small>
                  {{Form::selectYear('year','2013','2016',isset($evnt) ? $evnt->when->year : null,array('class'=>'form-control'))}}
                    </div>

                      <div class="col-xs-3"> 
                        <small/>Time</small>
                        <div class="input-group input-append bootstrap-timepicker">
                            {{Form::text('when',isset($evnt) ? $evnt->when->hour .':' .$evnt->when->minute : null,array('class' => 'form-control', 'id'=>'when'))}}                             
                               <span class="add-on input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                
                        </div>
                      </div>
            </div>
          </div>

            
            <div class="form-group">            
                  <div class="col-xs-12">               
                    {{Form::label('Admission','Admission:',['class'=>'control-label'])}}                   
                    {{Form::text('admission',null,['class'=>'form-control','placeholder'=>'Enter Admission Info.'])}}
                <div class="{{$errors->has('admission')? 'alert alert-warning' : ''}}">{{$errors->first('admission') }}</div>
              </div>              
            </div>
             
             <div class="form-group">
               <div class="col-xs-12"> 
                {{ Form::label('detail', 'Detail:',array('class'=>'control-label')) }}
                {{ Form::textarea('detail',null,array('class'=>'form-control')) }}
                <div class="{{$errors->has('detail')? 'alert alert-warning' : ''}}">{{$errors->first('detail') }}</div>
                </div>
            </div>


