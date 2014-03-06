<?php

/**
* Applications Controller
*/
class ApplicationsController extends BaseController
{
  /**
   * Course Repository
   *
   * @var Course
   */
  protected $application;

  public function __construct(Application $application)
  {
    if (Auth::user()) $this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
  }

  public function index()
  {
    if(Auth::user())
    {
      $application = Application::where('user_id', Auth::user()->id)->first();
      if ($application->submitted_at)
      {
        $user        = $application->user;
        $profile     = $user->profile;
        $education   = $user->education;
        $courses     = $user->courses;
        $work        = $user->work;
        $supervisor  = $user->supervisor;
        $skill       = $user->skill;
        $language    = $user->language;
        $statement   = $user->statement;
        $declaration = $user->declaration;

        return View::make('applications.show', compact('profile', 'education', 'courses', 'supervisor', 'work', 'language', 'skill', 'statement', 'declaration'));
      }
      else
      {
        return Redirect::route('applications.create')->with('message', 'Application not complete for submission.');
      }
    }
    else
    {
      return Redirect::guest('/login');
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('applications.create');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function show($id)
  {
    $application = (Auth::user()) ? Application::where('user_id', Auth::user()->id)->first() : Application::find($id);
    if(is_null($application)) return Redirect::action('ApplicationsController@search_page')->with('message', 'Try search for the applicaton using applicant\'s email');
    if ($application->submitted_at)
    {
      $user        = $application->user;
      $profile     = $user->profile;
      $education   = $user->education;
      $courses     = $user->courses;
      $work        = $user->work;
      $supervisor  = $user->supervisor;
      $skill       = $user->skill;
      $language    = $user->language;
      $statement   = $user->statement;
      $declaration = $user->declaration;

      return View::make('applications.show', compact('profile', 'education', 'courses', 'supervisor', 'work', 'language', 'skill', 'statement', 'declaration'));
    }
    else
    {
      return Redirect::action('ApplicationsController@search_page')->with('message', 'Try search for the applicaton using applicant\'s email');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $input =
    [
      'profiles'     => $this->application->profiles,
      'educations'   => $this->application->educations,
      'courses'      => $this->application->courses,
      'works'        => $this->application->works,
      'supervisors'  => $this->application->supervisors,
      'skills'       => $this->application->skills,
      'languages'    => $this->application->languages,
      'statements'   => $this->application->statements,
      'declarations' => $this->application->declarations,
    ];
    $validation = Validator::make($input, Application::$rules);

    if ($validation->passes())
    {
      $this->application->update(['submitted_at' => new DateTime]);

      return Redirect::route('applications.show', [$this->application->id])->with('message', 'Application Successfully Submitted. See Details Below.');
    }

    return Redirect::route('applications.create')
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');
  }

  public function search_page()
  {
    return View::make('applications.search');
  }

  public function search()
  {
    $input = Input::all();
    $validation = Validator::make($input, Application::$search);

    if ($validation->passes())
    {
      $email = Input::get('email');
      $application = User::whereEmail($email)->first()->application;
      if ($application->submitted_at)
      {
        $user        = $application->user;
        $profile     = $user->profile;
        $education   = $user->education;
        $courses     = $user->courses;
        $work        = $user->work;
        $supervisor  = $user->supervisor;
        $skill       = $user->skill;
        $language    = $user->language;
        $statement   = $user->statement;
        $declaration = $user->declaration;

        return View::make('applications.show', compact('profile', 'education', 'courses', 'supervisor', 'work', 'language', 'skill', 'statement', 'declaration'));
      }
      else
      {
        return Redirect::action('ApplicationsController@search_page')->with('message', 'Applicant has not submitted application.');
      }
    }
    else
    {
      return Redirect::action('ApplicationsController@search_page')
      ->withInput()
      ->withErrors($validation);
    }
  }
}
