@extends('layouts.scaffold')

@section('main')

<div class="panel panel-warning">
  <div class="panel-heading">
    Declaration
  </div>
  <div class="panel-body">
  {{ Form::open(array('route' => 'declarations.store')) }}
    <div class="form-group">
      <label>1.  To the best of my knowledge, the information on this application is accurate and complete. I understand that if I am offered a place I might be required to provide evidence of my qualifications. I agree to the processing and disclosure of all data on this form by GESCI. Connected with my studies, or for any other legitimate purpose, including the compilation of statistical analysis. (I agree – tick)</label>
      {{Form::checkbox('one', true)}}
    </div>
    <div class="form-group">
      <label>2.  I agree that this data can be sent to my supervisor for verification purposes and to confirm that my supervisor has consented to my participation on this course should I be selected as a participant. (I agree – tick)</label>
      {{Form::checkbox('two', true)}}
    </div>
    <div class="form-group">
      <label>3.  I accept the general terms and conditions of the ALICT course.     I certify that I will participate in the online training for an average dedication of a minimum of 10 hours a week, as well as participate in two face-to-face events. I understand the dates in the calendar (link to calendar) are approximate and can be adjusted by GESCI. (I agree –tick)</label>
      {{Form::checkbox('three', true)}}
    </div>
    <div class="form-group">
      <label>4.  All GESCI learning materials provided in this course are for open sharing but need to be referenced accordingly. (I agree - tick)</label>
      {{Form::checkbox('four', true)}}
    </div>
  </div>
  <div class="panel-footer">
    {{ Form::submit('Accept Terms', array('class' => 'btn btn-info')) }}
  {{ Form::close() }}
  </div>
</div>



@stop


