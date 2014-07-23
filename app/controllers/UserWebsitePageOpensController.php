<?php
use Carbon\Carbon;

class UserWebsitePageOpensController extends \BaseController {

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
	* Store a newly created resource in storage from a JSONP request
	*
	* @return Response
	*/
	public function jsonp_store() {
		$return = array();

		// Check for email ID and mark UserWebsiteEmailSend->package_opened = 1;
		if(Input::has('email')) {
			$email_id = Helpers::b64_decode(Input::get('email'));

			$user_website_send = UserWebsiteSend::find($email_id);
			$user_website_send->package_opened = 1;

			$user_website_send->save();
		}

		if(Input::has('client') && Input::has('domain')) {
			$client = Helpers::b64_decode(Input::get('client'));
			$domain = Input::get('domain');
			$page = Input::get('page');
			$title = Input::get('title');

			if(Input::has('agent')) {
				$agent = Helpers::b64_decode(Input::get('agent'));
			} else {
				$agent = null;
			}

			if(!is_null($website = Website::where('domain', '=', $domain)->first())) {
				if(!is_null($user_website = UserWebsite::where('website_id', $website->id)->where('subdomain', $agent)->first())) {
					$page_open = new UserWebsitePageOpen;
					$page_open->client_id = $client;
					$page_open->user_website_id = $user_website->id;
					$page_open->page = $page;
					$page_open->title = $title;

					// Check to see how long it has been since a page open
					// If over 1 hour save new package open, Or no page opens save new package open
					$new_open = true;
					if(!is_null($page_opens = UserWebsitePageOpen::where('user_website_id', '=', $user_website->id)->where('client_id', '=', $client)->orderBy('created_at', 'desc')->first())) {
						// Get time difference and check if its less than an hour, if so, not a new open, just pageview
						$now_date = new DateTime('now');
						$create_date = new DateTime($page_opens->created_at);
						$time_diff = $now_date->diff($create_date);

						if( $time_diff->y == 0 &&
								$time_diff->m == 0 &&
								$time_diff->d == 0 &&
								$time_diff->h == 0 &&
								$time_diff->i <= 59) {
							$new_open = false;
						}
					}

					if($new_open) {
						$website_open = new UserWebsiteOpen;
						$website_open->client_id = $client;
						$website_open->user_website_id = $user_website->id;

						if($website_open->save()) {
							$website_open->push_alert();
							$website_open->email_alert();
						}
					}

					if($page_open->save()) {
						$return['success'] = 1;
						$return['message'] = "Pageview was successfully logged. new open: {$new_open}";
					} else {
						$return['success'] = 0;
						$return['message'] = "There was an error saving the pageview";
					}
				} else {
					$return['success'] = 0;
					$return['message'] = "Package not found for that user where website {$website->id} and subdomain {$agent}";
				}
			} else {
				$return['success'] = 0;
				$return['message'] = "There doesn't seems to be a package with that domain";
			}
		} else {
			$return['success'] = 0;
			$return['message'] = "No domain or client to track...";
		}

		return Response::json($return)->setCallback(Input::get('callback'));
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
