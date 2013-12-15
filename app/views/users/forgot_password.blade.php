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
          <h2>Forgot your password?</h2>
          <p>Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.</p>
          <form method="POST" action="{{ (Confide::checkAction('UserController@do_forgot_password')) ?: URL::to('/user/forgot') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
            <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="email" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-8">
              <input class="btn btn-block reset" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
            </div>
            </div>

              @if ( Session::get('error') )
                <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
              @endif

              @if ( Session::get('notice') )
                <div class="alert">{{{ Session::get('notice') }}}</div>
              @endif
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
