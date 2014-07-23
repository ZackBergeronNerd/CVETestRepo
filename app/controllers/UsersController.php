<?php
use Carbon\Carbon;
use CVE\Services\Validation\ValidationException;
use CVE\User\UserRepositoryInterface;

class UsersController extends BaseController {

    public function __construct(UserRepositoryInterface $user) {
      $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return Response::json(User::where('mobile_key', '=', Input::get('mobile_key'))->first(), 201);
    }

    public function dashboard() {
        return View::make('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Response::json($this->user->get($id), 201);
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
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        try {
            $this->user->create(Input::all());

            if(Helpers::checkPartnership()) {
                return Redirect::to('user_websites');
            }

            return Redirect::to('dashboard')->with('status_success', 'Account was created successfully!');
        }
        catch(ValidationException $e) {
          return Redirect::to('register')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        try {
          $this->user->updateById($id, Input::all());

          return Redirect::to('dashboard')->with('status_success', 'Account has been updated!');
        }
        catch(ValidationException $e) {
          return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    // Update logged in users profile with user info and user details
    public function update_profile() {
        $input = Input::all();
        $input['email'] = Auth::user()->email;
        $input['user_id'] = Auth::user()->id;

        try {
            $this->user->updateById(Auth::user()->id, $input);
            Auth::user()->details()->first()->update($input);

            return Redirect::to('profile')->with('status_success', 'Profile has been updated!');
        }
        catch(ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

    }

    public function change_password() {
        $input = Input::all();

        if (Hash::check($input['current_pass'], Auth::user()->password)) {
            if($input['new_pass'] == $input['retype_new_pass']) {
                $user = Auth::user();
                $user->password = Hash::make($input['new_pass']);
                $user->save();

                Session::flash('status_success', 'Password has been updated!');
                return Redirect::back();
            } else {
                Session::flash('status_error', 'New passwords did not match.');
                return Redirect::back();
            }
        } else {
            Session::flash('status_error', 'Current password was wrong');
            return Redirect::back();
        }
    }

    public function update_images() {
        $details = array();
        if(Input::hasFile('logo')) {
            $file = Input::file('logo');

            $destinationPath = 'uploads/logos/';
            $extension =$file->getClientOriginalExtension();
            $filename = trim(Auth::user()->name . "-" . Auth::user()->id) .".". $extension;

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
            $filename = trim(Auth::user()->name . "-" . Auth::user()->id) .".". $extension;

            if(File::exists($destinationPath . $filename)) {
                File::delete($destinationPath . $filename);
            }
            $file->move($destinationPath, $filename);

            $details['photo'] = $filename;
        }

        if(count($details)) {
            if(Auth::user()->details()->first()->update($details)) {
                Session::flash('status_success', 'Successfully uploaded images');
            } else {
                Session::flash('status_error', 'Error updating account with images');
            }
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($user = $this->user->getById($id)) {

            $this->user->delete($id);
            return Response::json('User Deleted', 200);
        } else {
            return Response::json('Failed to delete user', 400);
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

    public function profile() {
        return View::make('users.profile');
    }

    public function settings() {
        return View::make('users.settings');
    }

    public function login() {
        //$this->user->login(Input::all());

        $input = Input::all();

        if(Input::has('remember')) {
            $remember = true;
        } else {
            $remember = false;
        }

        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password']), $remember)) {
            if(Helpers::checkPartnership()) {
                return Redirect::to('user_websites');
            }
            return Redirect::intended('dashboard');
        } else {
            Session::flash('status_error', 'Check your email and password...');
            return Redirect::back();
        }
    }

    // Facebook login
    public function fb_login() {
        $facebook = new Facebook(Config::get('facebook'));
        $params = array(
            'redirect_uri' => url('/login/fb/callback'),
            'scope' => 'email,publish_actions',
        );

        return Redirect::to($facebook->getLoginUrl($params));
    }

    // Facebook login callback
    public function fb_callback() {
        $code = Input::get('code');

        if(strlen($code) == 0) {
            return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
        }

        $facebook = new Facebook(Config::get('facebook'));
        $uid = $facebook->getUser();

        if($uid == 0) {
            return Redirect::to('/')->with('message', 'There was an error');
        }

        $me = $facebook->api('/me');

        $user = User::where('fb_uid', '=', $uid)->first();
        if(empty($user)) {
            if(is_null($user = User::where('email', '=', $me['email'])->first())) {
                $user = new User;
                $user->first_name = $me['first_name'];
                $user->last_name = $me['last_name'];
                $user->name = $me['first_name'].' '.$me['last_name'];
                $user->email = $me['email'];
                $user->fb_uid = $uid;
                $user->fb_token = $facebook->getAccessToken();
                $user->save();

                $user_details = new User_detail;
                $user_details->user_id = $user->id;
                $user_details->fb_photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';
                $user_details->save();

                Session::flash('status_success', 'Your account was successfully created with your Facebook account.');
            } else {
                return Redirect::to('/login/fb/exists?code=' . $code);
            }
        }

        $user->fb_token = $facebook->getAccessToken();
        $user->save();

        Auth::login($user, true);
        if(Helpers::checkPartnership()) {
            return Redirect::to('user_websites');
        }
        return Redirect::to('dashboard');
    }

    public function fb_exists() {
        if(Input::has('password') && Input::has('code')) {
            $code = Input::get('code');
            $password = Input::get('password');

            if(strlen($code) == 0) {
                return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
            }

            $facebook = new Facebook(Config::get('facebook'));
            $uid = $facebook->getUser();

            if($uid == 0) {
                return Redirect::to('/')->with('message', 'There was an error');
            }

            $me = $facebook->api('/me');

            if(Auth::attempt(array('email' => $me['email'], 'password' => $password))) {
                $user = User::find(Auth::user()->id);

                $user->fb_uid = $uid;
                $user->fb_token = $facebook->getAccessToken();
                $user->save();

                $user_details = new User_detail;
                $user_details->user_id = $user->id;
                $user_details->fb_photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';
                $user_details->save();

                Session::flash('status_success', 'Your account was successfully updated with your Facebook account.');
                Auth::login($user, true);
                if(Helpers::checkPartnership()) {
                    return Redirect::to('user_websites');
                }
                return Redirect::to('dashboard');
            } else {
                Session::flash('status_error', 'Password was incorrect, please try again.');
                return View::make('users.exists')-with('code', $code);
            }
        } else {
            $code = Input::get('code');

            return View::make('users.exists')->with('code', $code);
        }

    }

    // Twitter Login
    public function tw_login() {
        $twitter = OAuth::consumer('Twitter');
        $request_token = $twitter->requestRequestToken();

        $url = $twitter->getAuthorizationUri(array('oauth_token' => $request_token->getRequestToken()));

        return Redirect::to((string)$url);
    }

    public function tw_callback() {
        $code = Input::get('oauth_token');
        $oauth_verifier = Input::get('oauth_verifier');
        $twitterService = OAuth::consumer('Twitter');

        // if code is provided get user data and sign in
        if (!empty($code)) {

            $token = $twitterService->getStorage()->retrieveAccessToken('Twitter');
            $token_secret = $token->getRequestTokenSecret();

            // This was a callback request from twitter, get the token
            $access_token = $twitterService->requestAccessToken($code, $oauth_verifier, $token_secret);

            //echo "oauth_token=" . $access_token->getAccessToken();
            //echo "<br>oauth_token_secret=" . $access_token->getAccessTokenSecret();

            // Send a request with it
            $result = json_decode( $twitterService->request('account/verify_credentials.json'));

            if($user = User::where('tw_uid', '=', $result->id)->first()) {
                Auth::login($user);

                return Redirect::to('dashboard');
            } else {
                // create new user
                $user = new User;
                $user->name = $result->name;
                $user->tw_uid = $result->id;
                $user->tw_token = $access_token->getAccessToken();
                $user->tw_secret = $access_token->getAccessTokenSecret();
                $user->save();

                $user_detail = new User_detail;
                $user_detail->user_id = $user->id;
                $user_detail->tw_photo = $result->profile_image_url;
                $user_detail->save();

                // login user
                Auth::login($user, true);
                if(Helpers::checkPartnership()) {
                    return Redirect::to('user_websites');
                }
                return Redirect::to('dashboard')->with('status_success', 'Your account was successfully created with your Twitter account.');
            }
        } else {
            return Redirect::to("/");
        }
    }

    // Return view for adding email address to account
    public function add_email() {
        if(Auth::user()) {
            return View::make('users.add_email');
        } else {
            return Redirect::to('/');
        }
    }

    // Returns a json aray of alerts for the users
    /*** OLD Controller
    public function alerts() {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(count($user_packages = $user->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $return = array();
            $no_opens = true;
            $count = 0;
            if(count($opens = User_package_open::whereIn('user_package_id', $packageIDs)->orderBy('created_at', 'asc')->get())) {
                $no_opens = false;
                $last_package = null;
                $last_client = null;
                $total_opens = array();
                foreach($opens as $open) {
                    $client = Client::find($open->client_id);
                    $client_name = $client->first_name . " " . $client->last_name;

                    $user_package = User_package::find($open->user_package_id);
                    $package_name = $user_package->package()->first()->name;

                    if(isset($total_opens["client_".$client->id]["package_".$user_package->id])) {
                        $total_opens["client_".$client->id]["package_".$user_package->id] += 1;
                    } else {
                        $total_opens["client_".$client->id]["package_".$user_package->id] = 1;
                    }

                    $return[$count]['open_id'] = $open->id;
                    $return[$count]['timestamp'] = $open->created_at;

                    $now_date = new DateTime('now');
                    $create_date = new DateTime($open->created_at);
                    $time_diff = $now_date->diff($create_date);

                    if( $time_diff->y == 0 &&
                        $time_diff->m == 0 &&
                        $time_diff->d == 0 &&
                        $time_diff->h == 0 &&
                        $time_diff->i <= 10) {
                        $return[$count]['alert'] = $client_name . " is reading " . $package_name;
                    } else {
                        $return[$count]['alert'] = $client_name . " read " . $package_name;
                    }

                    $return[$count]['opens'] = $total_opens["client_".$client->id]["package_".$user_package->id];

                    $count++;
                }

                $return = array_reverse($return);
            }

            if($no_opens) {
                return Response::json($return, 200);
            } else {
                return Response::json($return, 200);
            }
        } else {
            return Response::json('You don\'t have any packages.', 204);
        }
    }
    *******/

    // Returns a json array of alerts for weebly websites
    public function website_alerts() {



      $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

      if(count($user_websites = $user->user_website()->get())) {
        $websiteIDs = array();

        foreach($user_websites as $user_website) {
          $websiteIDs[] .= $user_website->id;
        }

        $return = array();
        $no_opens = true;
        $count = 0;
        if(count($opens = UserWebsiteOpen::whereIn('user_website_id', $websiteIDs)->orderBy('created_at', 'asc')->get())) {
          $no_opens = false;
          $last_package = null;
          $last_client = null;
          $total_opens = array();
          foreach($opens as $open) {
            $client = Client::find($open->client_id);
            $client_name = $client->first_name . " " . $client->last_name;

            $user_website = UserWebsite::find($open->user_website_id);
            $package_name = $user_website->website->name;

            if(isset($total_opens["client_".$client->id]["package_".$user_website->id])) {
              $total_opens["client_".$client->id]["package_".$user_website->id] += 1;
            } else {
              $total_opens["client_".$client->id]["package_".$user_website->id] = 1;
            }

            $return[$count]['open_id'] = $open->id;
            $return[$count]['timestamp'] = $open->created_at;

            $now_date = new DateTime('now');
            $create_date = new DateTime($open->created_at);
            $time_diff = $now_date->diff($create_date);

            if( $time_diff->y == 0 &&
                $time_diff->m == 0 &&
                $time_diff->d == 0 &&
                $time_diff->h == 0 &&
                $time_diff->i <= 10) {

              $return[$count]['alert'] = $client_name . " is reading " . $package_name;
            } else {
              $return[$count]['alert'] = $client_name . " read " . $package_name;
            }

            $return[$count]['opens'] = $total_opens["client_".$client->id]["package_".$user_website->id];

            $count++;
          }

          $return = array_reverse($return);
        }

        if($no_opens) {
          return Response::json($return, 200);
        } else {
          return Response::json($return, 200);
        }
      } else {
        return Response::json('You don\'t have any packages.', 204);
      }

    }

    // Get alert info for push notification dialog
    /**** OLD CONTROLLER
    public function alert_info($id) {
        if(!is_null($package_opened = User_package_open::find($id))) {
            $client = Client::find($package_opened->client_id);
            $user_package = User_package::find($package_opened->user_package_id);
            $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

            if($user_package->user_id == $user->id) {
                $total_opens = count(User_package_open::where('user_package_id', '=', $user_package->id)->where('client_id', '=', $client->id)->get());
                $total_pageviews = count(User_package_opened_tab::where('user_package_id', '=', $user_package->id)->where('client_id', '=', $client->id)->get());


                $now_date = new DateTime('now');
                $create_date = new DateTime($package_opened->created_at);
                $time_diff = $now_date->diff($create_date);

                if( $time_diff->y == 0 &&
                    $time_diff->m == 0 &&
                    $time_diff->d == 0 &&
                    $time_diff->h == 0 &&
                    $time_diff->i <= 10) {
                    $open['alert'] = $client->first_name . " " . $client->last_name . " is reading " . $user_package->package()->first()->name;
                } else {
                    $open['alert'] = $client->first_name . " " . $client->last_name . " read " . $user_package->package()->first()->name;
                }
                $open['client_id'] = $client->id;
                $open['phone'] = $client->phone_number;
                $open['email'] = $client->email;
                $open['opens'] = $total_opens;
                $open['views'] = $total_pageviews;
                $open['timestamp'] = $package_opened->created_at;

                return Response::json($open, 200);
            } else {
                return Response::json('You do not have permission to view this record.', 403);
            }
        } else {
            return Response::json('Package open doesn\'t exist.', 404);
        }
    }
    ***/

    // Get alert info for push notification dialog
    public function website_alert_info($id) {
        if(!is_null($website_opened = UserWebsiteOpen::find($id))) {
            $client = Client::find($website_opened->client_id);
            $user_website = UserWebsite::find($website_opened->user_website_id);
            $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

            if($user_website->user_id == $user->id) {
                $total_opens = count(UserWebsiteOpen::where('user_website_id', '=', $user_website->id)->where('client_id', '=', $client->id)->get());
                $total_pageviews = count(UserWebsitePageOpen::where('user_website_id', '=', $user_website->id)->where('client_id', '=', $client->id)->get());


                $now_date = new DateTime('now');
                $create_date = new DateTime($website_opened->created_at);
                $time_diff = $now_date->diff($create_date);

                if( $time_diff->y == 0 &&
                    $time_diff->m == 0 &&
                    $time_diff->d == 0 &&
                    $time_diff->h == 0 &&
                    $time_diff->i <= 10) {
                    $open['alert'] = $client->first_name . " " . $client->last_name . " is reading " . $user_website->website->name;
                } else {
                    $open['alert'] = $client->first_name . " " . $client->last_name . " read " . $user_website->website->name;
                }
                $open['client_id'] = $client->id;
                $open['phone'] = $client->phone_number;
                $open['email'] = $client->email;
                $open['opens'] = $total_opens;
                $open['views'] = $total_pageviews;
                $open['timestamp'] = $website_opened->created_at;

                return Response::json($open, 200);
            } else {
                return Response::json('You do not have permission to view this record.', 403);
            }
        } else {
            return Response::json('Package open doesn\'t exist.', 404);
        }
    }

    public function alert_snooze($id, $mins) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if($user->id == User_package_open::find($id)->user_package()->first()->user_id) {
            $snooze_time = Carbon::now()->addMinutes($mins);

            //Queue::later($in5mins, 'SnoozeAlert', array('user_package_open_id' => $id));
            if(Queue::later($snooze_time, 'SnoozeAlert', array('user_package_open_id' => $id))) {
                return Response::json('Alert has been snoozed', 200);
            } else {
                return Response::json('Failed to snooze alert', 404);
            }
        } else {
            return Response::json('You can not snooze that alert...', 403);
        }

    }

    public function website_alert_snooze($id, $mins) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if($user->id == UserWebsiteOpen::find($id)->user_website->user_id) {
            $snooze_time = Carbon::now()->addMinutes($mins);

            $queue_result = Queue::later($snooze_time, 'SnoozeAlert', array('user_website_open_id' => $id));
            if($queue_result) {
                print_r($queue_result);
                //return Response::json('Alert has been snoozed', 200);
            } else {
                return Response::json('Failed to snooze alert', 404);
            }
        } else {
            return Response::json('You can not snooze that alert...', 403);
        }

    }

    // Returns a json array of the users clients
    public function clients() {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(count($user_clients = $user->client()->get())) {
            $return = array();
            $count = 0;

            foreach($user_clients as $user_client) {
                $client = $user_client->client()->first();
                $return[$count]['client_id'] = $client->id;
                $return[$count]['first_name'] = $client->first_name;
                $return[$count]['last_name'] = $client->last_name;
                $return[$count]['total_opens'] = Helpers::total_opens($user->id, $client->id);
                $return[$count]['total_pageviews'] = Helpers::total_pageviews($user->id, $client->id);

                $count++;
            }

            return Response::json($return, 200);
        } else {
            return Response::json('You don\'t have any clients.', 204);
        }
    }

    // Returns a json array of the users clients
    public function website_clients() {
      $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

      if(count($user_clients = $user->client()->get())) {
        $return = array();
        $count = 0;

        foreach($user_clients as $user_client) {
          $client = $user_client->client()->first();
          $return[$count]['client_id'] = $client->id;
          $return[$count]['first_name'] = $client->first_name;
          $return[$count]['last_name'] = $client->last_name;
          $return[$count]['total_opens'] = $client->total_website_opens_by_user($user->id);
          $return[$count]['total_pageviews'] = $client->total_website_pageviews_by_user($user->id);

          $count++;
        }

        return Response::json($return, 200);
      } else {
        return Response::json('You don\'t have any clients.', 204);
      }
    }

    // Returns a json array of the requrest clients information
    public function client($id) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(!is_null($user_client = User_client::where('client_id', '=', $id)->where('user_id', '=', $user->id)->first())) {
            $clientArray = $user_client->client()->first()->toArray();
            $clientArray['total_opens'] = Helpers::total_opens($user->id, $clientArray['id']);
            $clientArray['total_pageviews'] = Helpers::total_pageviews($user->id, $clientArray['id']);
            $clientArray['type'] = Client_type::find($clientArray['client_type_id'])->name;
            $clientArray['status'] = Client_status::find($clientArray['client_status_id'])->name;
            $clientArray['source'] = Client_source::find($clientArray['client_source_id'])->name;

            return Response::json($clientArray, 200);
        } else {
            return Response::json('Client not found in your database.', 204);
        }
    }

    // Returns a json array of the requrest clients information
    public function website_client($id) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(!is_null($user_client = User_client::where('client_id', '=', $id)->where('user_id', '=', $user->id)->first())) {
            $clientArray = $user_client->client()->first()->toArray();
            $clientArray['total_opens'] = $user_client->client()->first()->total_website_opens_by_user($user->id);
            $clientArray['total_pageviews'] = $user_client->client()->first()->total_website_pageviews_by_user($user->id);
            $clientArray['type'] = Client_type::find($clientArray['client_type_id'])->name;
            $clientArray['status'] = Client_status::find($clientArray['client_status_id'])->name;
            $clientArray['source'] = Client_source::find($clientArray['client_source_id'])->name;

            return Response::json($clientArray, 200);
        } else {
            return Response::json('Client not found in your database.', 204);
        }
    }

    // Returns a json array of all the users notes on a client
    public function notes($id) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(!is_null($user_client = User_client::where('client_id', '=', $id)->where('user_id', '=', $user->id)->first())) {
            if(count($client_notes = Client_note::where('client_id', '=', $id)->orderBy('updated_at', 'desc')->get())) {
                return Response::json($client_notes->toArray());
            } else {
                return Response::json('No notes found for that client', 204);
            }
        } else {
            return Response::json('Client not found in your database', 404);
        }
    }

    // Returns a json array of all the users packages
    public function packages() {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(count($user_packages = User_package::where('user_id', '=', $user->id)->get())) {
            $return = array();
            $count = 0;

            foreach($user_packages as $user_package) {
                $return[$count]['package_id'] = $user_package->package()->first()->id;
                $return[$count]['package_name'] = $user_package->package()->first()->name;
                $return[$count]['package_url'] = $user_package->package()->first()->subdomain . ".cve.io";
                $return[$count]['user_package_id'] = $user_package->id;
                $return[$count]['total_opens'] = Helpers::total_package_opens($user_package->id);
                $return[$count]['total_pageviews'] = Helpers::total_package_pageviews($user_package->id);

                $count++;
            }

            //print_r($return);
            return Response::json($return, 200);
        } else {
            return Response::json('User does not have any packages', 204);
        }
    }

    // Returns a json array of all the users weebly sites
    public function websites() {
      $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

      if(count($user_websites = UserWebsite::where('user_id', '=', $user->id)->get())) {
        $return = array();
        $count = 0;

        foreach($user_websites as $user_website) {
          $return[$count]['package_id'] = $user_website->website->id;
          $return[$count]['package_name'] = $user_website->website->name;
          $return[$count]['package_url'] = $user_website->website->domain;
          $return[$count]['user_package_id'] = $user_website->id;
          $return[$count]['total_opens'] = $user_website->total_opens();
          $return[$count]['total_pageviews'] = $user_website->total_pageviews();

          $count++;
        }

        //print_r($return);
        return Response::json($return, 200);
      } else {
        return Response::json('User does not have any packages', 204);
      }
    }

    // Returns a json array of all the clients package activity
    public function clearview($id) {
        $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

        if(!is_null($user_client = User_client::where('client_id', '=', $id)->where('user_id', '=', $user->id)->first())) {
            $user_packages = User_package::where('user_id', '=', $user->id)->get();

            $return = array();
            $count = 0;

            foreach($user_packages as $user_package) {
                $package = $user_package->package()->first();
                $package_sends = User_package_send::where('client_id', '=', $id)->where('user_package_id', '=', $user_package->id)->get();
                $package_opens = User_package_open::where('client_id', '=', $id)->where('user_package_id', '=', $user_package->id)->get();
                $package_pageviews = User_package_opened_tab::where('client_id', '=', $id)->where('user_package_id', '=', $user_package->id)->get();
                $grouped_pageviews = User_package_opened_tab::where('client_id', '=', $id)->where('user_package_id', '=', $user_package->id)->groupBy('package_tab_id')->get();

                // Only add to the return array if there is any sort of activity for the user_package
                if(count($package_sends) || count($package_opens) || count($package_pageviews)) {
                    $return[$count]['package_name'] = $package->name;
                    $return[$count]['package_sends'] = count($package_sends);
                    $return[$count]['package_opens'] = count($package_opens);
                    $return[$count]['package_pageviews'] = count($package_pageviews);

                    $opened_pages = array();
                    $page_count = 0;
                    foreach($grouped_pageviews as $opened_page) {
                        $opened_pages[$page_count]['page_title'] = $opened_page->package_tab()->first()->title;
                        $opened_pages[$page_count]['page_opens'] = count(User_package_opened_tab::where('package_tab_id', '=', $opened_page->package_tab_id)->where('client_id', '=', $id)->get());

                        $page_count++;
                    }

                    $return[$count]['package_opened_pages'] = $opened_pages;

                    $count++;
                }
            }

            //print_r($return);
            if(count($return)) {
                return Response::json($return, 200);
            } else {
                return Response::json("No Package Activity", 204);
            }

        } else {
            return Response::json('Client not found in your database', 404);
        }
    }

  // Returns a json array of all the clients weebly website activity
  public function website_clearview($id) {
    $user = User::where('mobile_key', '=', Input::get('mobile_key'))->first();

    if(!is_null($user_client = User_client::where('client_id', '=', $id)->where('user_id', '=', $user->id)->first())) {
      $user_websites = UserWebsite::where('user_id', '=', $user->id)->get();

      $return = array();
      $count = 0;

      foreach($user_websites as $user_website) {
        $website = $user_website->website()->first();
        $website_sends = UserWebsiteSend::where('client_id', '=', $id)->where('user_website_id', '=', $user_website->id)->get();
        $website_opens = UserWebsiteOpen::where('client_id', '=', $id)->where('user_website_id', '=', $user_website->id)->get();
        $website_pageviews = UserWebsitePageOpen::where('client_id', '=', $id)->where('user_website_id', '=', $user_website->id)->get();
        $grouped_pageviews = UserWebsitePageOpen::where('client_id', '=', $id)->where('user_website_id', '=', $user_website->id)->groupBy('page')->get();

        // Only add to the return array if there is any sort of activity for the user_package
        if(count($website_sends) || count($website_opens) || count($website_pageviews)) {
          $return[$count]['package_name'] = $website->name;
          $return[$count]['package_sends'] = count($website_sends);
          $return[$count]['package_opens'] = count($website_opens);
          $return[$count]['package_pageviews'] = count($website_pageviews);

          $opened_pages = array();
          $page_count = 0;
          foreach($grouped_pageviews as $opened_page) {
            $opened_pages[$page_count]['page_title'] = $opened_page->title;
            $opened_pages[$page_count]['page_opens'] = count(UserWebsitePageOpen::where('page', '=', $opened_page->page)->where('client_id', '=', $id)->get());

            $page_count++;
          }

          $return[$count]['package_opened_pages'] = $opened_pages;

          $count++;
        }
      }

      //print_r($return);
      if(count($return)) {
        return Response::json($return, 200);
      } else {
        return Response::json("No Package Activity", 204);
      }

    } else {
      return Response::json('Client not found in your database', 404);
    }
  }

}
