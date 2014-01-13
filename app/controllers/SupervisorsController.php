<?php

class SupervisorsController extends BaseController {

	/**
	 * Supervisor Repository
	 *
	 * @var Supervisor
	 */
	protected $supervisor;
	protected $application;

	public function __construct(Supervisor $supervisor, Application $application)
	{
		$this->supervisor = $supervisor;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$supervisor = Auth::user()->supervisor;

		if (is_null($supervisor))
		{
			return Redirect::route('supervisors.create');
		}

		return View::make('supervisors.edit', compact('supervisor'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$supervisor = Auth::user()->supervisor;
		if ($supervisor)
		{
			return Redirect::route('supervisors.edit', $education->id);
		}

		return View::make('supervisors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Supervisor::$rules);

		if ($validation->passes())
		{
			$supervisor = new Supervisor($input);
			Auth::user()->supervisor()->save($supervisor);
			$this->application->update(['supervisors' => 1]);

			return Redirect::route('supervisors.index');
		}

		return Redirect::route('supervisors.create')
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
		$supervisor = $this->supervisor->findOrFail($id);

		return View::make('supervisors.show', compact('supervisor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$supervisor = Auth::user()->supervisor;

		if (is_null($supervisor))
		{
			return Redirect::route('supervisors.index');
		}

		return View::make('supervisors.edit', compact('supervisor'));
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
		$validation = Validator::make($input, Supervisor::$updateRules);

		if ($validation->passes())
		{
			$supervisor = $this->supervisor->find($id);
			$supervisor->update($input);
			$this->application->update(['supervisors' => 1]);
			return Redirect::route('supervisors.index')->with('message', 'Details Updated.');
		}

		return Redirect::route('supervisors.edit', $id)
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
		$this->supervisor->find($id)->delete();

		return Redirect::route('supervisors.index');
	}

}
