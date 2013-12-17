@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Update relevant professional courses and training
    </div>
    <div class="panel-body">
      {{ Form::model($course, array('method' => 'PATCH', 'route' => array('courses.update', $course->id))) }}
      <div class="form-group">
        {{ Form::label('course', 'Name of Course:') }}
        {{ Form::textarea('course', Input::old('course'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('graduation_year', 'Year of Completion:') }}
        {{ Form::text('graduation_year', Input::old('graduation_year'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('institution', 'Institution delivering the course:') }}
        {{ Form::text('institution', Input::old('institution'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('delivery', 'Mode of Delivery:') }}
        {{ Form::select('delivery', ['Online', 'Face-to-Face', 'Blended (Both)'], Input::old('delivery'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('qualification', 'Qualification:') }}
        {{ Form::text('qualification', Input::old('qualification'), ['class' => 'form-control']) }}
      </div>
    </div>
		<div class="panel-footer">
			{{ Form::submit('Update Record', array('class' => 'btn btn-info btn-lg')) }}
			{{ link_to_route('courses.show', 'Back', $course->id, array('class' => 'btn btn-danger btn-lg')) }}
		</div>
{{ Form::close() }}

@stop
