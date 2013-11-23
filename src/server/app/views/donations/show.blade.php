@extends('layouts.scaffold')

@section('main')

<h1>Show Donation</h1>

<p>{{ link_to_route('donations.index', 'Return to all donations') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Location</th>
				<th>Place</th>
				<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $donation->name }}}</td>
					<td>{{{ $donation->location }}}</td>
					<td>{{{ $donation->place }}}</td>
					<td>{{{ $donation->status }}}</td>
                    <td>{{ link_to_route('donations.edit', 'Edit', array($donation->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('donations.destroy', $donation->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
