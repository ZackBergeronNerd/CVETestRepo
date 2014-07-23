<?php
use CVE\Services\Validation\ValidationException;
use CVE\Client\ClientRepositoryInterface;

class ClientsController extends BaseController {

	public function __construct(ClientRepositoryInterface $client)
    {
    	$this->client = $client;
        $this->beforeFilter('auth', array('except' => 'modal'));
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
     * /clients/
	 */
	public function index() {
		if(count($user_clients = Auth::user()->client()->get())) {
			return View::make('clients.index')->with('user_clients', $user_clients);
		} else {
			Session::flash('status_error', 'You don\'t have any clients yet. Create one below.');
			return Redirect::to('clients/create');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
     * GET: /clients/create
	 */
	public function create()
	{
		if(!is_null($types = Auth::user()->client_type()->orderBy('name', 'ASC')->get())) {
			$client_types = array();
			foreach($types as $type) {
				$client_types[$type->id] = $type->name;
			}
		}

		if(!is_null($sources = Auth::user()->client_source()->orderBy('name', 'ASC')->get())) {
			$client_sources = array();
			foreach($sources as $source) {
				$client_sources[$source->id] = $source->name;
			}
		}

		if(!is_null($statuses = Auth::user()->client_status()->orderBy('name', 'ASC')->get())) {
			$client_statuses = array();
			foreach($statuses as $status) {
				$client_statuses[$status->id] = $status->name;
			}
		}

		if(!is_null($temps = Auth::user()->client_temperature()->orderBy('created_at', 'ASC')->get())) {
			$client_temps = array();
			foreach($temps as $temp) {
				$client_temps[$temp->id] = $temp->name;
			}
		}

        return View::make('clients.create')
        		->with('client_types', $client_types)
        		->with('client_sources', $client_sources)
        		->with('client_statuses', $client_statuses)
        		->with('client_temps', $client_temps);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
     * POST: /clients
	 */
	public function store() {
		try {
          $client = $this->client->create(Input::all());
          
          $this->client->addToUser($client->id, Auth::user()->id);

          return Redirect::to('clients/' . $client->id . '/edit')
          		->with('status_success', 'Client was successfully created! Feel free to update their information below.');
        }
        catch(ValidationException $e) {
          return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
     * PUT: /clients/{id}
	 */
	public function update($id) {
		try {
          $this->client->updateById($id, Input::all());

          return Redirect::to('clients/' . $id . '/edit')->with('status_success', 'Client has been updated!');
        }
        catch(ValidationException $e) {
          return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     * GET: /clients/{id}/edit
     */
    public function edit($id)
    {
        if(!is_null($client = Client::find($id))) {
            if(!is_null($user_client = User_client::where('user_id', '=', Auth::user()->id)->where('client_id', '=', $client->id)->first())) {
                if(!is_null($types = Auth::user()->client_type()->orderBy('name', 'ASC')->get())) {
                    $client_types = array();
                    foreach($types as $type) {
                        $client_types[$type->id] = $type->name;
                    }
                }

                if(!is_null($sources = Auth::user()->client_source()->orderBy('name', 'ASC')->get())) {
                    $client_sources = array();
                    foreach($sources as $source) {
                        $client_sources[$source->id] = $source->name;
                    }
                }

                if(!is_null($statuses = Auth::user()->client_status()->orderBy('name', 'ASC')->get())) {
                    $client_statuses = array();
                    foreach($statuses as $status) {
                        $client_statuses[$status->id] = $status->name;
                    }
                }

                if(!is_null($temps = Auth::user()->client_temperature()->orderBy('created_at', 'ASC')->get())) {
                    $client_temps = array();
                    foreach($temps as $temp) {
                        $client_temps[$temp->id] = $temp->name;
                    }
                }

                return View::make('clients.edit')
                    ->with('client', $client)
                    ->with('user_client', $user_client)
                    ->with('client_types', $client_types)
                    ->with('client_sources', $client_sources)
                    ->with('client_statuses', $client_statuses)
                    ->with('client_temps', $client_temps);
            } else {
                Session::flash('status_error', 'You do not have permission to view this client...');
                return Redirect::to('dashboard');
            }
        } else {
            Session::flash('status_error', 'Client doesn\'t exist...');
            return Redirect::to('dashboard');
        }
        //return View::make('clients.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(!is_null($client = Client::find($id))) {
            if(!is_null($user_client = User_client::where('user_id', '=', Auth::user()->id)->where('client_id', '=', $client->id)->first())) {
                if(!is_null($types = Auth::user()->client_type()->orderBy('name', 'ASC')->get())) {
                    $client_types = array();
                    foreach($types as $type) {
                        $client_types[$type->id] = $type->name;
                    }
                }

                if(!is_null($sources = Auth::user()->client_source()->orderBy('name', 'ASC')->get())) {
                    $client_sources = array();
                    foreach($sources as $source) {
                        $client_sources[$source->id] = $source->name;
                    }
                }

                if(!is_null($statuses = Auth::user()->client_status()->orderBy('name', 'ASC')->get())) {
                    $client_statuses = array();
                    foreach($statuses as $status) {
                        $client_statuses[$status->id] = $status->name;
                    }
                }

                if(!is_null($temps = Auth::user()->client_temperature()->orderBy('created_at', 'ASC')->get())) {
                    $client_temps = array();
                    foreach($temps as $temp) {
                        $client_temps[$temp->id] = $temp->name;
                    }
                }

                return View::make('clients.edit')
                    ->with('client', $client)
                    ->with('user_client', $user_client)
                    ->with('client_types', $client_types)
                    ->with('client_sources', $client_sources)
                    ->with('client_statuses', $client_statuses)
                    ->with('client_temps', $client_temps);
            } else {
                Session::flash('status_error', 'You do not have permission to view this client...');
                return Redirect::to('dashboard');
            }
        } else {
            Session::flash('status_error', 'Client doesn\'t exist...');
            return Redirect::to('dashboard');
        }
        //return View::make('clients.edit');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
     * DELETE: /clients/{id}
	 */
	public function destroy($id)
	{
		$client = Client::find($id);

		if($client) {
            User_client::where('client_id', $client->id)->delete();
			$client->delete();

			return Response::json('Client has been deleted', 200);
		} else {
			return Response::json('There was a problem while deleting your client...');
		}
	}

	/**
	 * Display list of packages to send to client
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function select_package($id)
	{
		if(!is_null($client = Client::find($id))) {
			if(!is_null($client->email) && strlen(trim($client->email))) {
				if(!is_null(User_client::where('client_id', '=', $client->id)->where('user_id', '=', Auth::user()->id))) {
					if(count(User_package::where('user_id', '=', Auth::user()->id)->get())) {
						return View::make('clients.send_package')->with('client', $client)->with('user_package', null);
					} else {
						Session::flash('status_error', 'You do not have any packages to send...');
						return Redirect::to('clients/'.$id);
					}
				} else {
					Session::flash('status_error', 'You do not have permission to interact with that client.');
					return Redirect::to('clients');
				}
			} else {
				Session::flash('status_error', 'Client does not have an email on record and one below.');
				return Redirect::to('clients/' . $client->id . '/edit');
			}
		} else {
			Session::flash('status_error', 'Client does not exist...');
			return Redirect::to('clients');
		}

	}

	/**
	 * Display list of packages to send to client
	 *
	 * @param  int  $client_id
	 * @param  int  $user_package_id
	 * @return Response
	 */
	public function send_package($client_id, $user_package_id)
	{
		if(!is_null($client = Client::find($client_id))) {
			if(!is_null(User_client::where('client_id', '=', $client->id)->where('user_id', '=', Auth::user()->id))) {
				if(!is_null($user_package = User_package::where('id', '=', $user_package_id)->where('user_id', '=', Auth::user()->id)->first())) {

					$package_contents = "";

                    foreach($user_package->package()->first()->tab()->orderBy('order')->get() as $tab) {
                        $package_contents .= "<li>- $tab->title</li>\n";
                    }

                    $package_message = "Thank you for your interest in ownership at {$user_package->package()->first()->name}. Simply click the link below to open your Ownership Package.";

                    $html_email = str_replace('{!PackageContents}', $package_contents, $user_package->package()->first()->html_email);
                    $html_email = str_replace('{!PackageMessage}', $package_message, $html_email);

                    // Email Session code to link to file attachments
                    $email_key = md5(time() . $client->id . $user_package->id);

					return View::make('clients.send_package')
							->with('client', $client)
							->with('user_package', $user_package)
							->with('html_email', $html_email)
							->with('email_key', $email_key);
				} else {
					Session::flash('status_error', 'Package does not exist...');
					return Redirect::to('clients');
				}
			} else {
				Session::flash('status_error', 'You do not have permission to interact with that client.');
				return Redirect::to('clients');
			}
		} else {
			Session::flash('status_error', 'Client does not exist...');
			return Redirect::to('clients');
		}
	}

	/**
	* Display list of packages to send to client
	*
	* @param  int  $id
	* @return Response
	*/
	public function select_website($id) {
		if(!is_null($client = Client::find($id))) {
			if(!is_null($client->email) && strlen(trim($client->email))) {
				if(!is_null(User_client::where('client_id', '=', $client->id)->where('user_id', '=', Auth::user()->id))) {
					if(count(UserWebsite::where('user_id', '=', Auth::user()->id)->get())) {
						return View::make('clients.send_website')->with('client', $client)->with('user_website', null);
					} else {
						Session::flash('status_error', 'You do not have any packages to send...');
						return Redirect::to('clients/'.$id);
					}
				} else {
					Session::flash('status_error', 'You do not have permission to interact with that client.');
					return Redirect::to('clients');
				}
			} else {
				Session::flash('status_error', 'Client does not have an email on record and one below.');
				return Redirect::to('clients/' . $client->id . '/edit');
			}
		} else {
			Session::flash('status_error', 'Client does not exist...');
			return Redirect::to('clients');
		}

	}

	/**
	* Display form to send package to client
	*
	* @param  int  $client_id
	* @param  int  $user_website_id
	* @return Response
	*/
	public function send_website($client_id, $user_website_id) {
		if(!is_null($client = Client::find($client_id))) {
			if(!is_null(User_client::where('client_id', '=', $client->id)->where('user_id', '=', Auth::user()->id))) {
				if(!is_null($user_website = UserWebsite::where('id', '=', $user_website_id)->where('user_id', '=', Auth::user()->id)->first())) {

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
                    } else {
                        return Redirect::to('user_websites')->with('status_error', 'There is no email template setup for: ' . $user_website->website->name);
                    }

					// Email Session code to link to file attachments
					$email_key = md5(time() . $client->id . $user_website->id);

					return View::make('clients.send_website')
							->with('client', $client)
							->with('user_website', $user_website)
							->with('html_email', $html_email)
							->with('email_key', $email_key);
				} else {
					Session::flash('status_error', 'Package does not exist...');
					return Redirect::to('clients');
				}
			} else {
				Session::flash('status_error', 'You do not have permission to interact with that client.');
				return Redirect::to('clients');
			}
		} else {
			Session::flash('status_error', 'Client does not exist...');
			return Redirect::to('clients');
		}
	}



	/**
	 * Display notes for the specified client
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function notes($id)
	{
		if(!is_null($client = Client::find($id))) {
        	if(!is_null($user_client = User_client::where('user_id', '=', Auth::user()->id)->where('client_id', '=', $client->id)->first())) {

        		return View::make('clients.notes')
        				->with('client', $client);
        	} else {
        		Session::flash('status_error', 'You do not have permission to view this client...');
        		return Redirect::to('dashboard');
        	}
        } else {
        	Session::flash('status_error', 'Client doesn\'t exist...');
        	return Redirect::to('dashboard');
        }
	}

	/**
	 * Display package activity for the specified client
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function clearview($id) {
		if(!is_null($client = Client::find($id))) {
        	if(!is_null($user_client = User_client::where('user_id', '=', Auth::user()->id)->where('client_id', '=', $client->id)->first())) {

        		return View::make('clients.clearview')
        				->with('client', $client);
        	} else {
        		Session::flash('status_error', 'You do not have permission to view this client...');
        		return Redirect::to('dashboard');
        	}
        } else {
        	Session::flash('status_error', 'Client doesn\'t exist...');
        	return Redirect::to('dashboard');
        }
	}

	/**
	 * Return JSON array of clearview timeline for client
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function clearview_json($client_id, $user_website_id) {
		if(!is_null($client = Client::find($client_id))) {
        	if(!is_null($user_client = User_client::where('user_id', '=', Auth::user()->id)->where('client_id', '=', $client->id)->first())) {
        		if(!is_null($user_website = UserWebsite::where('user_id', '=', Auth::user()->id)->where('id', '=', $user_website_id)->first())) {
        			$sends = UserWebsiteSend::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $client->id)->get();
			    	$opens = UserWebsiteOpen::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $client->id)->get();
			    	$pageviews = UserWebsitePageOpen::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $client->id)->get();

			    	$return = array();
			    	$count = 0;

			    	foreach($pageviews as $pageview) {
			    		$return[$count]['id'] = $count;
			    		$return[$count]['message'] = "Read the " . $pageview->title . " page";
			    		$return[$count]['timestamp'] = $pageview->created_at;
			    		$return[$count]['date'] = date("F j", strtotime($pageview->created_at));
            			$return[$count]['time'] = date("g:i:s A", strtotime($pageview->created_at));
			    		$return[$count]['color'] = 'purple';
			    		$return[$count]['icon'] = 'fa-eye';
			    		$count++;
			    	}

			    	foreach($opens as $open) {
			    		$return[$count]['id'] = $count;
			    		$return[$count]['message'] = "Opened " . $open->user_website()->first()->website()->first()->name;
			    		$return[$count]['timestamp'] = $open->created_at;
			    		$return[$count]['date'] = date("F j", strtotime($open->created_at));
            			$return[$count]['time'] = date("g:i:s A", strtotime($open->created_at));
			    		$return[$count]['color'] = 'green';
			    		$return[$count]['icon'] = 'fa-folder-open';
			    		$count++;
			    	}

			    	foreach($sends as $send) {
			    		$return[$count]['id'] = $count;
			    		$return[$count]['message'] = $send->user_website()->first()->website()->first()->name . " was sent to " . $client->first_name;
			    		$return[$count]['timestamp'] = $send->created_at;
			    		$return[$count]['date'] = date("F j", strtotime($send->created_at));
            			$return[$count]['time'] = date("g:i:s A", strtotime($send->created_at));
			    		$return[$count]['color'] = 'blue';
			    		$return[$count]['icon'] = 'fa-share';
			    		$count++;
			    	}

					usort($return, function($a, $b) {
						return strtotime($b["timestamp"]) - strtotime($a["timestamp"]);
					});

					if(Input::has('take') && Input::has('skip')) {
						$entries = array_slice($return, Input::get('skip'), Input::get('take'));
						return Response::json($entries, 200);
					} else {
						return Response::json($return, 200);
					}

        		} else {
        			return Response::json('You do not have permission to view this client...', 404);
        		}
        	} else {
        		return Response::json('You do not have permission to view this client...', 404);
        	}
        } else {
        	return Response::json('Client does not exist', 404);
        }
	}

	/**
	 * Return JSON array of client activity overview
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function overview($client_id, $user_website_id) {
        $return['total_opens'] = Clearview::opens_by_website_and_client($user_website_id, $client_id);
        $return['total_pageviews'] = Clearview::page_opens_by_website_and_client($user_website_id, $client_id);
        $return['total_sends'] = Clearview::sends_by_website_and_client($user_website_id, $client_id);
        $return['open_rate'] = Clearview::open_rate_by_website_and_client($user_website_id, $client_id);

        return Response::json($return, 200);
	}



    public function modal() {
        $domain = Input::get('domain');

        if(Input::has('agent')) {
            $agent = Helpers::b64_decode(Input::get('agent'));
        } else {
            $agent = null;
        }

        $website = Website::where('domain', $domain)->first();
        $user_website = UserWebsite::where('website_id', $website->id)->where('subdomain', $agent)->first();
        $user = $user_website->user()->first();

        try {
            $client = Client::where('email', Input::get('email'))->first();

            if(!is_null($client)) {
            	if(is_null(User_client::where('client_id', $client->id)->where('user_id', $user->id)->first())) {
            		$clientArray['first_name'] = Input::get('first_name');
	                $clientArray['last_name'] = Input::get('last_name');
	                $clientArray['email'] = Input::get('email');
	                $clientArray['phone_number'] = Input::get('phone');
	                $clientArray['client_type_id'] = 1;
	                $clientArray['client_status_id'] = 1;
	                $clientArray['client_source_id'] = 1;
	                $clientArray['client_temperature_id'] = 1;

	                $client = $this->client->create($clientArray);
	                $this->client->addToUser($client->id, $user->id);
            	}
            } else {
                $clientArray['first_name'] = Input::get('first_name');
                $clientArray['last_name'] = Input::get('last_name');
                $clientArray['email'] = Input::get('email');
                $clientArray['phone_number'] = Input::get('phone');
                $clientArray['client_type_id'] = 1;
                $clientArray['client_status_id'] = 1;
                $clientArray['client_source_id'] = 1;
                $clientArray['client_temperature_id'] = 1;

                $client = $this->client->create($clientArray);
                $this->client->addToUser($client->id, $user->id);
            }

            $response['client'] = Helpers::b64_encode($client->id);

            return Response::json($response, 200)->setCallback(Input::get('callback'));
        }
        catch(ValidationException $e) {
            return Response::json($e->getErrors(), 200)->setCallback(Input::get('callback'));
        }

    }

}
