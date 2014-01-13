<?php

class LanguagesController extends BaseController {

	/**
	 * Language Repository
	 *
	 * @var Language
	 */
	protected $language;
	protected $application;

	public function __construct(Language $language, Application $application)
	{
		$this->language = $language;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$language = Auth::user()->language;

		if (is_null($language))
		{
			return Redirect::route('languages.create');
		}

		return View::make('languages.edit', compact('language'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('languages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Language::$rules);

		if ($validation->passes())
		{
			$language = new Language($input);
			Auth::user()->language()->save($language);
			$this->application->update(['languages' => 1]);

			return Redirect::route('languages.index');
		}

		return Redirect::route('languages.create')
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
		$language = $this->language->findOrFail($id);

		return View::make('languages.show', compact('language'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$language = Auth::user()->language;

		if (is_null($language))
		{
			return Redirect::route('languages.create');
		}

		return View::make('languages.edit', compact('language'));
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
		$validation = Validator::make($input, Language::$rules);

		if ($validation->passes())
		{
			$language = $this->language->find($id);
			$language->update($input);
			$this->application->update(['languages' => 1]);

			return Redirect::route('languages.index')->with('message', 'Record updated.');
		}

		return Redirect::route('languages.edit', $id)
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
		$this->language->find($id)->delete();

		return Redirect::route('languages.index');
	}

}
