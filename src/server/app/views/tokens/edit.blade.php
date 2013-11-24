@extends('layouts.scaffold')

@section('main')

<h1>Edit Token</h1>
{{ Form::model($token, array('method' => 'PATCH', 'route' => array('tokens.update', $token->id))) }}
	<ul>
        <li>
            {{ Form::label('private', 'Private:') }}
            {{ Form::text('private') }}
        </li>

        <li>
            {{ Form::label('public', 'Public:') }}
            {{ Form::text('public') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tokens.show', 'Cancel', $token->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
