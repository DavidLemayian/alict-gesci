<?php

class SkillsController extends BaseController {

	/**
	 * Skill Repository
	 *
	 * @var Skill
	 */
	protected $skill;
	protected $application;

	public function __construct(Skill $skill, Application $application)
	{
		$this->skill = $skill;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$skill = Auth::user()->skill;
		if(is_null($skill))
		{
			return Redirect::route('skills.create');
		}
		$skill = $this->skill->processRecord($skill->toArray());

		return View::make('skills.edit', compact('skill'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $skill = Auth::user()->skill;
    if ($skill)
    {
      return Redirect::route('skills.edit', $skill->id);
    }
    return View::make('skills.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, Skill::$rules);

		if ($validation->passes())
		{
			$skills = new Skill($this->skill->processInput($input));

			Auth::user()->skill()->save($skills);
			$this->application->update(['skills' => 1]);

			return Redirect::route('skills.index');
		}

		return Redirect::route('skills.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$skill = $this->skill->findOrFail($id);

		return View::make('skills.show', compact('skill'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$skill = $this->skill->find($id);

		if (is_null($skill))
		{
			return Redirect::route('skills.index');
		}

		return View::make('skills.edit', compact('skill'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Skill::$rules);

		if ($validation->passes())
		{
			$skill = $this->skill->find($id);
			$skill->update($this->skill->processInput($input));
			$this->application->update(['skills' => 1]);

			return Redirect::route('skills.index')->with('message', 'Record Updated.');
		}

		return Redirect::route('skills.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->skill->find($id)->delete();

		return Redirect::route('skills.index');
	}

}
