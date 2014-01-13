<?php

class StatementsController extends BaseController {

	/**
	 * Statement Repository
	 *
	 * @var Statement
	 */
	protected $statement;
	protected $application;

	public function __construct(Statement $statement, Application $application)
	{
		$this->statement = $statement;
		$this->application = Application::firstOrCreate(['user_id' => Auth::user()->id]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statement = Auth::user()->statement;
		if (is_null($statement))
		{
			return Redirect::route('statements.create');
		}

		return View::make('statements.edit', compact('statement'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('statements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Statement::$rules);

		if ($validation->passes())
		{
			$statement = new Statement($input);
			Auth::user()->statement()->save($statement);
			$this->application->update(['statements' => 1]);

			return Redirect::route('statements.index');
		}

		return Redirect::route('statements.create')
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
		$statement = $this->statement->findOrFail($id);

		return View::make('statements.show', compact('statement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statement = $this->statement->find($id);

		if (is_null($statement))
		{
			return Redirect::route('statements.index');
		}

		return View::make('statements.edit', compact('statement'));
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
		$validation = Validator::make($input, Statement::$rules);

		if ($validation->passes())
		{
			$statement = $this->statement->find($id);
			$statement->update($input);
			$this->application->update(['statements' => 1]);

			return Redirect::route('statements.index')->with('message', 'Statements Updated.');
		}

		return Redirect::route('statements.edit', $id)
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
		$this->statement->find($id)->delete();

		return Redirect::route('statements.index');
	}

}
