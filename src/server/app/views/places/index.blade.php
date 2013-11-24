@extends('layouts.scaffold')

@section('main')

<h1>All Places</h1>

<p>{{ link_to_route('places.create', 'Add new place') }}</p>

@if ($places->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Type</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($places as $place)
				<tr>
					<td>{{{ $place->name }}}</td>
					<td>{{{ $place->address }}}</td>
					<td>{{{ $place->type }}}</td>
					<td>{{{ $place->status }}}</td>
                    <td>{{ link_to_route('places.edit', 'Edit', array($place->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('places.destroy', $place->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no places
@endif

@stop
