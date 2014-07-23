<?php

class UserWebsiteSendsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	* Check to see if an invitation email was opened and set email_opened to true.
	*
	* @return Response
	*/
	public function tracker() {

		header('Content-Type: image/jpeg');

		$im = imagecreate(1,1);
		$white = imagecolorallocate($im,255,255,255);

		imagesetpixel($im,1,1,$white);
		imagejpeg($im);
		imagedestroy($im);

		// Make sure email ID is present
		if(isset($_GET['e'])) {
			// Decode Email ID and make sure it exists
			if(!is_null($email = UserWebsiteSend::find(Helpers::b64_decode($_GET['e'])))) {
					// Check to see if email has already been marked as open so we don't run an extra query
					if(!$email->email_opened) {
						$email->email_opened = 1;
						$email->save();
					}
			}
		}

		return Response::make($im, 200, array('content-type' => 'image/jpg'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
