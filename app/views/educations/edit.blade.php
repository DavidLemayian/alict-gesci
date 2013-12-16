@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Education
    </div>
    <div class="panel-body">
      {{ Form::model($education, array('method' => 'PATCH', 'route' => array('educations.update', $education->id))) }}
        <div class="form-group">
          {{ Form::label('highest_qualification', 'Highest Qualification:') }}
          {{ Form::select('highest_qualification', Education::$qualifications, $education->highest_qualification, ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
          {{ Form::label('graduation_year', 'Year of Graduation:') }}
          {{ Form::text('graduation_year', Input::old('graduation_year'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('institution', 'Institution:') }}
          {{ Form::text('institution', Input::old('institution'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('country', 'Country course was taken:') }}
          {{ Form::text('country', Input::old('country'), ['class' => 'form-control']) }}
        </div>
      </div>
        <div class="panel-footer">
      		{{ Form::submit('Update Record', array('class' => 'btn btn-info btn-lg')) }}
      	</div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop
