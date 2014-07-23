<?php

class User_package_open extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user_package() {
		return $this->belongsTo('User_package');
	}

	public function client() {
		return $this->belongsTo('Client');
	}

	public function push_alert() {
		$app_key  = '8jS360rfBjwLrIuGwARogpYwfjdgHMjD';
	    $url = 'https://api.cloud.appcelerator.com/v1/push_notification/notify_tokens.json?key=' . $app_key;

	    $client = Client::find($this->client_id);
	    $user_package = User_package::find($this->user_package_id);
	    $package_name = $user_package->package()->first()->name;

	    if(count(User_token::where('user_id', '=', $user_package->user_id)->get()) > 1) {
	    	$user_tokens = User_token::where('user_id', '=', $user_package->user_id)->get();

	    	foreach($user_tokens as $token) {
	    		$tokens = $token->token . ",";
	    	}

	    	$tokens = rtrim($tokens, ",");
	    } elseif(!is_null($user_token = User_token::where('user_id', '=', $user_package->user_id)->first()) == 1) {
	    	$tokens = $user_token->token;
	    } else {
	    	return 0;
	    }

	    if(strlen($tokens)) {
	    	$ch = curl_init();

		    $alert['id'] = $this->id;
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
	    } else {
	    	return 0;
	    }
	}

	public function email_alert() {
		$client = Client::find($this->client_id);
	    $user_package = User_package::find($this->user_package_id);
	    $user = User::find($user_package->user()->first()->id);

        $postmarkApiKey = "009582a9-c5b1-422c-b5dc-2616fac9ae17";

        if($user_package->owner) {
            $packageURL = "http://{$user_package->package()->first()->subdomain}.cve.io/";
        } else if(!is_null($user_package->slug)) {
            $packageURL = "http://{$user_package->slug}.{$user_package->package()->first()->subdomain}.cve.io/";
        }

        $html_email = file_get_contents("http://cve.io/emails/open_alert.html");
        $html_email = str_replace('{%date%}', date("m/d/y"), $html_email);
        $html_email = str_replace('{%user_name%}', $user->name, $html_email);
        $html_email = str_replace('{%client_url%}', "http://cve.io/clients/" . $client->id, $html_email);
        $html_email = str_replace('{%client_name%}', $client->first_name . " " . $client->last_name, $html_email);
        if(!is_null($first_send = $client->first_send($user_package->id))) {
        	$first_send_date = date("F j, g:i a", strtotime($first_send));
        } else {
        	$first_send_date = "Never sent";
        }
        $html_email = str_replace('{%timestamp%}', $first_send_date, $html_email);
        $html_email = str_replace('{%total_opens%}', $client->total_opens($user_package->id), $html_email);
        $html_email = str_replace('{%total_pageviews%}', $client->total_pageviews($user_package->id), $html_email);
        $html_email = str_replace('{%package_url%}', $packageURL, $html_email);
        $html_email = str_replace('{%package_name%}', $user_package->package()->first()->name, $html_email);

        $subject = "Clearview Activity Alert";

        $postmark = Postmark\Mail::compose($postmarkApiKey)
                ->from('alerts@clearviewexpress.com', 'Clearview Alerts')
                ->fromName('Clearview Alerts')
                ->addTo($user->email)
                ->subject($subject)
                ->messageHtml($html_email);
        
        if($postmark->send()) {
        	return true;
        } else {
            return false;
        }
	}

}
