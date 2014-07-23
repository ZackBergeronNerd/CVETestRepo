<?php

class User_packagesController extends BaseController {
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => null));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab the users packages for the current logged in user and pass them to the view.
        $user_packages = Auth::user()->user_package()->get();
        
        return View::make('user_packages.index')->with('user_packages', $user_packages);
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

    public function json($all = true) {

        $packages = array();
        $count = 0;

        if($all) {
            $packages[$count]['id'] = "all";
            $packages[$count]['name'] = "All Packages";
            $count++;
        }
        
        foreach(Auth::user()->user_package()->get() as $user_package) {
            $packages[$count]['id'] = $user_package->id;
            $packages[$count]['name'] = $user_package->package()->first()->name;

            $count++;
        }

        return Response::json($packages, 200);
    }

    public function send_package() {
        // Grab the users packages for the current logged in user and pass them to the view.
        $user_packages = Auth::user()->user_package()->get();
        
        return View::make('user_packages.send_package')->with('user_packages', $user_packages);
    }

    public function select_client($id) {
        if(!is_null($user_package = User_package::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->first())) {
            if(count($user_clients = Auth::user()->client()->get())) {
                return View::make('user_packages.select_client')
                    ->with('user_package', $user_package)
                    ->with('user_clients', $user_clients);
            } else {
                return Redirect::to('user_packages')->with('status_error', 'You do not have any clients to send a package to.');
            }
        } else {
            return Redirect::to('user_packages')->with('status_error', 'That package could not be found in your account...');
        }
    }

    public function glance($id) {
        if($id == 'all') {
            $return = array();
            $return['sends'] = Auth::user()->total_sends();
            $return['opens'] = Auth::user()->total_opens();
            $return['pageviews'] = Auth::user()->total_pageviews();
            $return['open_rate'] = Auth::user()->open_rate();
            //print_r($return);
            return Response::json($return, 200);
        } else if(is_numeric($id)) {
            if(!is_null($user_package = User_package::where('id', '=', $id)->where('user_id', '=', Auth::user()->id)->first())) {
                $return = array();
                $return['sends'] = $user_package->total_sends();
                $return['opens'] = $user_package->total_opens();
                $return['pageviews'] = $user_package->total_pageviews();

                if($return['sends'] > 0 && $return['opens'] > 0) {
                    if($return['sends'] < $return['opens']) {
                        $return['open_rate'] = 100;
                    } else {
                        $return['open_rate'] = round(($return['opens'] / $return['sends'] * 100));
                    }
                } else {
                    $return['open_rate'] = 0;
                }
                //print_r($return);
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
            if(count($user_packages = Auth::user()->user_package()->get())) {
                $packageIDs = array();
                foreach($user_packages as $user_package) {
                    $packageIDs[] .= $user_package->id;
                }

                if(!count($opens = User_package_open::whereIn('user_package_id', $packageIDs)->orderBy('created_at', 'desc')->skip($skip)->take($take)->get())) {
                    return Response::json('No Package Activity for your Account', 404);
                }
            } else {
                return Response::json('You do not have any packages', 404);
            }
        } else {
            if(!is_null($user_package = User_package::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->first())) {
                $opens = User_package_open::where('user_package_id', '=', $user_package->id)->orderBy('created_at', 'desc')->skip($skip)->take($take)->get();
            } else {
                return Response::json('Package doesn\'t exist or isn\'t yours.', 404);
            }
        }

        $count = 0;
        $entries = array();
        
        foreach($opens as $open) {
            $client = Client::find($open->client_id);
            $client_name = $client->first_name . " " . $client->last_name;
            $first_open = User_package_open::where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->orderBy('created_at', 'asc')->first();

            $total_opens = User_package_open::whereBetween('created_at', array($first_open->created_at, $open->created_at))->where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->get();

            $user_package = User_package::find($open->user_package_id);
            $package_name = $user_package->package()->first()->name;

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
            $entries[$count]['message'] = '<a href="/clients/' . $client->id . '/edit">' . $client_name . '</a> read <a href="/user_packages/' . $user_package->id .'">' . $package_name . '</a>';
            $entries[$count]['total_opens'] = count($total_opens);

            $count++;
        }

        return Response::json($entries, 200);
    }

}