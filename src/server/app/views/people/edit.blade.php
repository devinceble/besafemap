@extends('layouts.scaffold')

@section('main')

<h1>Edit Person</h1>
{{ Form::model($person, array('method' => 'PATCH', 'route' => array('people.update', $person->id))) }}
	<ul>
        <li>
            {{ Form::label('firstname', 'Firstname:') }}
            {{ Form::text('firstname') }}
        </li>

        <li>
            {{ Form::label('lastname', 'Lastname:') }}
            {{ Form::text('lastname') }}
        </li>

        <li>
            {{ Form::label('middlename', 'Middlename:') }}
            {{ Form::text('middlename') }}
        </li>

        <li>
            {{ Form::label('age', 'Age:') }}
            {{ Form::input('number', 'age') }}
        </li>

        <li>
            {{ Form::label('gender', 'Gender:') }}
            {{ Form::text('gender') }}
        </li>

        <li>
            {{ Form::label('cell_number', 'Cell_number:') }}
            {{ Form::text('cell_number') }}
        </li>

        <li>
            {{ Form::label('person_status', 'Person_status:') }}
            {{ Form::text('person_status') }}
        </li>

        <li>
            {{ Form::label('photo', 'Photo:') }}
            {{ Form::text('photo') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('people.show', 'Cancel', $person->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
