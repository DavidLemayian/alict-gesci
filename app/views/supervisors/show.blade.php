@extends('layouts.scaffold')

@section('main')

<h1>Show Supervisor</h1>

<p>{{ link_to_route('supervisors.index', 'Return to all supervisors') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Firstname</th>
				<th>Lastname</th>
				<th>Title</th>
				<th>Work_mobile</th>
				<th>Telephone</th>
				<th>Primary_email</th>
				<th>Secondary_email</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $supervisor->firstname }}}</td>
					<td>{{{ $supervisor->lastname }}}</td>
					<td>{{{ $supervisor->title }}}</td>
					<td>{{{ $supervisor->work_mobile }}}</td>
					<td>{{{ $supervisor->telephone }}}</td>
					<td>{{{ $supervisor->primary_email }}}</td>
					<td>{{{ $supervisor->secondary_email }}}</td>
                    <td>{{ link_to_route('supervisors.edit', 'Edit', array($supervisor->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('supervisors.destroy', $supervisor->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
