@extends('layouts.scaffold')

@section('main')
<div class="page-header">
  <div class="pull-right">{{ link_to_route('courses.index', 'Return to all courses', [],['class' => 'btn btn-default']) }}</div>
  <h2>Course</h2>
</div>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
				<th>Course</th>
				<th>Graduation_year</th>
				<th>Institution</th>
				<th>Delivery</th>
				<th>Qualification</th>
        <th colspan="2">Actions</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $course->course }}}</td>
			<td>{{{ $course->graduation_year }}}</td>
			<td>{{{ $course->institution }}}</td>
			<td>{{{ $course->delivery }}}</td>
			<td>{{{ $course->qualification }}}</td>
      <td>{{ link_to_route('courses.edit', 'Edit', array($course->id), array('class' => 'btn btn-info')) }}</td>
      <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
          {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
