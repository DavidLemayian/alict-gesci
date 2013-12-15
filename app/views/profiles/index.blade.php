@extends('layouts.scaffold')

@section('main')

<h1>All Profiles</h1>

<p>{{ link_to_route('profiles.create', 'Add new profile') }}</p>

@if ($profiles->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Country</th>
				<th>Gender</th>
				<th>Dob</th>
				<th>Nationality</th>
				<th>Workaddress</th>
				<th>Email</th>
				<th>Mobile</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($profiles as $profile)
				<tr>
					<td>{{{ $profile->firstname }}}</td>
					<td>{{{ $profile->lastname }}}</td>
					<td>{{{ $profile->country }}}</td>
					<td>{{{ $profile->gender }}}</td>
					<td>{{{ $profile->dob }}}</td>
					<td>{{{ $profile->nationality }}}</td>
					<td>{{{ $profile->workaddress }}}</td>
					<td>{{{ $profile->email }}}</td>
					<td>{{{ $profile->mobile }}}</td>
                    <td>{{ link_to_route('profiles.edit', 'Edit', array($profile->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('profiles.destroy', $profile->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no profiles
@endif

@stop
