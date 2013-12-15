<?php

class WorksController extends BaseController {

	/**
	 * Work Repository
	 *
	 * @var Work
	 */
	protected $work;

	public function __construct(Work $work)
	{
		$this->work = $work;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$work = Auth::user()->work;

		if (is_null($work))
		{
			return Redirect::route('works.create');
		}

		return View::make('works.edit', compact('work'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('works.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Work::$rules);
		if ($validation->passes())
		{

			$works = new Work($input);
			Auth::user()->work()->save($works);

			return Redirect::route('works.index');
		}

		return Redirect::route('works.create')
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
		$work = $this->work->findOrFail($id);

		return View::make('works.show', compact('work'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work = $this->work->find($id);

		if (is_null($work))
		{
			return Redirect::route('works.index');
		}

		return View::make('works.edit', compact('work'));
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
		$validation = Validator::make($input, Work::$rules);

		if ($validation->passes())
		{
			$work = $this->work->find($id);
			$work->update($input);

			return Redirect::route('works.index')->with('message', 'Record Updated.');
		}

		return Redirect::route('works.edit', $id)
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
		$this->work->find($id)->delete();

		return Redirect::route('works.index');
	}

}
