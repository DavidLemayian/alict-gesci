@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Add relevant professional courses and Training
    </div>
    <div class="panel-body">
      {{ Form::open(array('route' => 'courses.store')) }}
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
          <div class="form-group">
          	{{ Form::submit('Create Course', array('class' => 'btn btn-info btn-lg')) }}
          </div>
        </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop


