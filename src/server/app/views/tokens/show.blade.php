@extends('layouts.scaffold')

@section('main')

<h1>Show Token</h1>

<p>{{ link_to_route('tokens.index', 'Return to all tokens') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Private</th>
				<th>Public</th>
				<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $token->private }}}</td>
					<td>{{{ $token->public }}}</td>
					<td>{{{ $token->status }}}</td>
                    <td>{{ link_to_route('tokens.edit', 'Edit', array($token->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tokens.destroy', $token->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
