@extends('layouts.scaffold')

@section('main')
<section id="login" class="gesci login" style="height: 737px;">
<div class="wrap">
  <div class="form-container">
    <div class="form-wrap">
    <div class="row">

      <div class="col-xs-12 col-sm-3 brand animated fadeInUp" data-animation="fadeInUp">
        <a href="/"><img src="/assets/img/logo.jpg" alt="gesci"></a>
      </div>
      <div class="col-sm-1 hidden-xs">
        <div class="horizontal-divider"></div>
      </div>



        <form method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8">
          <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
          <fieldset>
            <div class="form-group">
                <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
                <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
            <div class="form-group">
            <label for="password">
                {{{ Lang::get('confide::confide.password') }}}
                <small>
                    <a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                </small>
            </label>
            <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
                    <input type="hidden" name="remember" value="0">
                    <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                </label>
            </div>
            @if ( Session::get('error') )
                <div class="alert alert-warning alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{{ Session::get('error') }}}
                </div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert alert-info alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{{ Session::get('notice') }}}
                </div>
            @endif
            <div class="form-group">
                <button tabindex="3" type="submit" class="btn btn-primary btn-lg">{{{ Lang::get('confide::confide.login.submit') }}}</button>
            <a href="/user/create" class="btn btn-success btn-lg pull-right">Register</a>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@stop