@extends('layouts.scaffold')

@section('main')

<h1>Create Location</h1>

{{ Form::open(array('route' => 'locations.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


