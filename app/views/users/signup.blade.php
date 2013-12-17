@extends('layouts.scaffold')

@section('main')
<section id="login" class="gesci login" style="height: 737px;">
<div class="wrap">
  <div class="form-container">
    <div class="form-wrap">
    <div class="row">

      <div class="col-xs-12 col-sm-3 brand animated fadeInUp" data-animation="fadeInUp">
        <a href="/login"><img src="/assets/img/logo.jpg" alt="gesci"></a>
      </div>
      <div class="col-sm-1 hidden-xs">
        <div class="horizontal-divider"></div>
      </div>
        <form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
            <fieldset>
                <div class="form-group">
                    <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
                </div>
                <div class="form-group">
                    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                </div>
                <div class="form-group">
                    <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                </div>

                @if ( Session::get('error') )
                    <div class="alert alert-error alert-danger">
                        @if ( is_array(Session::get('error')) )
                            {{ head(Session::get('error')) }}
                        @endif
                    </div>
                @endif

                @if ( Session::get('notice') )
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif

                <div class="form-actions form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
                  <a href="/login" class="btn btn-default btn-lg btn-block">Cancel</a>
                </div>

            </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@stop