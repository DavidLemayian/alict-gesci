@extends('layouts.scaffold')

@section('main')
<div class="row">
	<div class="panel panel-warning">
		<div class="panel-heading">
			Courses Taken
		</div>
		<div class="panel-body">
			@if ($courses->count())
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Course</th>
							<th>Graduation</th>
							<th>Institution</th>
							<th>Qualification</th>
							<th colspan="2">Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($courses as $course)
							<tr>
								<td>{{{ $course->course }}}</td>
								<td>{{{ $course->graduation_year }}}</td>
								<td>{{{ $course->institution }}}</td>
								<td>{{{ $course->qualification }}}</td>
			          <td>{{ link_to_route('courses.edit', 'Edit', array($course->id), array('class' => 'btn btn-primary')) }}</td>
			          <td>
			              {{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->id))) }}
			                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
			              {{ Form::close() }}
			          </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<p class="lead">No courses taken.</p>
		</div>
			@endif
	</div>
	<div class="panel-footer">
			{{ link_to_route('courses.create', 'Add Course', [],['class' => 'btn btn-default btn-lg']) }}
	</div>
</div>
@stop
