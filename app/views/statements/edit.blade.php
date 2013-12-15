@extends('layouts.scaffold')

@section('main')
<div class="panel panel-warning">
  <div class="panel-heading">
    Individual Statements
  </div>
  <div class="panel-body">
  {{ Form::model($statement, array('method' => 'PATCH', 'route' => array('statements.update', $statement->id))) }}
    <div class="form-group">
      <label>What are your reasons for applying for a place on this course? (100 Words)</label>
      {{Form::textarea('statement_one', Input::old('statement_one', $statement->statement_one), ['class' => 'form-control'])}}
      </div>
    <div class="form-group">
      <label>How do you think you might use the knowledge and skills acquired on this course to benefit your organisation? (100 Words)</label>
      {{Form::textarea('statement_two', Input::old('statement_two', $statement->statement_two), ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      <label>Can you describe briefly any ambitions you have to pursue further academic studies? (100 Words)</label>
      {{Form::textarea('statement_three', Input::old('statement_three', $statement->statement_three), ['class' => 'form-control'])}}
    </div>
  </div>
  <div class="panel-footer">
    {{Form::submit('Update Statements', ['class' => 'btn btn-info btn-lg'])}}
  </div>
  {{ Form::close() }}
</div>
@stop