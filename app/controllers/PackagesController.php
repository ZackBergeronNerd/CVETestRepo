<?php

class PackagesController extends BaseController {
    public function __construct()
    {
        $this->beforeFilter('auth', array('only' => array('manage', 'clone_package')));
    }
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

    public function show_agent($agent, $subdomain, $tab = null) {
        return App::make('PackagesController')->show($subdomain, $tab, $agent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($subdomain, $request_tab = null, $agent = null) {

        if(!is_null($package = Package::where('subdomain', '=', $subdomain)->first())) {
            //$package['requested_tab'] = $tab;
            if(!is_null($agent)) {
                $slug = $agent;
                $user_package = User_package::where('package_id', '=', $package->id)->where('slug', '=', $slug)->first();
                $package_contacts = Package_contact::where('user_package_id', '=', $user_package->id)->orderBy('order', 'asc')->get();
                $agent = User::find($user_package->user_id);
            } else {
                $user_package = User_package::where('package_id', '=', $package->id)->where('owner', '=', 1)->where('slug', '=', null)->first();
                $package_contacts = Package_contact::where('user_package_id', '=', $user_package->id)->orderBy('order', 'asc')->get();
            }

            if(is_null($request_tab)) {
                $tab = $package->tab()->where('home_bool', '=', 1)->first();
            } else {
                if(is_null($tab = $package->tab()->where('slug', '=', $request_tab)->first())) {
                    $tab = $package->tab()->where('home_bool', '=', 1)->first();
                }
            }

            $sections = $tab->section()->where('header_bool', '=', 0)->orderBy('order', 'asc')->get();

            $salesforce_tracking = $user_package->salesforce_tracking;

            if(Input::has('client') && !is_null(User_client::where('client_id', '=', Input::get('client'))->where('user_id', '=', $user_package->user_id)->first())) {
                Session::put('client_id', Input::get('client'));
                Session::put('user_package_id', $user_package->id);
                $client_id = Input::get('client');
                // Package open event happens here, and a tab open should be added as well
                $package_opened = new User_package_open;
                $package_opened->client_id = $client_id;
                $package_opened->user_package_id = $user_package->id;
                $package_opened->ip_address = $_SERVER['REMOTE_ADDR'];
                $package_opened->user_agent = $_SERVER['HTTP_USER_AGENT'];

                if($package_opened->save()) {
                    // Check to see if the user has any devices to send a push to
                    /*
                    $user = User::find($user_package->user_id);
                    if(count($user->token()->get())) {
                        Helpers::notify_opened($package_opened);
                    }
                    */

                    $package_opened->push_alert();
                    $package_opened->email_alert();
                }
            } else {
                if(Session::has('client_id')) {
                    $client_id = Session::get('client_id');
                } else {
                    $client_id = null;
                }
            }

            if(!is_null($client_id) && !is_null(User_client::where('client_id', '=', $client_id)->where('user_id', '=', $user_package->user_id)->first())) {
                if(Session::has('user_package_id') && Session::get('user_package_id') == $user_package->id) {
                    // Tab tracking and events happen in here
                    $package_opened_tab = new User_package_opened_tab;
                    $package_opened_tab->client_id = $client_id;
                    $package_opened_tab->user_package_id = $user_package->id;
                    $package_opened_tab->package_tab_id = $tab->id;

                    // Sleep for a tiny bit to add a second onto the pageview timestamp so it isn't the same as the opened timestamp
                    if(Input::has('client')) {
                        sleep(1);
                    }

                    $package_opened_tab->save();
                }
            }

            return View::make('packages.show')
                    ->with('package', $package)
                    ->with('tab', $tab)
                    ->with('sections', $sections)
                    ->with('agent', $agent)
                    ->with('package_contacts', $package_contacts)
                    ->with('salesforce_tracking', $salesforce_tracking);
        } else {
            echo "Error....";
            //return Redirect::to('/');
        }
    }

    /**
     * Initiate editing mode of a package
     *
     */
    public function manage($subdomain, $tab = null) {
        $package = Package::where('subdomain', '=', $subdomain)->first();
        $package['requested_tab'] = $tab;

        if(!is_null(User_package::where('user_id', '=', Auth::user()->id)->where('owner', '=', 1)->where('package_id', '=', $package->id)->first())) {
            Session::flash('editing', true);
            return View::make('packages.edit')->with('package', $package);
        } else {
            return Redirect::to('/');
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
        if(!is_null($package = Package::find($id))) {
            if(!is_null(User_package::where('user_id', '=', Auth::user()->id)->where('owner', '=', 1)->where('package_id', '=', $package->id)->first())) {
                if(Input::has('section_id') && Package_tab::find(Tab_section::find(Input::get('section_id'))->package_tab_id)->package_id == $package->id) {
                    if(Input::has('section_title')) {
                        $tab_section = Tab_section::find(Input::get('section_id'));
                        $tab_section->title = e(Input::get('section_title'));

                        if($tab_section->save()) {
                            return Response::json('Title has been updated.', 200);
                        } else {
                            return Response::json('Unknown error saving section title.', 400);
                        }
                    } else if(Input::has('section_subtitle')) {
                        $tab_section = Tab_section::find(Input::get('section_id'));
                        $tab_section->subtitle = e(Input::get('section_subtitle'));

                        if($tab_section->save()) {
                            return Response::json('Subtitle has been updated.', 200);
                        } else {
                            return Response::json('Unknown error saving section title.', 400);
                        }
                    }
                } else {
                    return Response::json('Section doesn\'t exist or doesn\'t belong to this package', 400);
                }
            } else {
                return Response::json('You don\'t have permission to do that', 400);
            }
        } else {
            return Response::json('Package not found.', 400);
        }

        /*
        if(!$errors) {
            return Response::json('New package saved successfully', 200);
        } else {
            return Response::json('Package failed to save', 400);
        }
        */
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

    public function contact_agent($agent, $subdomain) {
        //$input = Input::all();

        //Input::replace($input);

        return App::make('PackagesController')->contact($subdomain, $agent);
    }

    public function clone_package() {
        $input = Input::all();

        if(is_numeric($input['package_id']) && is_string($input['subdomain'])) {
            if(is_null(Package::where('subdomain', '=', Str::slug($input['subdomain']))->first())) {
                if(!is_null($package = Package::find($input['package_id'])->first())) {
                    $original_id = $package->id;
                    $new_package = $package->replicate();

                    // Need to implement subdomain validation rules
                    $new_package->subdomain = Str::slug($input['subdomain']);

                    if(!is_null($input['name']) && count(trim($input['name']))) {
                        $new_package->name = $input['name'];
                    }

                    if($new_package->save()) {
                        $errors = 0;

                        // Clone user packages
                        foreach($package->user_package()->get() as $user_package) {
                            $new_user_package = $user_package->replicate();
                            $new_user_package->package_id = $new_package->id;
                            if(!$new_user_package->save()) {
                                $errors = 1;
                            }

                            if(!$errors) {
                                // Clone user package contacts
                                foreach($user_package->contact()->get() as $old_contact) {
                                    $new_contact = $old_contact->replicate();
                                    $new_contact->user_package_id = $new_user_package->id;
                                    if(!$new_user_package->save()) {
                                        $errors = 1;
                                    }
                                }
                            }
                        }

                        // Clone tabs
                        foreach($package->tab()->get() as $old_tab) {
                            $new_tab = $old_tab->replicate();
                            $new_tab->package_id = $new_package->id;
                            if(!$new_tab->save()) {
                                $errors = 1;
                            }

                            if(!$errors) {
                                // Clone Tab Sections
                                foreach($old_tab->section()->get() as $old_section) {
                                    $new_section = $old_section->replicate();
                                    $new_section->package_tab_id = $new_tab->id;
                                    if(!$new_section->save()) {
                                        $errors = 1;
                                    }
                                }

                                // Clone Tab Forms
                                foreach($old_tab->form()->get() as $old_form) {
                                    $new_form = $old_form->replicate();
                                    $new_form->package_tab_id = $new_tab->id;
                                    if(!$new_form->save()) {
                                        $errors = 1;
                                    }

                                    if(!$errors) {
                                        // Clone Tab Form Fields
                                        foreach($old_form->fields()->get() as $old_field) {
                                            $new_field = $old_field->replicate();
                                            $new_field->contact_form_id = $new_form->id;
                                            if(!$new_field->save()) {
                                                $errors = 1;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if(!$errors) {
                            return Response::json('New package saved successfully', 200);
                        } else {
                            return Response::json('Package failed to save', 400);
                        }
                    } else {
                        return Response::json('Package failed to save', 400);
                    }
                } else {
                    return Response::json('Package not found', 400);
                }
            } else {
                return Response::json('Subdomain already exists, please choose another.', 400);
            }
        } else {
            return Response::json('Invalid inputs', 400);
        }
    }

    /**
    * Send Invitation Form Fields to sales agent(s) based on sub domain(s)
    *
    */
    public function contact($subdomain, $agent = null) {
        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        /*
        Postmark\Mail::compose($postmarkApiKey)
            ->from('support@clearviewexpress.com', 'CVE')
            ->addTo('ryan@codechimps.com', 'Ryan Hanson')
            ->subject('Subject')
            ->messagePlain('Plaintext message')
            ->send();
        */

        if(!is_null($package = Package::where('subdomain', '=', $subdomain)->first())) {
            $input = Input::all();

            if(!is_null($agent)) {
                $user_package = $package->user_package()->where('slug', '=', $agent)->first();
                $agent_info = User::find($user_package->user_id);
                $package_contacts = Package_contact::where('user_package_id', '=', $user_package->id)->get();
            } else {
                $user_package = $package->user_package()->where('slug', '=', null)->where('owner', '=', 1)->first();
                $agent_info = User::find($user_package->user_id);
                $package_contacts = Package_contact::where('user_package_id', '=', $user_package->id)->get();
            }

            $tab_name = Contact_form::find($input['form_id'])->title;
            $message = "This client has just completed the form in the {$tab_name} tab of your Clearview Express Package:\n\n";
            foreach($input as $name=>$value) {
                if($name != "form_id") {
                    if(!is_null($field = Contact_field::where('contact_form_id', '=', $input['form_id'])->where('name', '=', $name)->first())) {
                        $message .= $field->label . " " . $value . "\n";
                    }
                }
            }


            $postmark = Postmark\Mail::compose($postmarkApiKey)
                            ->from('support@clearviewexpress.com', 'CVE')
                            ->addTo($agent_info->email, $agent_info->name)
                            ->subject('Contact Request from your ' . $package->name . ' Package!')
                            ->messagePlain($message);
            if(count($package_contacts)) {
                foreach($package_contacts as $contact) {
                    $contact_agent = User::find($contact->user_id);
                    $postmark->addTo($contact_agent->email);
                }
            }

            $email_sent = $postmark->send();
            if($email_sent) {
                return Response::json('Your email has been sent successfully.', 200);
            } else {
                return Response::json('Failed to send email...', 400);
            }
        } else {
            return Redirect::to('/');
        }
    }

    /**
    * Send package email to client
    *
    */
    public function email_package() {
        /*
        Emails can be sent to a single client, and client with additional recipients, and a copy to self.
        Emails PackageURL will be different based on who is recieving the email.
        */

        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        $input = Input::all();

        $rules = array(
            'subject' => 'required',
            'html_email' => 'required',
            'send_copy' => 'required|integer',
            'client_id' => 'required|integer',
            'user_package_id' => 'required|integer',
            'email_key' => 'required'
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()) {
            $user_package_id = Input::get('user_package_id');
            $client_id = Input::get('client_id');
            if(!is_null($user_package = User_package::find($user_package_id)) && !is_null($client = Client::find($client_id))) {
                if(!is_null($client->email) && strlen($client->email)) {

                    // If there are recipients there needs to be a loop, the loop will check to see if the email exists in the users database
                    // If the recipient email exists in the users database it will pull that client ID and attach to URL
                    // If the recipient email doesn't exist in the database, a new client needs to be created for each email
                    // If the user wants a copy sent to self then the url shouldn't have a client ID attached
                    // After the email(s) have been sent and their were new clients created, prompt the user to complete the clients info

                    if($user_package->owner) {
                        $packageURL = "http://{$user_package->package()->first()->subdomain}.cve.io/?client={$client_id}";
                    } else if(!is_null($user_package->slug)) {
                        $packageURL = "http://{$user_package->slug}.{$user_package->package()->first()->subdomain}.cve.io/?client={$client_id}";
                    }

                    $html_email = str_replace('{!PackageURL}', $packageURL, $input['html_email']);

                    $subject = $input['subject'];

                    $postmark = Postmark\Mail::compose($postmarkApiKey)
                            ->from('invitations@clearviewexpress.com', 'Package Invitations')
                            ->fromName($user_package->user()->first()->name)
                            ->replyTo($user_package->user()->first()->email, $user_package->user()->first()->name)
                            ->addTo($client->email)
                            ->subject($subject)
                            ->messageHtml($html_email);

                    if(trim(strlen($input['recipients'])) > 0) {
                        $recipients = explode(",", $input['recipients']);

                        foreach($recipients as $recipient) {
                            $postmark->addTo($recipient);
                        }
                    }

                    $attachment_dir = "uploads/attachments/{$input['email_key']}/";

                    if(is_dir($attachment_dir)) {
                        $file_array = scandir($attachment_dir);
                        foreach($file_array as $filename) {
                            $file = $attachment_dir . $filename;
                            if(is_file($file)) {
                                $postmark->addAttachment($file);
                            }
                        }
                    }

                    if($postmark->send()) {
                        if(is_dir($attachment_dir)) {
                            $file_array = scandir($attachment_dir);
                            foreach($file_array as $filename) {
                                $file = $attachment_dir . $filename;
                                if(is_file($file)) {
                                    unlink($file);
                                }
                            }
                            rmdir($attachment_dir);
                        }

                        $package_send = new User_package_send;
                        $package_send->client_id = $client->id;
                        $package_send->user_package_id = $user_package->id;

                        $package_send->save();

                        Session::flash('status_success', 'Package was successfully sent!');
                        return Redirect::to('clients');
                    } else {
                        Session::flash('status_error', 'Failed to send package...');
                        return Redirect::to('clients');
                    }
                } else {
                    Session::flash('status_error', 'This client does not have an email to send the package to, add one below.');
                    return Redirect::to('clients/'. $client->id . '/edit');
                }
            } else {
                Session::flash('status_error', 'Package and/or Client does not exist.');
                return Redirect::to('clients');
            }
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
    * Send package email to client
    *
    */
    public function email_website() {

        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        $input = Input::all();

        $rules = array(
            'subject' => 'required',
            'html_email' => 'required',
            'send_copy' => 'required|integer',
            'client_id' => 'required|integer',
            'user_website_id' => 'required|integer',
            'email_key' => 'required'
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()) {
            $user_website_id = Input::get('user_website_id');
            $client_id = Input::get('client_id');
            if(!is_null($user_website = UserWebsite::find($user_website_id)) && !is_null($client = Client::find($client_id))) {
                if(!is_null($client->email) && strlen($client->email)) {

                    // If there are recipients there needs to be a loop, the loop will check to see if the email exists in the users database
                    // If the recipient email exists in the users database it will pull that client ID and attach to URL
                    // If the recipient email doesn't exist in the database, a new client needs to be created for each email
                    // If the user wants a copy sent to self then the url shouldn't have a client ID attached

                    $website_send = new UserWebsiteSend;
                    $website_send->user_website_id = $user_website->id;
                    $website_send->client_id = $client_id;

                    $website_send->save();

                    $encrypted_client = Helpers::b64_encode($client_id);
                    $encrypted_email = Helpers::b64_encode($website_send->id);

                    if(is_null($user_website->subdomain)) {
                        $packageURL = "http://{$user_website->website->domain}/#?c={$encrypted_client}&e={$encrypted_email}";
                    } else {
                        $packageURL = "http://{$user_website->subdomain}.{$user_website->website->domain}/?c={$encrypted_client}&e={$encrypted_email}";
                    }

                    $html_email = str_replace('{!PackageURL}', $packageURL, $input['html_email']);
                    $html_email = str_replace('{!EmailID}', $encrypted_email, $html_email);
                    $html_email = str_replace('contenteditable="true"', "", $html_email);

                    $subject = $input['subject'];

                    $postmark = Postmark\Mail::compose($postmarkApiKey)
                            ->from('invitations@clearviewexpress.com', 'Package Invitations')
                            ->fromName($user_website->user->name)
                            ->replyTo($user_website->user->email, $user_website->user->name)
                            ->addTo($client->email)
                            ->subject($subject)
                            ->messageHtml($html_email);

                    if(trim(strlen($input['recipients'])) > 0) {
                        $recipients = explode(",", $input['recipients']);

                        foreach($recipients as $recipient) {
                            $postmark->addTo($recipient);
                        }
                    }

                    $attachment_dir = "uploads/attachments/{$input['email_key']}/";

                    if(is_dir($attachment_dir)) {
                        $file_array = scandir($attachment_dir);
                        foreach($file_array as $filename) {
                            $file = $attachment_dir . $filename;
                            if(is_file($file)) {
                                $postmark->addAttachment($file);
                            }
                        }
                    }

                    if($postmark->send()) {
                        if(is_dir($attachment_dir)) {
                            $file_array = scandir($attachment_dir);
                            foreach($file_array as $filename) {
                                $file = $attachment_dir . $filename;
                                if(is_file($file)) {
                                    unlink($file);
                                }
                            }
                            rmdir($attachment_dir);
                        }

                        Session::flash('status_success', 'Package was successfully sent!');
                        return Redirect::to('clients');
                    } else {
                        Session::flash('status_error', 'Failed to send package...');
                        return Redirect::to('clients');
                    }
                } else {
                    Session::flash('status_error', 'This client does not have an email to send the package to, add one below.');
                    return Redirect::to('clients/'. $client->id . '/edit');
                }
            } else {
                Session::flash('status_error', 'Package and/or Client does not exist.');
                return Redirect::to('clients');
            }
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
    * Send package email to client
    *
    */
    public function save_attachment($email_key) {
        // Attachments should be saved in a folder by an email key that is unique to each form
        // The key will be submitted with the form, and the handler will find the folder and send the attachments,
        $file = Input::file('file');

        $destinationPath = 'uploads/attachments/'.$email_key;
        $filename = str_replace(" ", "_", $file->getClientOriginalName());
        $filename = time() . $filename;
        //$extension =$file->getClientOriginalExtension();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if( $upload_success ) {
           return Response::json('success', 200);
        } else {
           return Response::json('error', 400);
        }
    }

}
