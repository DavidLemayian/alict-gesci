@extends('layouts.scaffold')

@section('main')

<h1>All Declarations</h1>

<p>{{ link_to_route('declarations.create', 'Add new declaration') }}</p>

@if ($declarations->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Integer</th>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($declarations as $declaration)
				<tr>
					<td>{{{ $declaration->integer }}}</td>
					<td>{{{ $declaration->1 }}}</td>
					<td>{{{ $declaration->2 }}}</td>
					<td>{{{ $declaration->3 }}}</td>
					<td>{{{ $declaration->4 }}}</td>
                    <td>{{ link_to_route('declarations.edit', 'Edit', array($declaration->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('declarations.destroy', $declaration->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no declarations
@endif

@stop
