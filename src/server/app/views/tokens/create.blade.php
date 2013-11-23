@extends('layouts.scaffold')

@section('main')

<h1>Create Token</h1>

{{ Form::open(array('route' => 'tokens.store')) }}
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


