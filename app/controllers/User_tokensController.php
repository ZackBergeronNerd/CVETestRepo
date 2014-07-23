<?php

class User_tokensController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('user_tokens.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('user_tokens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		if(Input::has('user_id') && Input::has('token')) {
			$input = Input::all();

			if(is_null(User_token::where('token', '=', $input['token'])->where('user_id', '=', $input['user_id'])->first())) {
				$user_token = new User_token;
				$user_token->user_id = $input['user_id'];
				$user_token->token = $input['token'];

				if($user_token->save()) {
					return Response::json('Device token was saved.', 201);
				} else {
					return Response::json('There was an error saving the device token...', 500);
				}
			} else {
				return Response::json('Device Token has already been registered for that User.', 201);
			}
		} else {
			return Response::json('User ID and Device Token are required.', 400);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //return View::make('user_tokens.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        //return View::make('user_tokens.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
