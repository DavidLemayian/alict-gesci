@extends('layouts.scaffold')

@section('main')

<h1>Show Statement</h1>

<p>{{ link_to_route('statements.index', 'Return to all statements') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Body</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $statement->body }}}</td>
                    <td>{{ link_to_route('statements.edit', 'Edit', array($statement->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('statements.destroy', $statement->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
