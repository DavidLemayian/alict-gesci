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
          <li {{(Request::is('/user/logout')) ? 'class="active"' : '' }}><a href="/user/logout">Logout</a></li>
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
        @include('layouts.includes.status')
    </div>
    <div class="row">
        <h3>Your ALICT Profile</h3><hr>
      <div class="well">
        <p>*****************************************************************</p>
        <p>PERSONAL INFORMATION</p>
        <p>*****************************************************************</p>
        <p>First name: {{ $profile->firstname }}</p>
        <p>Last name: {{ $profile->lastname }}</p>
        <p>Country of residence:  {{ Country::$countries[$profile->country] }}</p>
        <p>Gender: {{ Profile::$gender[$profile->gender] }}</p>
        <p>Date of Birth: {{ $profile->dob }}</p>
        <p>Nationality: {{ $profile->nationality }}</p>
        <p>Workplace address: {{ $profile->workaddress }}</p>
        <p>Email address: {{ $profile->email }}</p>
        <p>Passport Number: {{ $profile->passport }}</p>
        <p>Mobile number: {{ $profile->mobile }}</p>

        <p>*****************************************************************</p>
        <p>EDUCATIONAL INFORMATION</p>
        <p>*****************************************************************</p>
        <p>Highest Qualification: {{ Education::$qualifications[$education->highest_qualification] }}</p>
        <p>Year of Graduation: {{ $education->graduation_year }}</p>
        <p>Name of College/University/Institution: {{ $education->institution }}</p>
        <p>Country: {{ $education->country }}</p>

        <p>*****************************************************************</p>
        RELEVANT PROFESSIONAL COURSES and TRAINING
        <p>*****************************************************************</p>
        @foreach ($courses as $course)
          <p>Name of course: {{ $course->course }}</p>
          <p>Institution/company delivering course: {{$course->institution}}</p>
          <p>Course/training delivery: {{Course::$delivery[$course->delivery]}}</p>
          <p>Year of completion: {{$course->graduation_year}}</p>
          <p>Qualification: {{$course->qualification}}</p>
        @endforeach

        <p>*****************************************************************</p>
        <p>WORK HISTORY:</p>
        <p>*****************************************************************</p>
        <p>Sponsoring Ministry/Organisation: {{$work->sponsoring_organisation}} </p>
        <p>Other – {{$work->sponsoring_organisation_details}}</p>

        <p>Sector/Department: {{$work->sector}}</p>
        <p>Role/Position: {{$work->role}} </p>
        <p>Other: {{$work->role_details}}</p>
        <p>Number of years in organisation/ministry: {{$work->number_of_years_in_org}}</p>
        <p>Number of years/months in current position: {{$work->years_current_position}}</p>
        <p>Number of individuals directly supervised by you: {{$work->individuals_supervised}}</p>
        <p>Number of years of professional experience: {{$work->years_professional_experience}}</p>

        <p>*****************************************************************</p>
        <p>YOUR SUPERVISOR’S INFORMATION</p>
        <p>*****************************************************************</p>
        <p>First name: {{$supervisor->firstname}}</p>
        <p>Last name: {{$supervisor->lastname}}</p>
        <p>Title: {{$supervisor->title}}</p>
        <p>Work mobile number: {{$supervisor->work_mobile}}</p>
        <p>Direct telephone number: {{$supervisor->telephone}}</p>
        <p>Email addresses: {{$supervisor->primary_email}} or {{$supervisor->secondary_email}}</p>

        <p>*****************************************************************</p>
        <p>TECHNICAL SKILLS AND RELATED QUESTIONS</p>
        <p>*****************************************************************</p>
        Note: Access to a computer with Internet access at work and at home is required.
        <p>1.  I am willing to use an internet cafe when I have no connectivity at home or in work: {{$skill->one}}</p>
        <p>2.  I have a reliable internet connection at work: {{$skill->two}}</p>
        <p>3.  I have a reliable internet connection at home: {{$skill->three}}</p>
        <p>4.  I have a: wireless or broadband connection at work: {{$skill->four}}</p>
        <p>5.  I have a: wireless or broadband connection at home: {{$skill->five}}</p>
        <p>6.  I am able to participate in one-hour online chats once a week during working hours: {{$skill->six}}</p>
        <p>7.  My job requires me to travel to places with poor or no connectivity: {{$skill->seven}}</p>
        <p>8.  List any computer courses you have taken: {{$skill->eight}}</p>
        <p>9.  I regularly use the following applications and social utilities: {{$skill->nine}}</p>
        <p>Others: {{$skill->nine_other}}</p>

        <p>*****************************************************************</p>
        <p>LANGUAGE SKILLS</p>
        <p>*****************************************************************</p>
        <p>Spoken English: {{Language::$spoken_english[$language->spoken_english]}}</p>
        <p>Written English: {{Language::$written_english[$language->written_english]}}</p>

        <p>*****************************************************************</p>
        <p>INDIVIDUAL STATEMENTS</p>
        <p>*****************************************************************</p>
        <p>What are your reasons for applying for a place on this course?
            <br>
            <strong>{{$statement->statement_one}}</strong>
        </p>
        <p>How do you think you might use the knowledge and skills acquired on this course to benefit your organisation?
            <br>
            <strong>{{$statement->statement_two}}</strong>
        </p>
        <p>Can you describe briefly any ambitions you have to pursue further academic studies?
            <br>
            <strong>{{$statement->statement_two}}</strong>
        </p>

        <p>*****************************************************************</p>
        <p>DECLARATION</p>
        <p>*****************************************************************</p>
        <p>1.  To the best of my knowledge, the information on this application is accurate and complete. I understand that if I am offered a place I will be required to provide evidence of my qualifications. I agree to the processing and disclosure of all data on this form by GESCI connected with my studies, or for any other legitimate purpose, including the compilation of statistical analysis. (I agree – ticked)</p>
        <p>2.  I agree that this data can be sent to my supervisor for verification purposes and to confirm that my supervisor has consented to my participation on this course should I be selected as a participant. (I agree – ticked)</p>
        <p>3.  I accept the general terms and conditions of the ALICT course.     I certify that I will participate in the online training for a minimum of 15 hours a week, as well as participate in two face-to-face events in total. I understand the dates in the calendar (link to calendar) are approximate and can be adjusted by GESCI. (I agree –ticked)</p>
        <p>4.  All GESCI learning materials provided in this course will not be shared with people outside the course and outside my organisation without first seeking GESCI’s permission. (I agree - ticked)</p>
        <p>5.  All referenced GESCI authored materials must be attributed to GESCI. (I agree - ticked)</p>

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