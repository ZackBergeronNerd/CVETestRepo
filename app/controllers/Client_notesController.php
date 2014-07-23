<?php

class Client_notesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('client_notes.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('client_notes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$rules = array(
        	'note' => 'required',
        	'client_id' => 'required'
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()) {
        	if(!is_null($client = Client::find($input['client_id']))) {
        		if(!is_null(User_client::where('client_id', '=', $client->id)->where('user_id', '=', Auth::user()->id))) {
        			$client_note = new Client_note;
        			$client_note->note = $input['note'];
        			$client_note->client_id = $client->id;

        			if($client_note->save()) {
        				Session::flash('status_success', 'Your note as added to this client');
        				return Redirect::to('clients/' . $client->id);
        			} else {
        				Session::flash('status_error', 'There was an issue saving the note for the client');
        				return Redirect::back();
        			}
        		} else {
        			Session::flash('status_error', 'You don\'t have permission to add a note to this client...');
        			return Redirect::back();
        		}
        	} else {	
        		Session::flash('status_error', 'The client you are trying to add a note for doesn\'t seem to exist...');
        		return Redirect::back();
        	}
        } else {
        	return Redirect::back()->withInput()->withErrors($validator);
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
        return View::make('client_notes.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('client_notes.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(!is_null($client_note = Client_note::find($id))) {
    		if(!is_null(User_client::where('client_id', '=', $client_note->client_id)->where('user_id', '=', Auth::user()->id))) {
    			$client_note->note = Input::get('note');

    			if($client_note->save()) {
    				$response['note'] = nl2br($client_note->note);

    				if(strlen($client_note->note) > 40) {
    					$response['short_note'] = substr($client_note->note, 0, 40) . "...";
    				} else {
    					$response['short_note'] = $client_note->note;
    				}

    				return Response::json($response, 200);
    			} else {
    				return Response::json('There was a problem while updating your note...');
    			}
    		} else {
    			return Response::json('You don\'t have permission to update that note', 400);
    		}
    	} else {
    		return Response::json('The note you are trying to update doesn\'t exist', 400);
    	}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(!is_null($client_note = Client_note::find($id))) {
    		if(!is_null(User_client::where('client_id', '=', $client_note->client_id)->where('user_id', '=', Auth::user()->id))) {
    			if($client_note->delete()) {
    				return Response::json('Note has been deleted.', 200);
    			} else {
    				return Response::json('There was a problem while deleting your note...');
    			}
    		} else {
    			return Response::json('You don\'t have permission to delete that note', 400);
    		}
    	} else {
    		return Response::json('The note you are trying to delete doesn\'t exist', 400);
    	}
	}

}
