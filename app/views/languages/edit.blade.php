@extends('layouts.scaffold')

@section('main')
<div class="row">
<div class="panel panel-warning">
  <div class="panel-heading">
    Language Skills
  </div>
  <div class="panel-body">
    {{ Form::model($language, array('method' => 'PATCH', 'route' => array('languages.update', $language->id))) }}
    <div class="form-group">
      <label for="spoken_english">Spoken English</label>
      {{Form::select('spoken_english', ['Fluent', 'Good Command', 'Basic'], Input::old('spoken_english'), ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      <label for="written_english">Written English</label>
      {{Form::select('written_english', ['Excellent' , 'Good', 'Basic'], Input::old('written_english'), ['class' => 'form-control'])}}
    </div>
  </div>
  <div class="panel-footer">
    {{ Form::submit('Update Langugage Skills', array('class' => 'btn btn-info btn-lg')) }}
  </div>
    {{ Form::close() }}
</div>
{{ Form::close() }}
</div>
@stop
