@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Technical Skills and Related Questions
    </div>
    <div class="panel-body">
        {{ Form::model($skill, array('method' => 'PATCH', 'route' => array('skills.update', $skill->id))) }}
        <small>Note: Access to a computer with Internet access either at work or home, ideally both, is required.</small> <hr>
          <div class="form-group">
            <label>1. I am willing to use an internet cafe when I have no connectivity at home or in work</label>
            <div class="radio">
              <label>{{Form::radio('one', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('one', 'No', ['class' => 'form-control'])}} Sometimes</label>
            </div>
          </div>

          <div class="form-group">
            <label>2. I have a reliable internet connection at work</label>
            <div class="radio">
              <label>{{Form::radio('two', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('two', 'No', ['class' => 'form-control'])}} No</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('two', 'Sometimes', ['class' => 'form-control'])}} Sometimes</label>
            </div>
          </div>

          <div class="form-group">
            <label>3. I have a reliable internet connection at home</label>
            <div class="radio">
              <label>{{Form::radio('three', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('three', 'No', ['class' => 'form-control'])}} No</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('three', 'Sometimes', ['class' => 'form-control'])}} Sometimes</label>
            </div>
          </div>

          <div class="form-group">
            <label>4. I have a wireless or broadband connection at work</label>
            <div class="radio">
              <label>{{Form::radio('four', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('four', 'No', ['class' => 'form-control'])}} No</label>
            </div>
          </div>

          <div class="form-group">
            <label>5. I have a wireless or broadband connection at home</label><br/>
              <div class="radio">
                <label>{{Form::radio('five', 'Yes', ['class' => 'form-control'])}} Yes</label>
              </div>
              <div class="radio">
                <label>{{Form::radio('five', 'No', ['class' => 'form-control'])}} No</label>
              </div>
          </div>

          <div class="form-group">
            <label>6. I am able to participate in one-hour online chats once a week during working hours</label>
            <div class="radio">
              <label>{{Form::radio('six', Input::old('six', 'Yes'), ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('six', Input::old('six', 'No'), ['class' => 'form-control'])}} No</label>
            </div>
          </div>
          <div class="form-group">
            <label>7. My job requires me to travel to places with poor or no connectivity</label>
            <div class="radio">
              <label>
                {{Form::radio('seven', Input::old('seven', 'Very Often'), ['class' => 'form-control'])}} Very Often
              </label>
            </div>
            <div class="radio">
              <label>{{Form::radio('seven', Input::old('seven', 'Often'), ['class' => 'form-control'])}} Often</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('seven', Input::old('seven', 'Seldom'), ['class' => 'form-control'])}} Seldom</label>
            </div>
          </div>
          <div class="form-group">
            <label>8.  List any computer courses you have taken</label>
            {{Form::textarea('eight', Input::old('eight'), ['class' => 'form-control'])}}
          </div>

        <div class="form-group">
          <label>
            9. I regularly use the following applications and social utilities
          </label>
          <br>
          <select name="nine[]" id="skills-nine" multiple="multiple" class="form-control">
              <option value="Microsoft Word" {{(($skill->nine) || isset($skill->nine[0])) ? "selected='selected'" : ''}}>Microsoft Word</option>
              <option value="Microsoft Excel" {{(isset($skill->nine[1])) ? "selected='selected'" : ''}}>Microsoft Excel</option>
              <option value="Microsoft Project" {{(isset($skill->nine[2])) ? "selected='selected'" : ''}}>Microsoft Project</option>
              <option value="Lotus Notes" {{(isset($skill->nine[3])) ? "selected='selected'" : ''}}>Lotus Notes</option>
              <option value="Facebook" {{(isset($skill->nine[4])) ? "selected='selected'" : ''}}>Facebook</option>
              <option value="Google docs" {{(isset($skill->nine[5])) ? "selected='selected'" : ''}}>Google docs</option>
              <option value="Google calendar" {{(isset($skill->nine[6])) ? "selected='selected'" : ''}}>Google calendar</option>
              <option value="Gmail" {{(isset($skill->nine[7])) ? "selected='selected'" : ''}}>Gmail</option>
              <option value="Skype" {{(isset($skill->nine[8])) ? "selected='selected'" : ''}}>Skype</option>
          </select>
          <br><br>
          <label for="nine_other">Name of Other applications and social utilities - please specify*</label>
          {{Form::text('nine_other', Input::old('nine_other'), ['class' => 'form-control'])}}
        </div>
        </div>
        <div class="panel-footer">
          {{Form::submit('Update Skills', ['class' => 'btn btn-default btn-lg'])}}
        </div>
        {{ Form::close() }}
      </div>
    </div>

@stop
