@extends('layouts.scaffold')

@section('main')

<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Supervisor Details
    </div>
    <div class="panel-body">
        {{ Form::model($supervisor, array('method' => 'PATCH', 'route' => array('supervisors.update', $supervisor->id))) }}
        <div class="form-group">
          {{ Form::label('firstname', 'Firstname:') }}
          {{ Form::text('firstname', Input::old('firstname'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('lastname', 'Lastname:') }}
          {{ Form::text('lastname', Input::old('lastname'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title', Input::old('title'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('work_mobile', 'Work Mobile:') }}
          {{ Form::text('work_mobile', Input::old('work_mobile'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('telephone', 'Telephone:') }}
          {{ Form::text('telephone', Input::old('telephone'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('primary_email', 'Primary Email:') }}
          {{ Form::text('primary_email', Input::old('primary_email'), ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('secondary_email', 'Secondary Email:') }}
          {{ Form::text('secondary_email', Input::old('secondary_email'), ['class' => 'form-control']) }}
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
