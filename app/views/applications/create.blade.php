@extends('layouts.scaffold')

@section('main')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row text-center">
  {{Form::open(['route' => 'applications.store'])}}
  {{Form::submit('Submit Application', ['class'=>'btn btn-primary btn-lg'])}}
  {{Form::close()}}
</div>
@stop