<?php

class EducationsController extends BaseController {

	/**
	 * Education Repository
	 *
	 * @var Education
	 */
	protected $education;
	protected $application;

	public function __construct(Education $education, Application $application)
	{
		$this->education = $education;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$education = Auth::user()->education;

		if (is_null($education))
		{
			return Redirect::route('educations.create');
		}

		return View::make('educations.edit', compact('education'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$education = Auth::user()->education;
		if ($education)
		{
			return Redirect::route('educations.edit', $education->id);
		}

		return View::make('educations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Education::$rules);

		if ($validation->passes())
		{
			$education = new Education($input);
			Auth::user()->education()->save($education);
			$this->application->update(['educations' => 1]);

			return Redirect::route('educations.index');
		}

		return Redirect::route('educations.create')
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
		$education = $this->education->findOrFail($id);

		return View::make('educations.show', compact('education'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$education = Auth::user()->education;

		if (is_null($education))
		{
			return Redirect::route('educations.create');
		}

		return View::make('educations.edit', compact('education'));
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
		$validation = Validator::make($input, Education::$rules);

		if ($validation->passes())
		{
			$education = $this->education->find($id);
			$education->update($input);
			$this->application->update(['educations' => 1]);
			return Redirect::route('educations.index')->with('message', 'Record Updated.');
		}

		return Redirect::route('educations.edit', $id)
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
		$this->education->find($id)->delete();

		return Redirect::route('educations.index');
	}

}
