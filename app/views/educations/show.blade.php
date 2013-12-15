@extends('layouts.scaffold')

@section('main')

<h1>Show Education</h1>

<p>{{ link_to_route('educations.index', 'Return to all educations') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>User_id</th>
				<th>Highest_qualification</th>
				<th>Graduation_year</th>
				<th>Institution</th>
				<th>Country</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $education->user_id }}}</td>
					<td>{{{ $education->highest_qualification }}}</td>
					<td>{{{ $education->graduation_year }}}</td>
					<td>{{{ $education->institution }}}</td>
					<td>{{{ $education->country }}}</td>
                    <td>{{ link_to_route('educations.edit', 'Edit', array($education->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('educations.destroy', $education->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
