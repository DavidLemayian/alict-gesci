@extends('layouts.scaffold')

@section('main')
<div class="row">
<div class="panel panel-warning">
  <div class="panel-heading">
    Work History
  </div>
  <div class="panel-body">
    {{ Form::open(array('route' => 'works.store')) }}
      <div class="form-group">
        <label for="sponsoring_organisation">Sponsoring Ministry/Organisation</label>
        {{Form::select('sponsoring_organisation', Work::$sponsors, Input::old('sponsoring_organisation'), ['class' => 'form-control', 'id' => 'has-extras'])}}
      </div>

      <div class="form-group">
        <label for="sector">Sector/Department</label>
        {{Form::text('sector', Input::old('sector'), ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        <label for="role">Role/Position</label>
        {{Form::select('role', Work::$roles, Input::old('role'), ['class' => 'form-control', 'id' => 'role-extras'])}}
      </div>

      <div class="form-group">
        <label for="number_of_years_in_org">Number of years in organisation/ministry</label>
        {{Form::text('number_of_years_in_org', Input::old('number_of_yrs_in_org'), ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        <label for="years_current_position">Length of time in current position</label>
        {{Form::text('years_current_position', Input::old('years_current_position'), ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        <label for="individuals_supervised">Number of individuals directly supervised by you</label>
        {{Form::text('individuals_supervised', Input::old('individuals_supervised'), ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        <label for="years_professional_experience">Number of years of professional experience</label>
        {{Form::text('years_professional_experience', Input::old('years_professional_experience'), ['class' => 'form-control'])}}
      </div>

  </div>
  <div class="panel-footer">
    {{Form::submit('Add Work History', ['class' => 'btn btn-info btn-lg'])}}
  </div>
    {{ Form::close() }}
</div>
</div>
@stop