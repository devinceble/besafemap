<?php

class TokensController extends BaseController {

	/**
	 * Token Repository
	 *
	 * @var Token
	 */
	protected $token;

	public function __construct(Token $token)
	{
		$this->token = $token;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tokens = $this->token->all();

		return View::make('tokens.index', compact('tokens'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tokens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Token::$rules);

		if ($validation->passes())
		{
			$this->token->create($input);

			return Redirect::route('tokens.index');
		}

		return Redirect::route('tokens.create')
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
		$token = $this->token->findOrFail($id);

		return View::make('tokens.show', compact('token'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$token = $this->token->find($id);

		if (is_null($token))
		{
			return Redirect::route('tokens.index');
		}

		return View::make('tokens.edit', compact('token'));
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
		$validation = Validator::make($input, Token::$rules);

		if ($validation->passes())
		{
			$token = $this->token->find($id);
			$token->update($input);

			return Redirect::route('tokens.show', $id);
		}

		return Redirect::route('tokens.edit', $id)
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
		$this->token->find($id)->delete();

		return Redirect::route('tokens.index');
	}

}
