@extends('layouts.scaffold')

@section('main')
<div class="row">
<div class="panel panel-warning">
<div class="panel-heading">
    Your Profile
</div>
<div class="panel-body">
<p>Very Important  (NAMES should appear as in their passports / or ID)</p>
{{ Form::model($profile, array('method' => 'PATCH', 'route' => array('profiles.update', $profile->id))) }}
    <div class="form-group">
        {{ Form::label('firstname', 'First name:') }}
        {{ Form::text('firstname', $profile->firstname, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Last name:') }}
        {{ Form::text('lastname', $profile->lastname, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('country', 'Country:') }}
      {{ Form::select('country', Country::$countries, $profile->country, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('gender', 'Gender:') }}
      {{ Form::select('gender', ['Female', 'Male'], Input::old('gender'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('dob', 'Date of Birth:') }}
      {{Form::selectYear('year', 1950, 1992, date('Y', strtotime($profile->year)))}}
      {{Form::selectMonth('month', $profile->month)}}
      {{Form::selectRange('day', 1, 30, $profile->day)}}
    </div>

    <div class="form-group">
      {{ Form::label('nationality', 'Nationality:') }}
      {{ Form::text('nationality', Input::old('nationality'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('workaddress', 'Workplace address:') }}
      {{ Form::text('workaddress', Input::old('workaddress'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('email', 'Secondary Email:') }}
      {{ Form::text('email', Input::old('email'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('mobile', 'Mobile: (include country code pre-fix with +)') }}
      {{ Form::text('mobile', Input::old('mobile'), ['class' => 'form-control', 'placeholder' => 'Include country Prefix with +']) }}
    </div>

    <div class="form-group">
      {{ Form::label('passport', 'Passport Number:') }}
      {{ Form::text('passport', Input::old('passport'), ['class' => 'form-control']) }}
    </div>

    </div>
    <div class="panel-footer">
    	{{ Form::submit('Update Profile', array('class' => 'btn btn-info btn-lg')) }}
    </div>
{{ Form::close() }}
</div>
</div>
<div class="well">
  <p class="lead">**Please ensure that the email addresses that you provide are correct and functioning. Ensure that the primary email address you provide is the email address you wish us to use when corresponding with you on all matters related to this application and to the ALICT course.</p>
</div>
</div>
@stop
