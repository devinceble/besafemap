@extends('layouts.scaffold')

@section('main')

<h1>All People</h1>

<p>{{ link_to_route('people.create', 'Add new person') }}</p>

@if ($people->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Middlename</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Cell_number</th>
				<th>Person_status</th>
				<th>Photo</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($people as $person)
				<tr>
					<td>{{{ $person->firstname }}}</td>
					<td>{{{ $person->lastname }}}</td>
					<td>{{{ $person->middlename }}}</td>
					<td>{{{ $person->age }}}</td>
					<td>{{{ $person->gender }}}</td>
					<td>{{{ $person->cell_number }}}</td>
					<td>{{{ $person->person_status }}}</td>
					<td>{{{ $person->photo }}}</td>
					<td>{{{ $person->status }}}</td>
                    <td>{{ link_to_route('people.edit', 'Edit', array($person->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('people.destroy', $person->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no people
@endif

@stop
