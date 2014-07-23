<?php
use Symfony\Component\DomCrawler\Crawler;
use CVE\Services\Validation\ValidationException;
use CVE\User\UserRepositoryInterface;

class SuperAdminController extends \BaseController {

    public function __construct(UserRepositoryInterface $user) {
      $this->user = $user;
    }

	/**
	 * Display a view for setting up a new package (website).
	 * GET /setup_package
	 *
	 * @return Response
	 */
	public function setup_package()
	{

        foreach (User::all() as $user)
        {
            $user_list[$user->id] = $user->name;
        }

        return View::make('admin.setup_package')->with('user_list', $user_list);
	}

    public function manage_packages() {
        $user_websites = UserWebsite::where('subdomain', null)->get();

        return View::make('admin.manage_packages')->with('user_websites', $user_websites);
    }

    /**
     * Save a new package (website)
     * POST /setup_package
     *
     * @return Response
     */
    public function save_package() {

        $input = Input::all();

        if(!Input::has('is_private')) {
            $input['is_private'] = 0;
        }

        if(!Input::has('disable_contact')) {
            $input['disable_contact'] = 0;
        }

        $website = new Website;
        $website->name = $input['name'];
        $website->domain = $input['domain'] . '.cve.io';
        $website->is_private = $input['is_private'];
        $website->disable_contact = $input['disable_contact'];

        $website->save();

        $user_website = new UserWebsite;
        $user_website->user_id = $input['user_id'];
        $user_website->website_id = $website->id;

        $setup_msg = "<strong>To Finishing Setting up package:</strong>
                        <ul>
                            <li>Goto: <a href='https://www.gandi.net/admin/domain/zone/list' target='_blank'> https://www.gandi.net/admin/domain/zone/list</a> and click EC2</li>
                            <li>Click Create a new version then Click the Add button.</li>
                            <li><strong>Enter the following:</strong> Type: A, Name: {$input['domain']}, Value: 199.34.229.100, TTL: 3 Hours, Click Submit</li>
                            <li>Then click 'Use this version'</li>
                        </ul>";

        if($user_website->save()) {
            Session::flash('status_success', $setup_msg);
        } else {
            Session::flash('status_error', 'There was an error setting up your package');
        }

        return Redirect::back();
    }

    /**
     * Display a view for updating a package (website)
     * GET /setup_package/:id
     *
     * @return Response
     */
    public function edit_package($id) {
        foreach (User::all() as $user)
        {
            $user_list[$user->id] = $user->name;
        }

        $user_website = UserWebsite::where('website_id', $id)->where('subdomain', null)->first();
        $user_websites = UserWebsite::where('website_id', $id)->whereNotNull('subdomain')->get();

        return View::make('admin.edit_package')
                ->with('user_website', $user_website)
                ->with('user_websites', $user_websites)
                ->with('user_list', $user_list);
    }

    /**
     * Update a package (website)
     * PUT /setup_package/:id
     *
     * @return Response
     */
    public function update_package($id) {
        $input = Input::all();
        $user_website = UserWebsite::where('website_id', $id)->where('subdomain', null)->first();
        $website = $user_website->website()->first();
        $domain = $input['domain'] . ".cve.io";

        if($user_website->user_id != $input['user_id']) {
            $user_website->user_id = $input['user_id'];
            $user_website->save();
        }

        if(!Input::has('is_private')) {
            $input['is_private'] = 0;
        }

        if(!Input::has('disable_contact')) {
            $input['disable_contact'] = 0;
        }

        if($website->domain != $domain) {
            $success_msg = "<strong>To Finishing Setting up package:</strong>
                        <ul>
                            <li>Goto: <a href='https://www.gandi.net/admin/domain/zone/list' target='_blank'> https://www.gandi.net/admin/domain/zone/list</a> and click EC2</li>
                            <li>Click Create a new version then Click the Add button.</li>
                            <li><strong>Enter the following:</strong> Type: A, Name: {$input['domain']}, Value: 199.34.229.100, TTL: 3 Hours, Click Submit</li>
                            <li>Then click 'Use this version'</li>
                        </ul>
                        <p>Make sure to update the domain on Weebly as well!</p>";
        } else {
            $success_msg = "Package was successfully updated!";
        }



        $website->name = $input['name'];
        $website->domain = $domain;
        $website->is_private = $input['is_private'];
        $website->disable_contact = $input['disable_contact'];




        if($website->save()) {
            Session::flash('status_success', $success_msg);
        } else {
            Session::flash('status_error', "There was an error updating the package");
        }

        return Redirect::back();
    }

    /**
     * Delete a package (website)
     * DELETE /setup_package/:id
     *
     * @return Response
     */
    public function delete_package($id) {
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
        return Response::json('There was an error deleting that partner packages', 400);
    }

    public function add_user($id) {
        foreach (User::all() as $user)
        {
            $user_list[$user->id] = $user->name;
        }

        $user_website = UserWebsite::where('website_id', $id)->where('subdomain', null)->first();

        return View::make('admin.add_user')
            ->with('user_website', $user_website)
            ->with('user_list', $user_list);

    }

    public function store_user($id) {
        $user_website = new UserWebsite;

        $user_website->website_id = $id;
        $user_website->subdomain = Input::get('subdomain');
        $user_website->user_id = Input::get('user_id');

        if($user_website->save()) {
            return Redirect::to('/admin/setup_package/' . $id)->with('status_success', 'Partner package created successfully!');
        } else {
            return Redirect::back()->with('status_error', 'There was an error creating partner package');
        }
    }

    public function confirm_pages($id) {
        $user_website = UserWebsite::find($id);

        $websiteURL = "http://" . $user_website->website->domain;
        $websiteHTML = file_get_contents($websiteURL);
        $pages = "";

        $crawler = new Crawler($websiteHTML);
        $menuLinks = $crawler->filter('.wsite-menu-default > li > a')->extract('href');

        foreach($menuLinks as $link) {
            $pages .= $websiteURL . $link . "\n";
        }

        return View::make('admin.enable_notifications')->with('pages', $pages)->with('user_website', $user_website);
    }

    public function enable_notifications($id) {
        $user_website = UserWebsite::find($id);
        $user_website->notify_on_change = true;

        $websiteURL = "http://" . $user_website->website->domain;
        $pages = explode("\n", Input::get('pages'));

        foreach($pages as $link) {
            $page = trim($link);

            if(strlen($page)) {
                $pageHTML = file_get_contents($page);
                $pageCrawler = new Crawler($pageHTML);

                $contentHTML = $pageCrawler->filter(".cve-content")->html();
                $page_hash = md5($contentHTML);

                if(is_null($website_page = UserWebsitesPage::where('url', $page)->first())) {
                    $website_page = new UserWebsitesPage;
                }

                $website_page->url = $page;
                $website_page->hash = $page_hash;
                $website_page->user_website_id = $user_website->id;

                $website_page->save();    
            }
        }

        $user_website->save();

        return Redirect::to('/admin/manage_packages')->with('status_success', 'Package Change Notifications have been enabled!');
    }

    public function disable_notifications($id) {
        $user_website = UserWebsite::find($id);
        $user_website->notify_on_change = NULL;

        if(count($user_website_pages = UserWebsitesPage::where('user_website_id', $user_website->id)->get())) {
            foreach($user_website_pages as $user_website_page) {
                $user_website_page->delete();
            }
        }

        if(!$user_website->save()) {
            return Response::json('failed', 400);
        }
        
        return Response::json('Success!', 200);
    }

    public function display_users() {
        $users = User::all();

        return View::make('admin.users.index')->with('users', $users);
    }

    public function create_user() {
        return View::make('admin.users.create');
    }

    public function store_new_user() {
        try {
            $user = $this->user->create(Input::all());

            return Redirect::to('admin/users/' . $user->id . '/edit')->with('status_success', 'User was created successfully, update their details below.');
        }
        catch(ValidationException $e) {
          return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    public function edit_user($id) {
        $user = User::find($id);

        return View::make('admin.users.edit')->with('user', $user);
    }

    public function login_user($id) {
        $user = User::find($id);

        Auth::login($user);

        return Redirect::to("/dashboard");
    }

    public function update_user($id) {
        $input = Input::all();
        $input['user_id'] = $id;

        try {
            $user = User::find($id);
            $this->user->updateById($id, $input);
            $user->details()->first()->update($input);

            return Redirect::to('/admin/users/' . $id . '/edit')->with('status_success', 'User has been updated!');
        }
        catch(ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    public function change_password($id) {
        $input = Input::all();

        if($input['new_pass'] == $input['retype_new_pass']) {
            $user = User::find($id);
            $user->password = Hash::make($input['new_pass']);
            $user->save();

            Session::flash('status_success', 'Password has been updated!');
            return Redirect::back();
        } else {
            Session::flash('status_error', 'New passwords did not match.');
            return Redirect::back();
        }
    }

    public function update_images($id) {
        $details = array();
        $user = User::find($id);
        if(Input::hasFile('logo')) {
            $file = Input::file('logo');

            $destinationPath = 'uploads/logos/';
            $extension =$file->getClientOriginalExtension();
            $filename = trim($user->name . "-" . $user->id) .".". $extension;

            if(File::exists($destinationPath . $filename)) {
                File::delete($destinationPath . $filename);
            }
            $file->move($destinationPath, $filename);

            $details['logo'] = $filename;
        }

        if(Input::hasFile('profile_picture')) {
            $file = Input::file('profile_picture');

            $destinationPath = 'uploads/users/';
            $extension =$file->getClientOriginalExtension();
            $filename = trim($user->name . "-" . $user->id) .".". $extension;

            if(File::exists($destinationPath . $filename)) {
                File::delete($destinationPath . $filename);
            }
            $file->move($destinationPath, $filename);

            $details['photo'] = $filename;
        }

        if(count($details)) {
            if($user->details()->first()->update($details)) {
                Session::flash('status_success', 'Successfully uploaded images');
            } else {
                Session::flash('status_error', 'Error updating account with images');
            }
        }

        return Redirect::back();
    }

    public function destroy_user($id)
    {
        if($user = $this->user->getById($id)) {
            if($user->id == Auth::user()->id) {
                return Redirect::back()->with('status_error', 'You cant delete yourself...');
            } else {
                $this->user->delete($id);
                return Redirect::to("/admin/users")->with('status_success', $user->name . ' was deleted successfully!');
            }
        } else {
            return Redirect::back()->with('status_error', 'There was an error deleting user');
        }
    }

    public function remove_photo($id) {
        $user_details = User_detail::where('user_id', $id)->first();

        $user_details->photo = null;

        if($user_details->save()) {
            return Response::json('Succcess', 200);
        } else {
            return Response::json('Failed to delete', 400);
        }
    }

    public function remove_logo($id) {
        $user_details = User_detail::where('user_id', $id)->first();

        $user_details->logo = null;

        if($user_details->save()) {
            return Response::json('Succcess', 200);
        } else {
            return Response::json('Succcess', 200);
        }
    }
}