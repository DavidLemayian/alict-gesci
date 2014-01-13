<?php

class DeclarationsController extends BaseController {

	/**
	 * Declaration Repository
	 *
	 * @var Declaration
	 */
	protected $declaration;
	protected $application;

	public function __construct(Declaration $declaration, Application $application)
	{
		$this->declaration = $declaration;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$declaration = Auth::user()->declaration;

		if(is_null($declaration))
		{
			return Redirect::route('declarations.create');
		}

		return View::make('declarations.edit', compact('declaration'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('declarations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except(['0']);
		$messages = ['accepted' => 'Declaration - :attribute must be accepted.'];
		$validation = Validator::make($input, Declaration::$rules, $messages);

		if ($validation->passes())
		{
			$declaration = new Declaration($input);
			Auth::user()->declaration()->save($declaration);
			$this->application->update(['declarations' => 1]);

			return Redirect::route('declarations.index');
		}

		return Redirect::route('declarations.create')
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
		$declaration = $this->declaration->findOrFail($id);

		return View::make('declarations.show', compact('declaration'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$declaration = $this->declaration->find($id);

		if (is_null($declaration))
		{
			return Redirect::route('declarations.index');
		}

		return View::make('declarations.edit', compact('declaration'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), ['0', '_method']);
		$messages = ['accepted' => 'Declaration - :attribute must be accepted.'];
		$validation = Validator::make($input, Declaration::$rules, $messages);

		if ($validation->passes())
		{
			$declaration = $this->declaration->find($id);
			$declaration->update($input);
			$this->application->update(['declarations' => 1]);

			return Redirect::route('declarations.index');
		}

		return Redirect::route('declarations.edit', $id)
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
		$this->declaration->find($id)->delete();

		return Redirect::route('declarations.index');
	}

}