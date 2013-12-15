@extends('layouts.scaffold')

@section('main')

<h1>All Works</h1>

<p>{{ link_to_route('works.create', 'Add new work') }}</p>

@if ($works->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Body</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($works as $work)
				<tr>
					<td>{{{ $work->body }}}</td>
                    <td>{{ link_to_route('works.edit', 'Edit', array($work->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('works.destroy', $work->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no works
@endif

@stop
