<?php

class Landing_pagesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('landing_pages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('landing_pages.create');
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

	public function show_agent($agent, $subdomain) {
        return App::make('Landing_pagesController')->show($subdomain, $agent);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($subdomain, $agent = null)
	{
		// If agent isn't null then there has to be a package_landing_page entry for the landing page
		// If there isn't a agent then first check for a package_landing_page entry if nothing, then look for user_landing_page entry
		// Pass landing page to the view



		if(!is_null($package = Package::where('subdomain', '=', $subdomain)->first())) {
			if(!is_null($agent)) {
				$user_package = $package->user_package()->where('slug', '=', $agent)->first();
			} else {
				$user_package = $package->user_package()->where('slug', '=', null)->where('owner', '=', 1)->first();
			}

			if(!is_null($user_package)) {
				if(!is_null($landing_page = $user_package->landing_page()->first()->landing_page()->first())) {

					$contacts = Package_contact::where('user_package_id', '=', $user_package->id)->get();

					if(Input::has('success')) {
						Session::forget('modal_error');
						Session::flash('modal_success', 'Thank you for requesting ownership information from ' . $package->name . '. We have just sent you a detailed ownership information to your inbox including up to the minute pricing and availability as well as advanced frequently asked questions. We look forward to speaking with you soon!');
					} elseif(Input::has('error')) {
						Session::forget('modal_success');
						Session::flash('modal_error', 'I\'m sorry, but there seems to be an error with the information you entered.');
					}

					return View::make('landing_pages.show')
								->with('package', $package)
								->with('user_package', $user_package)
								->with('landing_page', $landing_page)
								->with('contacts', $contacts);
				} else {
					// No landing page for the user package
					echo 'No landing page found for that package...';
				}
			} else {
				// No user package found at all...
				echo 'There was an error finding your specified package...';
			}
		} else {
			// No package found by that subdomain, check for a user_landing_package
			if(!is_null($landing_page = User_landing_page::where('slug', '=', $subdomain)->first()->landing_page()->first())) {
				return View::make('landing_pages.show')->with('landing_page', $landing_page);
			}
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('landing_pages.edit');
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
	
	public function dropbox($name) {
		$file_name = $name . ".html";
		$landing_page_location = "landing_pages/" . $file_name;

        $f = fopen($landing_page_location, "w+b");
        $metadata = Dropbox::getFile('/CVELandingPages/' . $file_name , $f);
        fclose($f);

        if(is_null($metadata)) {
            File::delete($landing_page_location);
        }

        if(File::exists($landing_page_location)) {
            $landing_page = File::get($landing_page_location);
            
            echo $landing_page;
        }

	}

}
