<?php

class UserWebsitesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user_websites = Auth::user()->user_website()->get();

		return View::make('user_websites.index')->with('user_websites', $user_websites);
	}

	/**
	* Display a listing of the clients to choose from to send a package too
	*
	* @return Response
	*/
	public function select_client($id) {
			if(!is_null($user_website = UserWebsite::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->first())) {
					if(count($user_clients = Auth::user()->client()->get())) {
							return View::make('user_websites.select_client')
									->with('user_website', $user_website)
									->with('user_clients', $user_clients);
					} else {
							return Redirect::to('user_websites')->with('status_error', 'You do not have any clients to send a package to.');
					}
			} else {
					return Redirect::to('user_websites')->with('status_error', 'That package could not be found in your account...');
			}
	}

    public function manage_partners($id)
    {
        $user_website = UserWebsite::find($id);
        $user_websites = UserWebsite::where('website_id', $user_website->website()->first()->id)->whereNotNull('subdomain')->get();

        return View::make('user_websites.manage_partners')
                ->with('user_website', $user_website)
                ->with('user_websites', $user_websites);
    }

    public function add_partner($id)
    {

        $input = Input::all();
        $user = Auth::user();
        $user_website = UserWebsite::find($id);

        $partner_invite = new PartnerInvite;
        $partner_invite->user_website_id = $user_website->id;
        $partner_invite->user_id = $user->id;
        $partner_invite->partner_first = $input['partner_first'];
        $partner_invite->partner_last = $input['partner_last'];
        $partner_invite->partner_email = $input['partner_email'];
        $partner_invite->subdomain = $input['subdomain'];
        $partner_invite->invite_code = md5($user_website->id . $user->id . time() . rand(0,1000));

        $partner_invite->save();

        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        $invitation_url = "http://cve.io/accept_invitation/" . $partner_invite->invite_code;

        if(!is_null($user->details->logo)) {
            $logo = '<img  style="display: block;" src="'. Helpers::timthumb('/uploads/logos/' . $user->details->logo, 250) . '" alt="logo" width="250">';
        } else {
            $logo = '<a href="http://cve.io" style="display: block;"><img  style="display: block;" src="http://cve.io/img/cve_logo.png" alt="logo" width="241"></a>';
        }

        $html_email = file_get_contents("http://cve.io/emails/partner.html");
        $html_email = str_replace('{%date%}', date("m/d/y"), $html_email);
        $html_email = str_replace('{%user_name%}', $user->name, $html_email);
        $html_email = str_replace('{%package_name%}', $user_website->website->name, $html_email);
        $html_email = str_replace('{%invitation_url%}', $invitation_url, $html_email);
        $html_email = str_replace('{%logo%}', $logo, $html_email);
        $html_email = str_replace('{%partner_first%}', $partner_invite->partner_first, $html_email);

        $subject = $user_website->website->name . " Referral Partner";

        $postmark = Postmark\Mail::compose($postmarkApiKey)
            ->from('invitations@clearviewexpress.com', $user->name)
            ->fromName($user->name)
            ->replyTo($user->email)
            ->addTo(Input::get('partner_email'))
            ->subject($subject)
            ->messageHtml($html_email);

        if($postmark->send()) {
            Session::flash('status_success', 'Partner Invitation was sent successfully!');
            return Redirect::to('/user_websites');
        } else {
            Session::flash('status_error', "Failed to send invitation");
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        $user_website = UserWebsite::find($id);

        if(!is_null($user_website)) {
        	if(is_null($user_website->subdomain)) {
	        	$website = $user_website->website()->first();
	        	if($website->delete()) {
		        	return Response::json('Successfully deleted!', 200);
	        	}
        	} else {
	        	if($user_website->delete()) {
	                return Response::json('Successfully deleted!', 200);
	            }
        	}
        }
        return Response::json('There was an error deleting that package.', 400);
    }

    public function web_to_cve($id) {
        $web_to_cve = File::get('emails/web-to-cve.html');
        $web_to_cve = str_replace("{%website_hash%}", Helpers::b64_encode($id), $web_to_cve);
        $return['code'] = $web_to_cve;

        return Response::json($return, 200);
    }

    public function save_from_web() {
        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        // Controller for handling client creation and package send from web-to-cve code"
        $input = Input::all();

        $rules = [
            'first_name' => 'required',
            'last_name' =>  'required',
            'email' =>      'required|email',
        ];

        $validation = Validator::make($input, $rules);

        if($validation->passes()) {
            $user_website = UserWebsite::find(Helpers::b64_decode($input['pid']));
            $user = $user_website->user()->first();

            $client = Client::where('email', $input['email'])->first();

            if(is_null($client)) {
                $client = new Client;
                $client->first_name = $input['first_name'];
                $client->last_name = $input['last_name'];
                $client->email = $input['email'];
                $client->phone_number = $input['phone'];
                $client->client_type_id = 1;
                $client->client_status_id = 1;
                $client->client_source_id = 1;
                $client->client_temperature_id = 1;

                $client->save();
            }

            if(is_null(User_client::where('user_id', $user->id)->where('client_id', $client->id))) {
                $user_client = new User_client;
                $user_client->user_id = $user->id;
                $user_client->client_id = $client->id;

                $user_client->save();
            }

            $website_send = new UserWebsiteSend;
            $website_send->user_website_id = $user_website->id;
            $website_send->client_id = $client->id;

            $website_send->save();

            $encrypted_client = Helpers::b64_encode($client->id);
            $encrypted_email = Helpers::b64_encode($website_send->id);

            if(is_null($user_website->subdomain)) {
                $packageURL = "http://{$user_website->website->domain}/#?c={$encrypted_client}&e={$encrypted_email}";
            } else {
                $packageURL = "http://{$user_website->subdomain}.{$user_website->website->domain}/?c={$encrypted_client}&e={$encrypted_email}";
            }

            // Redirect determination
            if($input['when'] == "later") {
                if(strlen($input['retURL'])) {
                    $return_url = $input['retURL'];
                } else {
                    if(strpos(URL::previous(), "?")) {
                        $return_url = URL::previous() . "&returned=1";
                    } else {
                        $return_url = URL::previous() . "?returned=1";
                    }
                }
            } else if($input['when'] == "now") {
                $return_url = $packageURL;
            }

            $package_message = "Thank you for your interest in {$user_website->website->name}. Simply click the link below to open your package containing additional details.";

            if(is_null($user_website->subdomain)) {
                $file_name = $user_website->website->domain . ".html";
            } else {
                $file_name = $user_website->subdomain . "." . $user_website->website->domain . ".html";
            }

            $email_location = "emails/invitations/" . $file_name;

            $f = fopen($email_location, "w+b");
            $metadata = Dropbox::getFile('/CVEmails/' . $file_name , $f);
            fclose($f);

            if(is_null($metadata)) {
                File::delete($email_location);
            }

            if(File::exists($email_location)) {
                $html_email = File::get($email_location);
                $html_email = str_replace('{!PackageMessage}', $package_message, $html_email);
            }

            $html_email = str_replace('{!PackageURL}', $packageURL, $html_email);
            $html_email = str_replace('{!EmailID}', $encrypted_email, $html_email);
            $html_email = str_replace('contenteditable="true"', "", $html_email);

            $subject = $user_website->website->name . " information enclosed";

            $postmark = Postmark\Mail::compose($postmarkApiKey)
                ->from('invitations@clearviewexpress.com', 'Package Invitations')
                ->fromName($user_website->user->name)
                ->replyTo($user_website->user->email, $user_website->user->name)
                ->addTo($client->email)
                ->subject($subject)
                ->messageHtml($html_email);

            $postmark->send();
        } else {
            if(strpos(URL::previous(), "?")) {
                $return_url = URL::previous() . "&error=1";
            } else {
                $return_url = URL::previous() . "?error=1";
            }
        }

        return Redirect::to($return_url);
    }


	public function send_website() {
			// Grab the users packages for the current logged in user and pass them to the view.
			$user_websites = Auth::user()->user_website()->get();

			return View::make('user_websites.send_website')->with('user_websites', $user_websites);
	}

    public function json($client_id = null) {
        if(is_null($client_id)) {
            $websites = Clearview::user_websites(Auth::user()->id);
        } else {
            $websites = Clearview::user_websites_by_client(Auth::user()->id, $client_id);
        }

        return Response::json($websites, 200);
    }

    public function glance($id) {
        if($id == 'null') {
            $return = array();
            $return['sends'] = Clearview::sends_by_user(Auth::user()->id);
            $return['opens'] = Clearview::opens_by_user(Auth::user()->id);
            $return['pageviews'] = Clearview::page_opens_by_user(Auth::user()->id);
            $return['open_rate'] = Clearview::open_rate_by_user(Auth::user()->id);
            //print_r($return);
            return Response::json($return, 200);
        } else if(is_numeric($id)) {
            if(!is_null($user_website = UserWebsite::where('id', '=', $id)->where('user_id', '=', Auth::user()->id)->first())) {
                $return = array();
                $return['sends'] = Clearview::sends_by_website($user_website->id);
                $return['opens'] = Clearview::opens_by_website($user_website->id);
                $return['pageviews'] = Clearview::page_opens_by_website($user_website->id);
                $return['open_rate'] = Clearview::open_rate_by_website($user_website->id);

                return Response::json($return, 200);
            } else {
                return Response::json('Package doesn\'t exist or isn\'t yours.', 404);
            }
        } else {
            return Response::json('Package doesn\'t exist.', 404);
        }
    }

    public function clearview($id) {
        if(Input::has('take')) {
            $take = Input::get('take');
        } else {
            $take = 10;
        }

        if(Input::has('skip')) {
            $skip = Input::get('skip');
        } else {
            $skip = 0;
        }

        if($id == 'all') {
            if(count($user_websites = Auth::user()->user_website()->get())) {
                $websiteIDS = array();
                foreach($user_websites as $user_website) {
                    $websiteIDS[] .= $user_website->id;
                }

                if(!count($opens = UserWebsiteOpen::whereIn('user_website_id', $websiteIDS)->orderBy('created_at', 'desc')->skip($skip)->take($take)->get())) {
                    return Response::json('No Package Activity for your Account', 404);
                }
            } else {
                return Response::json('You do not have any packages', 404);
            }
        } else {
            if(!is_null($user_website = UserWebsite::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->first())) {
                $opens = UserWebsiteOpen::where('user_website_id', '=', $user_website->id)->orderBy('created_at', 'desc')->skip($skip)->take($take)->get();
            } else {
                return Response::json('Package doesn\'t exist or isn\'t yours.', 404);
            }
        }

        $count = 0;
        $entries = array();

        foreach($opens as $open) {
            $client = Client::find($open->client_id);
            $client_name = $client->first_name . " " . $client->last_name;
            $first_open = UserWebsiteOpen::where('client_id', '=', $client->id)->where('user_website_id', '=', $open->user_website_id)->orderBy('created_at', 'asc')->first();

            $total_opens = UserWebsiteOpen::whereBetween('created_at', array($first_open->created_at, $open->created_at))->where('client_id', '=', $client->id)->where('user_website_id', '=', $open->user_website_id)->get();

            $user_website = UserWebsite::find($open->user_website_id);
            $website_name = $user_website->website->name;

            if($open->id == $first_open->id) {
                $color = 'green';
                $icon = 'fa-exclamation';
            } else {
                $color = 'purple';
                $icon = 'fa-folder-open';
            }

            $entries[$count]['id'] = $count;
            $entries[$count]['color'] = $color;
            $entries[$count]['icon'] = $icon;
            $entries[$count]['date'] = date("F j", strtotime($open->created_at));
            $entries[$count]['time'] = date("g:i A", strtotime($open->created_at));
            $entries[$count]['message'] = '<a href="/clients/' . $client->id . '/edit#clearview">' . $client_name . '</a> read <a href="/user_websites/' . $user_website->id .'">' . $website_name . '</a>';
            $entries[$count]['total_opens'] = count($total_opens);

            $count++;
        }

        return Response::json($entries, 200);
    }

    public function weebly() {
        $return = array();

        $website = Website::where('domain', Input::get('domain'))->first();
        if($website->is_private) {
            $return['is_private'] = true;
        } else {
            $return['is_private'] = false;
        }


        // Check to see if contact information is disabled or not
        if($website->disable_contact) {
            $return['disable_contact'] = true;
        } else {
            $return['disable_contact'] = false;

            $user_website = UserWebsite::where('website_id', $website->id)->where('subdomain', null)->first();
            $user = $user_website->user()->first();
            $return['owner'] = $user->toArray();
            $return['owner']['details'] = $user->details()->first()->toArray();

            if(Input::has('agent')) {
                $agent_subdomain = Helpers::b64_decode(Input::get('agent'));
                $agent_website = UserWebsite::where('website_id', $website->id)->where('subdomain', $agent_subdomain)->first();
                $agent = $agent_website->user()->first();
                $return['agent'] = $agent->toArray();
                $return['agent']['details'] = $agent->details()->first()->toArray();
            }
        }

        return Response::json($return)->setCallback(Input::get('callback'));
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

	

}
