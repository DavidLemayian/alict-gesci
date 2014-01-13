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
    $this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
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
    if (Auth::user()->id != $id) {
      // Logout user
      return Redirect::action('UserController@logout')->with('message', 'Access Denied.');
    }
    $profile     = Auth::user()->profile;
    $education   = Auth::user()->education;
    $courses     = Auth::user()->courses;
    $work        = Auth::user()->work;
    $supervisor  = Auth::user()->supervisor;
    $skill       = Auth::user()->skill;
    $language    = Auth::user()->language;
    $statement   = Auth::user()->statement;
    $declaration = Auth::user()->declaration;

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
      return View::make('applications.show', compact('profile', 'education', 'courses', 'supervisor', 'work', 'language', 'skill', 'statement', 'declaration'));
    }

    return Redirect::route('applications.create')
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');
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

      return Redirect::route('applications.show', [Auth::user()->id])->with('message', 'Application Successfully Submitted. See Details Below.');
    }

    return Redirect::route('applications.create')
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');
  }
}