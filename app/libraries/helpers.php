<?php
class Helpers {
	public static function getRootUrl() {
		if(!isset($_SERVER['SERVER_NAME'])) { $_SERVER['SERVER_NAME'] = 'cve.io'; }
		$domain_array = explode(".", $_SERVER['SERVER_NAME']);
		$root_domain = $domain_array[count($domain_array)-2] . "." . $domain_array[count($domain_array)-1];

		return $root_domain;
	}

	public static function timthumb($filename, $width = null, $height = null, $crop = 0) {
		if(!is_null($height) && !is_null($width)) {
			$return = url('libs') . "/timthumb.php?src=../{$filename}&h={$height}&w={$width}&ar=1";
		} else if(!is_null($height) && is_null($width)) {
			$return = url('libs') . "/timthumb.php?src=../{$filename}&h={$height}&ar=1";
		} else if(is_null($height) && !is_null($width)) {
			$return = url('libs') . "/timthumb.php?src=../{$filename}&w={$width}&ar=1";
		} else {
			$return = null;
		}
		return $return;
	}

	public static function b64_encode($plainText) {
		return strtr(base64_encode($plainText), '+/=', '-_,');
	}

	public static function b64_decode($b64Text) {
  	    return base64_decode(strtr($b64Text, '-_,', '+/='));
	}

    public static function get_http_response_code($url) {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }

    public static function br2nl($string) {
        return preg_replace('#<br\s*?/?>#i', "\n", $string);
    }

    public static function checkPartnership() {
        if(Session::has('invite_code')) {
            $partner_invite = PartnerInvite::where('invite_code', Session::get('invite_code'))->first();
            $original_user_website = UserWebsite::find($partner_invite->user_website_id);

            if(Auth::user()->email != $partner_invite->partner_email) {
                // Logged in user is not the prospective partner
                Session::flash('status_error', 'You were not the intended recipient for that invite');
                return false;
            }

            $new_user_website = new UserWebsite;

            $new_user_website->website_id = $original_user_website->website_id;
            $new_user_website->user_id = Auth::user()->id;
            $new_user_website->subdomain = $partner_invite->subdomain;

            if($new_user_website->save()) {
                $partner_invite->delete();
                if(Session::has('new_user')) {
                    Session::flash('status_success', 'Congratulations! Your new partner package can be found below. Make sure to fill out the rest of <a href="/profile">your profile here.</a>');
                } else {
                    Session::flash('status_success', 'Congratulations! Your new partner package can be found below.');
                }
            } else {
                Session::flash('status_error', 'There was an error creating your partner package');
            }
            Session::remove('invite_code');
            Session::remove('partner_email');
            Session::remove('partner_first');
            Session::remove('partner_last');

            return true;
        }
        return false;
    }

	/*
	public static function notify_opened($package_opened) {
		$app_key  = '8jS360rfBjwLrIuGwARogpYwfjdgHMjD';
	    $url = 'https://api.cloud.appcelerator.com/v1/push_notification/notify_tokens.json?key=' . $app_key;

	    $client = Client::find($package_opened->client_id);
	    $user_package = User_package::find($package_opened->user_package_id);
	    $package_name = $user_package->package()->first()->name;

	    if(count(User_token::where('user_id', '=', $user_package->user_id)->get()) > 1) {
	    	$user_tokens = User_token::where('user_id', '=', $user_package->user_id)->get();

	    	foreach($user_tokens as $token) {
	    		$tokens = $token->token . ",";
	    	}

	    	$tokens = rtrim($tokens, ",");
	    } else {
	    	$tokens = User_token::where('user_id', '=', $user_package->user_id)->first()->token;
	    }

	    $ch = curl_init();

	    $alert['id'] = $package_opened->id;
	    $alert['alert'] = $client->first_name . " " . $client->last_name . " is reading " . $package_name;
	    $alert['sound'] = "note.m4r";

	    // Make sure the alert isn't too long so it doesn't go over the 200char limit of the payload
	    if(strlen($alert['alert']) > 145) {
	    	$alert['alert'] = substr($alert['alert'], 0, 142) . "...";
	    }

	    $payload = json_encode($alert);

	    $fields_string = "channel=package_alerts&to_tokens={$tokens}&payload={$payload}";

	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

	    $result = curl_exec($ch);

	    curl_close($ch);
	}
	*/

	// Total opens for a user_package
	public static function total_package_opens($user_package_id) {
		$opens = User_package_open::where('user_package_id', '=', $user_package_id)->get();

		return count($opens);
	}

	// Total pageviews for a user_package
	public static function total_package_pageviews($user_package_id) {
		$pageviews = User_package_opened_tab::where('user_package_id', '=', $user_package_id)->get();

		return count($pageviews);
	}

	// Total opens for client by user for all packages
    public static function total_opens($user_id, $client_id) {
        $user_packages = User_package::where('user_id', '=', $user_id)->get();
        $packageIDs = array();

        foreach($user_packages as $user_package) {
            $packageIDs[] .= $user_package->id;
        }

        $opens = User_package_open::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $client_id)->get();

        return count($opens);
    }

    // Total pageviews for client by user for all packages
    public static function total_pageviews($user_id, $client_id) {
        $user_packages = User_package::where('user_id', '=', $user_id)->get();
        $packageIDs = array();

        foreach($user_packages as $user_package) {
            $packageIDs[] .= $user_package->id;
        }

        $pageviews = User_package_opened_tab::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $client_id)->get();

        return count($pageviews);
    }
}
