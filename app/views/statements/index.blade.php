@extends('layouts.scaffold')

@section('main')

<h1>All Statements</h1>

<p>{{ link_to_route('statements.create', 'Add new statement') }}</p>

@if ($statements->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Body</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($statements as $statement)
				<tr>
					<td>{{{ $statement->body }}}</td>
                    <td>{{ link_to_route('statements.edit', 'Edit', array($statement->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('statements.destroy', $statement->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no statements
@endif

@stop
