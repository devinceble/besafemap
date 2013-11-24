<?php

class PlacesController extends BaseController {

	/**
	 * Place Repository
	 *
	 * @var Place
	 */
	protected $place;

	public function __construct(Place $place)
	{
		$this->place = $place;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$places = $this->place->all();

		return View::make('places.index', compact('places'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('places.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Place::$rules);

		if ($validation->passes())
		{
			$this->place->create($input);

			return Redirect::route('places.index');
		}

		return Redirect::route('places.create')
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
		$place = $this->place->findOrFail($id);

		return View::make('places.show', compact('place'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$place = $this->place->find($id);

		if (is_null($place))
		{
			return Redirect::route('places.index');
		}

		return View::make('places.edit', compact('place'));
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
		$validation = Validator::make($input, Place::$rules);

		if ($validation->passes())
		{
			$place = $this->place->find($id);
			$place->update($input);

			return Redirect::route('places.show', $id);
		}

		return Redirect::route('places.edit', $id)
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
		$this->place->find($id)->delete();

		return Redirect::route('places.index');
	}

}
