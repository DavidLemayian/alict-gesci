<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-multiselect.css" rel="stylesheet">
    <link href="/assets/css/datepicker.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap-multiselect.js"></script>
    <script src="/assets/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/textareacounter.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
  </head>

  <body>
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li class="active"><a href="/">About</a></li>
        @if (Auth::user())
          <li {{(Request::is('/profiles')) ? 'class="active"' : '' }}><a href="/profiles">Account</a></li>
        @else
          <li {{(Request::is('/login')) ? 'class="active"' : '' }}><a href="/login">Register</a></li>
        @endif
      </ul>
      <h3 class="text-muted">ALICT 2014</h3>
    </div>
  </div>
    <div class="container">
          <div class="row">
              </div>
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
      <p class="lead sm">
        GESCI is inviting candidates to apply for the online African Leadership in ICT (ALICT) course. Please see the selection criteria before applying (link to web page).  The closing date for applications is February 21, 2014.  All applicants must secure the consent of their supervisors before applying for a place on the ALICT course. All applicant information on this form will be sent to applicants’ supervisors. </p>

        <strong>No course fees required.</strong>

        <br><br>Please only apply for a place on the ALICT course if you can commit to at least <strong>15 hours</strong> of online course engagement a week for approximately <strong>8 months</strong> (excluding designated course break periods).
      </p>
      </div>
    </div>
  </div>
</div>
</section>
      </div>
    </div>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Roboto+Slab:400,300,700:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
  </body>

</html>