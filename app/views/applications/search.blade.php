@extends('layouts.scaffold')

@section('main')
<div class="row">
<div class="page-header text-center">
  <p class="lead">Search for Application with email used during account creation</p>
</div>
<div class="col-md-6 col-md-offset-3 text-center">
{{Form::open()}}
  <div class="form-group">
    <label>Email Address</label>
    {{Form::text('email', Input::old('email'), ['class' => 'form-control'])}}
  </div>
  {{ Form::submit('Search', array('class' => 'btn btn-info btn-lg')) }}
{{Form::close()}}
</div>
</div>
@stop
