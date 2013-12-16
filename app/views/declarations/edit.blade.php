@extends('layouts.scaffold')

@section('main')
<div class="panel panel-warning">
  <div class="panel-heading">
    Declaration
  </div>
  <div class="panel-body">
{{ Form::model($declaration, array('method' => 'PATCH', 'route' => array('declarations.update', $declaration->id))) }}
    <div class="form-group">
      <label>1. To the best of my knowledge, the information on this application is accurate and complete. I understand that if I am offered a place I will be required to provide evidence of my qualifications. I agree to the processing and disclosure of all data on this form by GESCI connected with my studies, or for any other legitimate purpose, including the compilation of statistical analysis. (I agree – tick)</label>
      {{Form::checkbox('one', true)}}
    </div>
    <div class="form-group">
      <label>2. I agree that this data can be sent to my supervisor for verification purposes and to confirm that my supervisor has consented to my participation on this course should I be selected as a participant. (I agree – tick)</label>
      {{Form::checkbox('two', true)}}
    </div>
    <div class="form-group">
      <label>3. I accept the general terms and conditions of the ALICT course. I certify that I will participate in the online training for a minimum of 15 hours a week, as well as participate in two face-to-face events in total. I understand the dates in the calendar (link to calendar) are approximate and can be adjusted by GESCI. (I agree –tick)</label>
      {{Form::checkbox('three', true)}}
    </div>
    <div class="form-group">
      <label>4. All GESCI learning materials provided in this course will not be shared with people outside the course and outside my organisation without first seeking GESCI’s permission.</label>
      {{Form::checkbox('four', true)}}
    </div>

    <div class="form-group">
      <label>5. All referenced GESCI authored materials must be attributed to GESCI.</label>
      {{Form::checkbox('five', true)}}
    </div>
	</div>
  <div class="panel-footer">
    {{ Form::submit('Accept Terms', array('class' => 'btn btn-info')) }}
  </div>
{{ Form::close() }}
</div>
@stop
