@extends('layouts.scaffold')

@section('main')

<h1>All Skills</h1>

<p>{{ link_to_route('skills.create', 'Add new skill') }}</p>

@if ($skills->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Body</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($skills as $skill)
				<tr>
					<td>{{{ $skill->body }}}</td>
          <td>{{ link_to_route('skills.edit', 'Edit', array($skill->id), array('class' => 'btn btn-info')) }}</td>
          <td>
              {{ Form::open(array('method' => 'DELETE', 'route' => array('skills.destroy', $skill->id))) }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
              {{ Form::close() }}
          </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no skills
@endif

@stop
