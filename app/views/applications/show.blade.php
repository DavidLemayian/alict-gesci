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
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">PERSONAL INFORMATION</h3>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td>{{ $profile->firstname }}</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>{{ $profile->lastname }}</td>
                </tr>
                <tr><th>Country of residence:  </th><td>{{ Country::$countries[$profile->country] }}</td></tr>
                <tr><th>Gender: </th><td>{{ Profile::$gender[$profile->gender] }}</td></tr>
                <tr><th>Date of Birth: </th><td>{{ $profile->day }} - {{ $profile->month }} - {{ $profile->year }}</td></tr>
                <tr><th>Nationality: </th><td>{{ $profile->nationality }}</td></tr>
                <tr><th>Workplace address: </th><td>{{ $profile->workaddress }}</td></tr>
                <tr><th>Email address: </th><td>{{ $profile->email }}</td></tr>
                <tr><th>Passport Number: </th><td>{{ $profile->passport }}</td></tr>
                <tr><th>Mobile number: </th><td>{{ $profile->mobile }}</td></tr>
            </table>
          </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">EDUCATIONAL INFORMATION</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Highest Qualification: </th>
                        <td>{{ Education::$qualifications[$education->highest_qualification] }}</td>
                    </tr>
                    <tr><th>Year of Graduation: </th><td>{{ $education->graduation_year }}</td></tr>
                    <tr><th>Name of College/University/Institution: </th><td>{{ $education->institution }}</td></tr>
                    <tr><th>Country: </th><td>{{ $education->country }}</td></tr>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">RELEVANT PROFESSIONAL COURSES and TRAINING</h3>
            </div>
            <div class="panel-body">
            @foreach ($courses as $course)
                <table class="table table-bordered">
                    <tr>
                        <th>Name of course: </th>
                        <td>{{ $course->course }}</td>
                    </tr>
                    <tr><th>Institution/company delivering course: </th><td>{{$course->institution}}</td></tr>
                    <tr><th>Name of College/University/Institution: </th><td>{{ $education->institution }}</td></tr>
                    <tr><th>Course/training delivery: </th><td>{{Course::$delivery[$course->delivery]}}</td></tr>
                    <tr><th>Year of completion: </th><td>{{$course->graduation_year}}</th></tr>
                    <tr><th>Qualification: </th><td>{{$course->qualification}}</th></tr>
                </table>
            @endforeach
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">WORK HISTORY</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <tr><th>Sponsoring Ministry/Organisation: </th><td>{{$work->sponsoring_organisation}} </td></tr>
                <tr><th>Other – </th><td>{{$work->sponsoring_organisation_details}}</td></tr>
                <tr><th>Sector/Department: </th><td>{{$work->sector}}</td></tr>
                <tr><th>Role/Position: </th><td>{{$work->role}} </td></tr>
                <tr><th>Other: </th><td>{{$work->role_details}}</td></tr>
                <tr><th>Number of years in organisation/ministry: </th><td>{{$work->number_of_years_in_org}}</td></tr>
                <tr><th>Number of years/months in current position: </th><td>{{$work->years_current_position}}</td></tr>
                <tr><th>Number of individuals directly supervised by you: </th><td>{{$work->individuals_supervised}}</td></tr>
                <tr><th>Number of years of professional experience: </th><td>{{$work->years_professional_experience}}</td></tr>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">YOUR SUPERVISOR’S INFORMATION</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <tr><th>First name: </th><td>{{$supervisor->firstname}}</td></tr>
                <tr><th>Last name: </th><td>{{$supervisor->lastname}}</td></tr>
                <tr><th>Title: </th><td>{{$supervisor->title}}</td></tr>
                <tr><th>Work mobile number: </th><td>{{$supervisor->work_mobile}}</td></tr>
                <tr><th>Direct telephone number: </th><td>{{$supervisor->telephone}}</td></tr>
                <tr><th>Email addresses: </th><td>{{$supervisor->primary_email}},  {{$supervisor->secondary_email or ''}}</td></tr>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">TECHNICAL SKILLS AND RELATED QUESTIONS</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <p><b>1.  I am willing to use an internet cafe when I have no connectivity at home or in work:</b> {{$skill->one}}</p>
                <p><b>2.  I have a reliable internet connection at work: </b>{{$skill->two}}</p>
                <p><b>3.  I have a reliable internet connection at home: </b>{{$skill->three}}</p>
                <p><b>4.  I have a: wireless or broadband connection at work: </b>{{$skill->four}}</p>
                <p><b>5.  I have a: wireless or broadband connection at home: </b>{{$skill->five}}</p>
                <p><b>6.  I am able to participate in one-hour online chats once a week during working hours: </b>{{$skill->six}}</p>
                <p><b>7.  My job requires me to travel to places with poor or no connectivity: </b>{{$skill->seven}}</p>
                <p><b>8.  List any computer courses you have taken: </b>{{$skill->eight}}</p>
                <p><b>9.  I regularly use the following applications and social utilities: </b>{{$skill->nine}}</p>
                <p>Others: {{$skill->nine_other}}</p>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">LANGUAGE SKILLS</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <tr><th>Spoken English: </th><td>{{Language::$spoken_english[$language->spoken_english]}}</td></tr>
                <tr><th>Written English: </th><td>{{Language::$written_english[$language->written_english]}}</td></tr>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">INDIVIDUAL STATEMENTS</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <tr><td>What are your reasons for applying for a place on this course?</td></tr>
                <tr>
                    <td><strong>{{$statement->statement_one}}</strong></td>
                </tr>
                <tr><td>How do you think you might use the knowledge and skills acquired on this course to benefit your organisation?
                <tr>
                    <td><strong>{{$statement->statement_two}}</strong></td>
                </tr>
                <tr><td>Can you describe briefly any ambitions you have to pursue further academic studies?
                <tr>
                    <td><strong>{{$statement->statement_two}}</strong></td>
                </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">DECLARATION</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                <p>1.  To the best of my knowledge, the information on this application is accurate and complete. I understand that if I am offered a place I will be required to provide evidence of my qualifications. I agree to the processing and disclosure of all data on this form by GESCI connected with my studies, or for any other legitimate purpose, including the compilation of statistical analysis. <b>(I agree – ticked)</b></p>
                <p>2.  I agree that this data can be sent to my supervisor for verification purposes and to confirm that my supervisor has consented to my participation on this course should I be selected as a participant. <b>(I agree – ticked)</b></p>
                <p>3.  I accept the general terms and conditions of the ALICT course.     I certify that I will participate in the online training for a minimum of 15 hours a week, as well as participate in two face-to-face events in total. I understand the dates in the calendar (link to calendar) are approximate and can be adjusted by GESCI. <b>(I agree –ticked)</b></p>
                <p>4.  All GESCI learning materials provided in this course will not be shared with people outside the course and outside my organisation without first seeking GESCI’s permission. <b>(I agree - ticked)</b></p>
                <p>5.  All referenced GESCI authored materials must be attributed to GESCI. <b>(I agree - ticked)</b></p>
                </table>
            </div>
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
