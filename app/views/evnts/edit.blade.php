@extends('layout.template')
    @section('content')

        {{ Form::model($evnt,array('url' => 'evnts/update','method'=>'PUT')) }}
            <div>
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name') }} 
            </div>

            <div>
                {{ Form::label('venue', 'Venue:') }}
                {{ Form::text('venue') }}
            </div>

            <div>
                {{ Form::label('when', 'When:') }}
                {{ Form::text('when') }}
            </div>

            <div>
                {{ Form::label('detail', 'Detail:') }}
                {{ Form::textarea('detail') }}
            </div>

            <div>
                {{ Form::submit('Edit') }}
                {{Form::hidden('id',$evnt->id)}}
            </div>
        {{ Form::close() }}
    @stop

