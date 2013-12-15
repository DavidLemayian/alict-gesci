<div class="panel panel-warning">
<div class="panel-heading">
    <h4>Navigation</h4>
</div>
<div id="sidebar" class="list-group">

    <a href="/profiles" class="list-group-item {{(Request::is('profiles')) ? 'active' : ''}}">
        <i class="glyphicon glyphicon-home"></i> Profile
    </a>

    <a href="/educations" class="list-group-item {{(Request::is('educations')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-user"></i> Education
    </a>

    <a href="/courses" class="list-group-item {{(Request::is('courses')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-credit-card"></i> Courses
            <span class="badge bg_danger">{{ Auth::user()->courses()->count() }}</span>
    </a>

    <a href="/works" class="list-group-item {{(Request::is('works')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-bullhorn"></i> Work History
    </a>

    <a href="/supervisors" class="list-group-item {{(Request::is('supervisors')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-eye-open"></i> Supervisor
    </a>

    <a href="/skills" class="list-group-item {{(Request::is('skills')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-cog"></i> Skills
    </a>

    <a href="/languages" class="list-group-item {{(Request::is('languages')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-flag"></i> Languages
    </a>

    <a href="/statements" class="list-group-item {{(Request::is('statements')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-inbox"></i> Statements
    </a>

    <a href="/declarations" class="list-group-item {{(Request::is('declarations')) ? 'active' : ''}}"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-ok"></i> Declarations
    </a>

    <a href="/user/logout" class="list-group-item"  data-parent="#sidebar">
        <i class="glyphicon glyphicon-off"></i> Logout
    </a>
</div>
</div>