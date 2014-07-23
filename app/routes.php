<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// cve.io/api/v1/{route}
Route::group(array('prefix' => 'api/v1', 'before' => 'api.auth'), function()
{
    //Route::get('/user/alerts', array('uses' => 'UsersController@alerts'));
    Route::get('/user/alerts', array('uses' => 'UsersController@website_alerts'));
    //Route::get('/user/alerts/{alert}', array('uses' => 'UsersController@alert_info'));
    Route::get('/user/alerts/{alert}', array('uses' => 'UsersController@website_alert_info'));
    //Route::get('/user/alerts/{alert}/snooze/{mins}', array('uses' => 'UsersController@alert_snooze'));
    Route::get('/user/alerts/{alert}/snooze/{mins}', array('uses' => 'UsersController@website_alert_snooze'));
    //Route::get('/user/clients', array('uses' => 'UsersController@clients'));
    Route::get('/user/clients', array('uses' => 'UsersController@website_clients'));
    //Route::get('/user/clients/{client}', array('uses' => 'UsersController@client'));
    Route::get('/user/clients/{client}', array('uses' => 'UsersController@website_client'));
    Route::get('/user/clients/{client}/notes', array('uses' => 'UsersController@notes'));
    //Route::get('/user/clients/{client}/clearview', array('uses' => 'UsersController@clearview'));
    Route::get('/user/clients/{client}/clearview', array('uses' => 'UsersController@website_clearview'));
    //Route::get('/user/packages', array('uses' => 'UsersController@packages'));
    Route::get('/user/packages', array('uses' => 'UsersController@websites'));
});

Route::group(array('domain' => 'lp.' . Helpers::getRootUrl()), function() {
	Route::get("/{name}", array('uses' => 'Landing_pagesController@dropbox'));
});

// MartisTest Weebly Package Routing
Route::group(array('domain' => '{agent}.martistest.' . Helpers::getRootUrl()), function() {
    Route::get('/', function($agent) {
        $agent = Helpers::b64_encode($agent);

        if(Input::has('b')) {
            return Redirect::to('http://martistest.cve.io/#!');
        }

        if(Input::has("c")) {
          if(Input::has("e")) {
            return Redirect::to('http://martistest.cve.io/#?a='.$agent.'&c='.Input::get('c').'&e='.Input::get('e'));
          } else {
            return Redirect::to('http://martistest.cve.io/#?a='.$agent.'&c='.Input::get('c'));
          }

        } else {
          if(Input::has("e")) {
            return Redirect::to('http://martistest.cve.io/#?a='.$agent.'&e='.Input::get('e'));
          } else {
            return Redirect::to('http://martistest.cve.io/#?a='.$agent);
          }
        }
    });
});

// GrandisleTest Weebly Package Routing
Route::group(array('domain' => '{agent}.grandisletest.' . Helpers::getRootUrl()), function() {
    Route::get('/', function($agent) {
        $agent = Helpers::b64_encode($agent);

        if(Input::has('b')) {
            return Redirect::to('http://grandisletest.cve.io/#!');
        }

        if(Input::has("c")) {
            if(Input::has("e")) {
                return Redirect::to('http://grandisletest.cve.io/#?a='.$agent.'&c='.Input::get('c').'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://grandisletest.cve.io/#?a='.$agent.'&c='.Input::get('c'));
            }

        } else {
            if(Input::has("e")) {
                return Redirect::to('http://grandisletest.cve.io/#?a='.$agent.'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://grandisletest.cve.io/#?a='.$agent);
            }
        }
    });
});

// ClearviewUK Weebly Package Routing
Route::group(array('domain' => '{agent}.clearviewuk.' . Helpers::getRootUrl()), function() {
    Route::get('/', function($agent) {
        $agent = Helpers::b64_encode($agent);

        if(Input::has('b')) {
            return Redirect::to('http://clearviewuk.cve.io/#!');
        }

        if(Input::has("c")) {
            if(Input::has("e")) {
                return Redirect::to('http://clearviewuk.cve.io/#?a='.$agent.'&c='.Input::get('c').'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://clearviewuk.cve.io/#?a='.$agent.'&c='.Input::get('c'));
            }

        } else {
            if(Input::has("e")) {
                return Redirect::to('http://clearviewuk.cve.io/#?a='.$agent.'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://clearviewuk.cve.io/#?a='.$agent);
            }
        }
    });
});

// ClearviewUK Weebly Package Routing
Route::group(array('domain' => '{agent}.clearview.' . Helpers::getRootUrl()), function() {
    Route::get('/', function($agent) {
        $agent = Helpers::b64_encode($agent);
        if(Input::has('b')) {
            return Redirect::to('http://clearview.cve.io/#!');
        }

        if(Input::has("c")) {
            if(Input::has("e")) {
                return Redirect::to('http://clearview.cve.io/#?a='.$agent.'&c='.Input::get('c').'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://clearview.cve.io/#?a='.$agent.'&c='.Input::get('c'));
            }

        } else {
            if(Input::has("e")) {
                return Redirect::to('http://clearview.cve.io/#?a='.$agent.'&e='.Input::get('e'));
            } else {
                return Redirect::to('http://clearview.cve.io/#?a='.$agent);
            }
        }
    });
});

Route::group(array('domain' => '{agent}.{package}.' . Helpers::getRootUrl()), function()
{
    Route::get('/lp', array('uses' => 'Landing_pagesController@show_agent'));
	Route::post('/contact', array('uses' => 'PackagesController@contact_agent'));
    Route::get('/{tab}', array('uses' => 'PackagesController@show_agent'));
    Route::get('/', array('uses' => 'PackagesController@show_agent'));
});

Route::group(array('domain' => '{package}.' . Helpers::getRootUrl()), function()
{
    Route::get('/lp', array('uses' => 'Landing_pagesController@show'));
    Route::get('/edit', array('uses' => 'PackagesController@manage'));
    Route::get('/{tab}/edit', array('uses' => 'PackagesController@manage'));
	Route::post('/contact', array('uses' => 'PackagesController@contact'));
    Route::get('/{tab}', array('uses' => 'PackagesController@show'));
    Route::get('/', array('uses' => 'PackagesController@show'));
});

Route::group(array('prefix' => 'admin', 'before' => 'is_superadmin'), function() {

    Route::get('/setup_package', array('uses' => 'SuperAdminController@setup_package'));
    Route::post('/setup_package', array('uses' => 'SuperAdminController@save_package'));

    Route::get('/setup_package/{id}/add_user', array('uses' => 'SuperAdminController@add_user'));
    Route::post('/setup_package/{id}/add_user', array('uses' => 'SuperAdminController@store_user'));

    Route::get('/setup_package/{id}', array('uses' => 'SuperAdminController@edit_package'));
    Route::put('/setup_package/{id}', array('uses' => 'SuperAdminController@update_package'));
    Route::delete('/setup_package/{id}', array('uses' => 'SuperAdminController@delete_package'));

    Route::get('/manage_packages', array('uses' => 'SuperAdminController@manage_packages'));

    Route::get('/enable_notifications/{id}', array('uses' => 'SuperAdminController@confirm_pages'));
    Route::post('/enable_notifications/{id}', array('uses' => 'SuperAdminController@enable_notifications'));
    Route::get('/disable_notifications/{id}', array('uses' => 'SuperAdminController@disable_notifications'));

    Route::get('/users', array('uses' => 'SuperAdminController@display_users'));
    Route::get('/users/{id}/edit', array('uses' => 'SuperAdminController@edit_user'));
    Route::put('/users/{id}', array('uses' => 'SuperAdminController@update_user'));
    Route::get('/users/create', array('uses' => 'SuperAdminController@create_user'));
    Route::post('/users', array('uses' => 'SuperAdminController@store_new_user'));
    Route::get('/users/{id}/delete', array('uses' => 'SuperAdminController@destroy_user'));
    Route::post('/users/{id}/change_password', array('uses' => 'SuperAdminController@change_password'));
    Route::post('/users/{id}/update_images', array('uses' => 'SuperAdminController@update_images'));
    Route::get('/users/{id}/remove_logo', array('uses' => 'SuperAdminController@remove_logo'));
    Route::get('/users/{id}/remove_photo', array('uses' => 'SuperAdminController@remove_photo'));
    Route::get('/users/{id}/login', array('uses' => 'SuperAdminController@login_user'));
});

Route::post('/clone', array('uses' => 'PackagesController@clone_package'));
Route::post('/send_package', array('uses' => 'PackagesController@email_package'));
Route::get('/send_package', array('uses' => 'User_packagesController@send_package'));

Route::post('/send_website', array('uses' => 'PackagesController@email_website'));
Route::get('/send_website', array('uses' => 'UserWebsitesController@send_website'));

Route::get('/user_packages/json/{all}', array('uses' => 'User_packagesController@json'));
Route::get('/user_packages/json', array('uses' => 'User_packagesController@json'));
Route::get('/user_packages/{id}/clearview', array('uses' => 'User_packagesController@clearview'));
Route::get('/user_packages/{id}/glance', array('uses' => 'User_packagesController@glance'));
Route::get('/user_packages/{id}/select_client', array('uses' => 'User_packagesController@select_client'));

Route::get('/clients/modal', array('uses' => 'ClientsController@modal'));
Route::get('/clients/{client_id}/overview/{user_package_id}', array('uses' => 'ClientsController@overview'));
Route::get('/clients/{client_id}/clearview/{user_package_id}', array('uses' => 'ClientsController@clearview_json'));
Route::get('/clients/{id}/clearview', array('uses' => 'ClientsController@clearview'));
Route::get('/clients/{id}/notes', array('uses' => 'ClientsController@notes'));
Route::get('/clients/{id}/send_package', array('uses' => 'ClientsController@select_package'));
Route::get('/clients/{client}/send_package/{package}', array('uses' => 'ClientsController@send_package'));
Route::get('/clients/{id}/send_website', array('uses' => 'ClientsController@select_website'));
Route::get('/clients/{client}/send_website/{package}', array('uses' => 'ClientsController@send_website'));
Route::post('/save_attachment/{key}', array('uses' => 'PackagesController@save_attachment'));

Route::get('/',
    function()
{
    if(Auth::guest()) {
        return View::make('users.login');
    } else {
        return Redirect::to('dashboard');
    }

});

Route::get('jsonp', function() {
    $input = Input::all();

    return Response::json($input)->setCallback(Input::get('callback'));
    //return Response::json($users, 200, array('Content-Type' => 'application/javascript'));
});

Route::get('b64', function() {
    echo Helpers::b64_encode(Input::get('encode'));
    echo Helpers::b64_decode(Input::get('decode'));
});

Route::get('login', function()
{
    return View::make('users.login');
});

Route::get('date_testing', function() {
    $package_open = User_package_open::where('user_package_id', '=', 1)->orderBy('created_at', 'desc')->first();

    $now_date = new DateTime('now');
    $create_date = new DateTime($package_open->created_at);

    $time_diff = $now_date->diff($create_date);

    print_r($time_diff);
});

Route::get('dashboard', array('before' => 'auth', 'uses' => 'UsersController@dashboard'));

Route::get('timeline', array('before' => 'auth', function() {
    return View::make('timeline.index');
}));

Route::get('builder', array('before' => 'auth', function() {
    return View::make('builder.index');
}));

Route::get('logout', function() {
    Auth::logout();
    Session::flush();
    return Redirect::to("/");
});

Route::get('force_oauth', array('uses' => 'UsersController@force_oauth'));
Route::get('force_callback', array('uses' => 'UsersController@force_callback'));
Route::get('demo_rest', array('uses' => 'UsersController@demo_rest'));

Route::any('login/fb/exists', array('uses' => 'UsersController@fb_exists'));
Route::get('login/fb/callback', array('uses' => 'UsersController@fb_callback'));
Route::get('login/fb', array('uses' => 'UsersController@fb_login'));
Route::get('login/tw/callback', array('uses' => 'UsersController@tw_callback'));
Route::get('login/tw', array('uses' => 'UsersController@tw_login'));
Route::post('login', array('uses' => 'UsersController@login'));
Route::get('register', array('uses' => 'UsersController@create'));
Route::get('profile', array('uses' => 'UsersController@profile'));
Route::post('update_profile', array('uses' => 'UsersController@update_profile'));
Route::get('settings', array('uses' => 'UsersController@settings'));

Route::post('update_email', array('uses' => 'UsersController@update_email'));
Route::get('add_email', array('uses' => 'UsersController@add_email'));

Route::post('change_password', array('uses' => 'UsersController@change_password'));
Route::post('update_images', array('uses' => 'UsersController@update_images'));



Route::any('mobile_login', function() {
    $input = Input::all();

    $password = $input['password'];
    $password = urldecode($input['password']);
    $password = base64_decode(base64_decode($password));
    $password = base64_decode(base64_decode($password));
    $password = base64_decode(base64_decode($password));

		Log::info("User Auth Failed... {$password}");

    if(Auth::attempt(array('email' => $input['email'], 'password' => $password))) {
        $mobile_key = md5($input['email']);
        //$user = User::where('email', $input['email'])->first();
        //$user->mobile_key = $mobile_key;
		
		DB::table('users')
            ->where('email', $input['email'])
            ->update(array('mobile_key' => $mobile_key));
            
        $user = User::where('mobile_key', $mobile_key)->first();
		
        $return['success'] = true;
        $return['mobile_key'] = $mobile_key;
        $return['user'] = $user->toArray();
    } else {
    	Log::info("User Auth Failed...");
        $return['success'] = false;
        $return['email'] = $input['email'];
    }

    return json_encode($return);
});

Route::any('mobile_logout', function() {
    if(Input::has('token')) {

        if(User_token::where('token', Input::get('token'))->delete()) {
            $return['success'] = true;
        } else {
            $return['msg'] = "Could not save user";
            $return['success'] = false;
        }
    } else {
        $return['msg'] = Input::all();
        $return['success'] = false;
    }

    return json_encode($return);
});

Route::get('/users/{id}/remove_photo', array('uses' => 'UsersController@remove_photo'));
Route::get('/users/{id}/remove_logo', array('uses' => 'UsersController@remove_logo'));

Route::resource('users', 'UsersController');
Route::resource('packages', 'PackagesController');
Route::resource('package_tabs', 'Package_tabsController');
Route::resource('user_details', 'User_detailsController');
Route::resource('tab_sections', 'Tab_sectionsController');
Route::resource('contact_forms', 'Contact_formsController');
Route::resource('contact_fields', 'Contact_fieldsController');
Route::resource('user_packages', 'User_packagesController');
Route::resource('package_contacts', 'Package_contactsController');
Route::resource('landing_pages', 'Landing_pagesController');
Route::resource('user_landing_pages', 'User_landing_pagesController');
Route::resource('package_landing_pages', 'Package_landing_pagesController');
Route::resource('landing_page_sections', 'Landing_page_sectionsController');
Route::resource('clients', 'ClientsController');
Route::resource('user_clients', 'User_clientsController');
Route::resource('client_notes', 'Client_notesController');
Route::resource('client_types', 'Client_typesController');
Route::resource('client_statuses', 'Client_statusesController');
Route::resource('client_sources', 'Client_sourcesController');
Route::resource('client_temperatures', 'ClientTemperaturesController');
Route::resource('user_package_sends', 'User_package_sendsController');
Route::resource('user_package_opens', 'User_package_opensController');
Route::resource('user_package_opened_tabs', 'User_package_opened_tabsController');
Route::resource('user_tokens', 'User_tokensController');

// New Presentation Builder Resources
Route::resource('presentations', 'PresentationsController');
Route::resource('user_presentations', 'UserPresentationsController');
Route::resource('style_guides', 'StyleGuidesController');
Route::resource('presentation_style_guides', 'PresentationStyleGuidesController');
Route::resource('presentation_tabs', 'PresentationTabsController');
Route::resource('presentation_tab_sections', 'PresentationTabSectionsController');
Route::resource('hero_tab_sections', 'HeroTabSectionsController');
Route::resource('standard_tab_sections', 'StandardTabSectionsController');

// New Weebly website resources
Route::resource('websites', 'WebsitesController');

Route::post('/web_to_cve', array('uses' => 'UserWebsitesController@save_from_web'));
Route::get('/user_websites/web_to_cve/{id}', array('uses' => 'UserWebsitesController@web_to_cve'));
Route::get('/user_websites/json/{id}', array('uses' => 'UserWebsitesController@json'));
Route::get('/user_websites/json', array('uses' => 'UserWebsitesController@json'));
Route::get('/user_websites/{id}/glance', array('uses' => 'UserWebsitesController@glance'));
Route::get('/user_websites/{id}/clearview', array('uses' => 'UserWebsitesController@clearview'));
Route::get('/user_websites/weebly', array('uses' => 'UserWebsitesController@weebly'));
Route::get('/user_websites/{id}/select_client', array('uses' => 'UserWebsitesController@select_client'));

Route::get('/user_websites/{id}/manage_partners', array('uses' => 'UserWebsitesController@manage_partners'));
Route::post('/user_websites/{id}/manage_partners', array('uses' => 'UserWebsitesController@add_partner'));
Route::delete('/user_websites/{id}', array('uses' => 'UserWebsitesController@destroy'));

Route::resource('user_websites', 'UserWebsitesController');

Route::get('email_track', array('uses' => 'UserWebsiteSendsController@tracker'));
Route::resource('user_website_sends', 'UserWebsiteSendsController');

Route::resource('user_website_opens', 'UserWebsiteOpensController');

Route::get('remote_track', array('uses' => 'UserWebsitePageOpensController@jsonp_store'));
Route::resource('user_website_page_opens', 'UserWebsitePageOpensController');


Route::get('/accept_invitation/{code}', array('uses' => 'PartnerInvitesController@accept_invitation'));

Route::resource('partner_invites', 'PartnerInvitesController');
Route::resource('user_websites_pages', 'UserWebsitesPagesController');
