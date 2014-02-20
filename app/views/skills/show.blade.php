@extends('layouts.scaffold')

@section('main')

<h1>Show Skill</h1>

<p>{{ link_to_route('skills.index', 'Return to all skills') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Body</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $skill->body }}}</td>
      <td>{{ link_to_route('skills.edit', 'Edit', array($skill->id), array('class' => 'btn btn-info')) }}</td>
      <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('skills.destroy', $skill->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
          {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
