@extends('layouts.scaffold')

@section('main')

<h1>Edit Location</h1>
{{ Form::model($location, array('method' => 'PATCH', 'route' => array('locations.update', $location->id))) }}
	<ul>
        <li>
            {{ Form::label('latitude', 'Latitude:') }}
            {{ Form::text('latitude') }}
        </li>

        <li>
            {{ Form::label('longtitude', 'Longtitude:') }}
            {{ Form::text('longtitude') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('locations.show', 'Cancel', $location->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
