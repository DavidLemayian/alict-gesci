@extends('layouts.scaffold')

@section('main')
<div class="row">
  <div class="panel panel-warning">
    <div class="panel-heading">
        Technical Skills
    </div>
    <div class="panel-body">
        {{ Form::model($skill, array('method' => 'PATCH', 'route' => array('skills.update', $skill->id))) }}
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
              <option value="Microsoft Word" {{(($skill->ten) || isset($skill->ten[0])) ? "selected='selected'" : ''}}>Microsoft Word</option>
              <option value="Microsoft Excel" {{(isset($skill->ten[1])) ? "selected='selected'" : ''}}>Microsoft Excel</option>
              <option value="Microsoft Project" {{(isset($skill->ten[2])) ? "selected='selected'" : ''}}>Microsoft Project</option>
              <option value="Lotus Notes" {{(isset($skill->ten[3])) ? "selected='selected'" : ''}}>Lotus Notes</option>
              <option value="Facebook" {{(isset($skill->ten[4])) ? "selected='selected'" : ''}}>Facebook</option>
              <option value="Google docs" {{(isset($skill->ten[5])) ? "selected='selected'" : ''}}>Google docs</option>
              <option value="Google calendar" {{(isset($skill->ten[6])) ? "selected='selected'" : ''}}>Google calendar</option>
              <option value="Gmail" {{(isset($skill->ten[7])) ? "selected='selected'" : ''}}>Gmail</option>
              <option value="Skype" {{(isset($skill->ten[8])) ? "selected='selected'" : ''}}>Skype</option>
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
