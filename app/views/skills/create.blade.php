@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Technical Skills
    </div>
    <div class="panel-body">
        {{ Form::open(array('route' => 'skills.store')) }}
        <small>Note: Access to a computer with Internet access either at work or home, ideally both, is required.</small> <hr>
          <div class="form-group">
            <label>1.  I have computer equipment available to use at work</label>
            <div class="radio">
              <label>{{Form::radio('one', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('one', 'Sometimes', ['class' => 'form-control'])}} Sometimes</label>
            </div>
          </div>

          <div class="form-group">
            <label>
            2.  I have computer equipment available to use at home: Yes/No (radio button)
            </label>
            <div class="radio">
              <label>{{Form::radio('two', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('two', 'No', ['class' => 'form-control'])}} No</label>
            </div>
          </div>

          <div class="form-group">
            <label>3.  I am willing to use an internet cafe when I have no connectivity at home or in work: Yes/No (radio button)</label>
            <div class="radio">
              <label>{{Form::radio('three', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('three', 'No', ['class' => 'form-control'])}} No</label>
            </div>
          </div>

          <div class="form-group">
            <label>4.  I have a reliable internet connection at work (tick) Yes/No/Sometimes</label>
            <div class="radio">
              <label>{{Form::radio('four', 'Yes', ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('four', 'No', ['class' => 'form-control'])}} No</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('four', 'Sometimes', ['class' => 'form-control'])}} Sometimes</label>
            </div>
          </div>
          <div class="form-group">
            <label>5.  I have a reliable internet connection at home (tick) Yes/No/Sometimes</label><br/>
              <div class="radio">
                <label>{{Form::radio('five', 'Yes', ['class' => 'form-control'])}} Yes</label>
              </div>
              <div class="radio">
                <label>{{Form::radio('five', 'No', ['class' => 'form-control'])}} No</label>
              </div>
              <div class="radio">
                <label>{{Form::radio('five', 'Sometimes', ['class' => 'form-control'])}} Sometimes</label>
              </div>
            </div>
          <div class="form-group">
            <label>6.  I have a: wireless or broadband connection at work Yes/No</label>
            <div class="radio">
              <label>{{Form::radio('six', Input::old('six', 'Yes'), ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('six', Input::old('six', 'No'), ['class' => 'form-control'])}} No</label>
            </div>
          </div>
          <div class="form-group">
            <label>7.  I have a: wireless or broadband connection at home Yes/No</label>
            <div class="radio">
              <label>{{Form::radio('seven', Input::old('seven', 'Yes'), ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('seven', Input::old('seven', 'No'), ['class' => 'form-control'])}} No</label>
            </div>
          </div>
          <div class="form-group">
            <label>8.  I am able to participate in one-hour online chats once a week during working hours Yes/No</label>
            <div class="radio">
              <label>{{Form::radio('eight', Input::old('eight', 'Yes'), ['class' => 'form-control'])}} Yes</label>
            </div>
            <div class="radio">
              <label>{{Form::radio('eight', Input::old('eight', 'No'), ['class' => 'form-control'])}} No</label>
            </div>
          </div>
          <div class="form-group">
            <label>9.  List any computer courses you have taken: (text box)</label>
            {{Form::textarea('nine', Input::old('nine'), ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
          <label>
            10. I regularly using the following applications and social utilities: (more than one option -Drop down menu)
          </label>
          <select name="ten[]" id="skills-ten" multiple="multiple" class="form-control">
              <option value="Microsoft Word" {{(Input::old('ten.0') ? 'selected':'')}}>Microsoft Word</option>
              <option value="Microsoft Excel" {{(Input::old('ten.1') ? 'selected':'')}}>Microsoft Excel</option>
              <option value="Microsoft Project" {{(Input::old('ten.2') ? 'selected':'')}}>Microsoft Project</option>
              <option value="Lotus Notes" {{(Input::old('ten.3') ? 'selected':'')}}>Lotus Notes</option>
              <option value="Facebook" {{(Input::old('ten.4') ? 'selected':'')}}>Facebook</option>
              <option value="Google docs" {{(Input::old('ten.5') ? 'selected':'')}}>Google docs</option>
              <option value="Google calendar" {{(Input::old('ten.6') ? 'selected':'')}}>Google calendar</option>
              <option value="Gmail" {{(Input::old('ten.7') ? 'selected':'')}}>Gmail</option>
              <option value="Skype" {{(Input::old('ten.8') ? 'selected':'')}}>Skype</option>
          </select>
        </div>
        </div>
        <div class="panel-footer">
          {{Form::submit('Save Skills', ['class' => 'btn btn-default btn-lg'])}}
        </div>
        {{ Form::close() }}
      </div>
    </div>
@stop