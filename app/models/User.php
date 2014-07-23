<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use OAuth\OAuth1\Token\StdOAuth1Token;

class User extends BaseModel implements UserInterface, RemindableInterface {
	protected $fillable = [
		'first_name',
		'last_name',
		'name',
		'email',
		'password',
		'mobile_key',
		'fb_token',
		'fb_uid',
		'tw_token',
		'tw_uid',
		'tw_secret',
		'li_oauth',
		'go_oauth'
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array(  'password',
                                'go_oauth',
                                'li_oauth',
                                'fb_token',
                                'fb_uid',
                                'tw_token',
                                'tw_uid',
                                'tw_secret',
                                'mobile_key',
                                'remember_token');

	public static function boot() {
	  parent::boot();

	  static::created(function($user) {
			// Login the newly created user
	  		if(Auth::guest()) {
	  			Auth::login($user);
	  		}

			// Add a user_detail record for the new user
			User_detail::create(['user_id' => $user->id]);

          Session::flash('new_user', 1);

		  $client_sources = array(
		    	['name' => 'Search Engine'],
					['name' => 'Referral'],
					['name' => 'Walk-in'],
					['name' => 'Billboard'],
					['name' => 'Advertisement'],
					['name' => 'Facebook']
			);

	    foreach($client_sources as $client_source) {
	    	$user_client_source = new Client_source;
	    	$user_client_source->user_id = $user->id;
	    	$user_client_source->name = $client_source['name'];

	    	$user_client_source->save();
	    }

		  $client_statuses = array(
				['name' => 'Active'],
				['name' => 'Dormant'],
				['name' => 'Extinct']
			);

			foreach($client_statuses as $client_status) {
	    	$user_client_status = new Client_status;
	    	$user_client_status->user_id = $user->id;
	    	$user_client_status->name = $client_status['name'];

	    	$user_client_status->save();
	    }

		  $client_types = array(
				['name' => 'Buyer'],
				['name' => 'Seller'],
				['name' => 'Partner']
			);

			foreach($client_types as $client_type) {
	    	$user_client_type = new Client_type;
	    	$user_client_type->user_id = $user->id;
	    	$user_client_type->name = $client_type['name'];

	    	$user_client_type->save();
	    }

		  $client_temps = array(
				['name' => 'Hot'],
				['name' => 'Warm'],
				['name' => 'Cold']
			);

			foreach($client_temps as $client_temp) {
	    	$user_client_temps = new ClientTemperature;
	    	$user_client_temps->user_id = $user->id;
	    	$user_client_temps->name = $client_temp['name'];

	    	$user_client_temps->save();
	    }
		});

		static::creating(function($user) {
			// Intercept unencrypted password and encrypt it before record is created

			if(is_string($user->password)) {
				$user->password = Hash::make($user->password);
			}

		});
	}

	/** Relationships for Eloquent **/
	public function user_package() {
		return $this->hasMany('User_package');
	}

	public function user_website() {
		return $this->hasMany('UserWebsite');
	}

    public function partner_invite() {
        return $this->hasMany('PartnerInvite');
    }

	public function client() {
		return $this->hasMany('User_client');
	}

	public function details() {
		return $this->hasOne('User_detail');
	}

	public function package_contact() {
		return $this->hasMany('Package_contact');
	}

	public function client_source() {
		return $this->hasMany('Client_source');
	}

	public function client_status() {
		return $this->hasMany('Client_status');
	}

	public function client_type() {
		return $this->hasMany('Client_type');
	}

	public function client_temperature() {
		return $this->hasMany('ClientTemperature');
	}

	public function token() {
		return $this->hasMany('User_token');
	}

    // New Weebly Website Sends
    public function total_website_sends() {
        if(count($user_websites = $this->user_website()->get())) {
            $websiteIDs = array();
            foreach($user_websites as $user_website) {
                $websiteIDs[] .= $user_website->id;
            }

            $sends = count(UserWebsiteSend::whereIn('user_website_id', $websiteIDs)->get());

            return $sends;
        } else {
            return 0;
        }
    }

    // New Weebly Website Opens
    public function total_website_opens() {
        if(count($user_websites = $this->user_website()->get())) {
            $websiteIDs = array();
            foreach($user_websites as $user_website) {
                $websiteIDs[] .= $user_website->id;
            }

            $opens = count(UserWebsiteOpen::whereIn('user_website_id', $websiteIDs)->get());

            return $opens;
        } else {
            return 0;
        }
    }

    // New Weebly Website Pageviews
    public function total_website_pageviews() {
        if(count($user_websites = $this->user_website()->get())) {
            $websiteIDs = array();
            foreach($user_websites as $user_website) {
                $websiteIDs[] .= $user_website->id;
            }

            $opens = count(UserWebsitePageOpen::whereIn('user_website_id', $websiteIDs)->get());

            return $opens;
        } else {
            return 0;
        }
    }

    // New Weebly Website Open Rate
    public function website_open_rate() {
        if(count($user_websites = $this->user_website()->get())) {
            $websiteIDs = array();
            foreach($user_websites as $user_website) {
                $websiteIDs[] .= $user_website->id;
            }

            $sends = count(UserWebsiteSend::whereIn('user_website_id', $websiteIDs)->get());
            $send_opens = count(UserWebsiteSend::whereIn('user_website_id', $websiteIDs)->where('package_opened', 1)->get());

            if($sends) {
                $open_rate = round(($send_opens / $sends * 100));
            } else {
                $open_rate = 0;
            }

            return $open_rate;
        } else {
            return 0;
        }
    }

	public function total_sends() {
		if(count($user_packages = $this->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $sends = count(User_package_send::whereIn('user_package_id', $packageIDs)->get());

            return $sends;
        } else {
        	return 0;
        }
	}



	public function total_opens() {
		if(count($user_packages = $this->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $opens = count(User_package_open::whereIn('user_package_id', $packageIDs)->get());

            return $opens;
        } else {
        	return 0;
        }
	}

	public function total_pageviews() {
		if(count($user_packages = $this->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $opens = count(User_package_opened_tab::whereIn('user_package_id', $packageIDs)->get());

            return $opens;
        } else {
        	return 0;
        }
	}

	public function open_rate() {
		if(count($user_packages = $this->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $sends = User_package_send::whereIn('user_package_id', $packageIDs)->groupBy('client_id', 'user_package_id')->get();
            $opens = 0;
            foreach($sends as $send) {
            	if(count(User_package_open::where('client_id', '=', $send->client_id)->where('user_package_id', '=', $user_package->id)->get())) {
            		$opens++;
            	}
            }

            if(count($sends) > 0 && $opens > 0) {
            	if(count($sends) < $opens) {
            		$open_rate = 100;
            	} else {
            		$open_rate = round(($opens / count($sends) * 100));
            	}
            } else {
            	$open_rate = 0;
            }


            return $open_rate;
        } else {
        	return 0;
        }
	}

	public function activity_timeline($user_package_id = null, $limit = 100, $hidden = false) {
		if(!is_null($user_package_id)) {
			if(count($opens = User_package_open::where('user_package_id', '=', $user_package_id)->orderBy('created_at', 'desc')->take($limit)->get())) {
                $alt = '';
                $arrow_alt = 'arrow';

                if($hidden) {
                	echo '<div id="activity_' . $user_package_id . '" class="timeline hide">';
                } else {
                	echo '<div id="activity_' . $user_package_id . '" class="timeline">';
                }

                foreach($opens as $open) {
                    $client = Client::find($open->client_id);
                    $client_name = $client->first_name . " " . $client->last_name;
                    $first_open = User_package_open::where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->orderBy('created_at', 'asc')->first();

                    $total_opens = User_package_open::whereBetween('created_at', array($first_open->created_at, $open->created_at))->where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->get();

                    $user_package = User_package::find($open->user_package_id);
                    $package_name = $user_package->package()->first()->name;

                    if($open->id == $first_open->id) {
                    	$color = 'light-green';
                    } else {
                    	$color = 'purple';
                    }

                    echo '
                    <article class="timeline-item ' .$alt. '">
						<div class="timeline-desk">
							<div class="panel">
								<div class="panel-body">
									<span class="' . $arrow_alt . '"></span>
									<span class="timeline-icon ' . $color . '"></span>
									<span class="timeline-date">' . date("g:i a", strtotime($open->created_at)) . '</span>
									<h1 class="' . $color . '">' . date("F j", strtotime($open->created_at)) . ' | ' . date("l", strtotime($open->created_at)) . '</h1>
									<p><a href="/clients/' . $client->id . '/edit">' . $client_name . '</a> opened <a href="/user_packages/' . $user_package->id .'">' . $package_name . '</a></p>
									<p>Total Opens: ' . count($total_opens) . '</p>
								</div>
							</div>
						</div>
					</article>';
                    if($alt == '') {
                    	$alt = 'alt';
                    } else {
                    	$alt = '';
                    }

                    if($arrow_alt == 'arrow') {
                    	$arrow_alt = 'arrow-alt';
                    } else {
                    	$arrow_alt = 'arrow';
                    }
                }

                echo '</div>';
            } else {
            	if($hidden) {
            		echo '<h3 class="text-center hide">No activity for this package</h3>';
            	} else {
            		echo '<h3 class="text-center">No activity for this package</h3>';
            	}

            }
		} else {
			if(count($user_packages = $this->user_package()->get())) {
				$packageIDs = array();
				foreach($user_packages as $user_package) {
					$packageIDs[] .= $user_package->id;
				}

				if(count($opens = User_package_open::whereIn('user_package_id', $packageIDs)->orderBy('created_at', 'desc')->take($limit)->get())) {
	                $alt = '';
	                $arrow_alt = 'arrow';
	                if($hidden) {
	                	echo '<div id="activity_all" class="timeline hide">';
	                } else {
	                	echo '<div id="activity_all" class="timeline">';
	                }

	                foreach($opens as $open) {
	                    $client = Client::find($open->client_id);
	                    $client_name = $client->first_name . " " . $client->last_name;
	                    $first_open = User_package_open::where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->orderBy('created_at', 'asc')->first();

	                    $total_opens = User_package_open::whereBetween('created_at', array($first_open->created_at, $open->created_at))->where('client_id', '=', $client->id)->where('user_package_id', '=', $open->user_package_id)->get();

	                    $user_package = User_package::find($open->user_package_id);
	                    $package_name = $user_package->package()->first()->name;

	                    if($open->id == $first_open->id) {
	                    	$color = 'light-green';
	                    } else {
	                    	$color = 'purple';
	                    }

	                    echo '
	                    <article class="timeline-item ' .$alt. '">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="' . $arrow_alt . '"></span>
										<span class="timeline-icon ' . $color . '"></span>
										<span class="timeline-date">' . date("g:i a", strtotime($open->created_at)) . '</span>
										<h1 class="' . $color . '">' . date("F j", strtotime($open->created_at)) . ' | ' . date("l", strtotime($open->created_at)) . '</h1>
										<p><a href="/clients/' . $client->id . '/edit">' . $client_name . '</a> opened <a href="/user_packages/' . $user_package->id .'">' . $package_name . '</a></p>
										<p>Total Opens: ' . count($total_opens) . '</p>
									</div>
								</div>
							</div>
						</article>';

	                    if($alt == '') {
	                    	$alt = 'alt';
	                    } else {
	                    	$alt = '';
	                    }

	                    if($arrow_alt == 'arrow') {
	                    	$arrow_alt = 'arrow-alt';
	                    } else {
	                    	$arrow_alt = 'arrow';
	                    }
	                }

	                echo '</div>';
	            } else {
	            	if($hidden) {
	            		echo '<h3 class="text-center hide">Nobody has opened any packages yet.</h3>';
	            	} else {
	            		echo '<h3 class="text-center">Nobody has opened any packages yet.</h3>';
	            	}
	            }
			} else {
				echo '<h3 class="text-center">Nobody has opened any packages yet.</h3>';
			}
		}
	}

	public function most_active_clients($user_website_id = null, $sort_by = 'pageviews', $limit = 10) {
		if(!is_null($user_website_id)) {
			if($sort_by == 'pageviews') {
				$opens = DB::table('user_website_page_opens')
                     ->select(DB::raw('count(*) as pageviews, client_id'))
                     ->where('user_website_id', $user_website_id)
                     ->groupBy('client_id')
                     ->orderBy('pageviews', 'desc')
                     ->take($limit)
                     ->get();

                $return = array();
                foreach($opens as $key => $open) {
                	$client = Client::find($open->client_id);
                	$return[$key]['client_id'] = $client->id;
                	$return[$key]['client_name'] = $client->first_name . " " . $client->last_name;
                	$return[$key]['opens'] = Clearview::opens_by_user_and_client($this->id, $client->id);
                	$return[$key]['pageviews'] = $open->pageviews;
                }

				return $return;
			} else if($sort_by == 'opens') {
				$opens = DB::table('user_website_opens')
                     ->select(DB::raw('count(*) as open_count, client_id'))
                     ->where('user_website_id', $user_website_id)
                     ->groupBy('client_id')
                     ->orderBy('open_count', 'desc')
                     ->take($limit)
                     ->get();

                $return = array();
                foreach($opens as $key => $open) {
                	$client = Client::find($open->client_id);
                	$return[$key]['client_id'] = $client->id;
                	$return[$key]['client_name'] = $client->first_name . " " . $client->last_name;
                	$return[$key]['opens'] = $open->open_count;
                	$return[$key]['pageviews'] = Clearview::page_opens_by_user_and_client($this->id, $client->id);
                }

				return $return;
			} else {
				return null;
			}
		} else {
			if(count($user_websites = $this->user_website()->get())) {
				$websiteIDs = Clearview::user_website_ids($this->id);

				if($sort_by == 'pageviews') {
					$opens = DB::table('user_website_page_opens')
	                     ->select(DB::raw('count(*) as pageviews, client_id'))
	                     ->whereIn('user_website_id', $websiteIDs)
	                     ->groupBy('client_id')
	                     ->orderBy('pageviews', 'desc')
	                     ->take($limit)
	                     ->get();

	                $return = array();
	                foreach($opens as $key => $open) {
	                	$client = Client::find($open->client_id);
	                	$return[$key]['client_id'] = $client->id;
	                	$return[$key]['client_name'] = $client->first_name . " " . $client->last_name;
	                	$return[$key]['opens'] = Clearview::opens_by_user_and_client($this->id, $client->id);
	                	$return[$key]['pageviews'] = $open->pageviews;
	                }

					return $return;

				} else if($sort_by == 'opens') {
					$opens = DB::table('user_website_opens')
	                     ->select(DB::raw('count(*) as open_count, client_id'))
	                     ->whereIn('user_website_id', $websiteIDs)
	                     ->groupBy('client_id')
	                     ->orderBy('open_count', 'desc')
	                     ->take($limit)
	                     ->get();

	                $return = array();
	                foreach($opens as $key => $open) {
	                	$client = Client::find($open->client_id);
	                	$return[$key]['client_id'] = $client->id;
	                	$return[$key]['client_name'] = $client->first_name . " " . $client->last_name;
	                	$return[$key]['opens'] = $open->open_count;
	                	$return[$key]['pageviews'] = Clearview::page_opens_by_user_and_client($this->id, $client->id);
	                }

					return $return;
				} else {
					return null;
				}
			} else {
				return null;
			}
		}
	}

	public function most_active_packages($sort_by = 'pageviews', $limit = 10) {
		if(count($user_websites = $this->user_website()->get())) {
            $websiteIDs = Clearview::user_website_ids($this->id);

			if($sort_by == 'pageviews') {
				$opens = DB::table('user_website_page_opens')
                     ->select(DB::raw('count(*) as pageviews, user_website_id'))
                     ->whereIn('user_website_id', $websiteIDs)
                     ->groupBy('user_website_id')
                     ->orderBy('pageviews', 'desc')
                     ->take($limit)
                     ->get();

                $return = array();
                foreach($opens as $key => $open) {
                	$open_count = count(UserWebsiteOpen::where('user_website_id', '=', $open->user_website_id)->get());

                	$user_website = UserWebsite::find($open->user_website_id);
                	$return[$key]['package_name'] = $user_website->website->name;
                	$return[$key]['opens'] = $open_count;
                	$return[$key]['pageviews'] = $open->pageviews;
                }

				return $return;

			} else if($sort_by == 'opens') {
				$opens = DB::table('user_website_opens')
					->select(DB::raw('count(*) as open_count, user_website_id'))
					->whereIn('user_website_id', $websiteIDs)
					->groupBy('user_website_id')
					->orderBy('open_count', 'desc')
					->take($limit)
					->get();

                $return = array();
                foreach($opens as $key => $open) {
                	$pageviews = count(UserWebsitePageOpen::where('user_website_id', '=', $open->user_website_id)->get());

                	$user_website = UserWebsite::find($open->user_website_id);
                	$return[$key]['package_name'] = $user_website->website->name;
                	$return[$key]['opens'] = $open->open_count;
                	$return[$key]['pageviews'] = $pageviews;
                }

				return $return;
			} else {
				return null;
			}
		} else {
			return null;
		}
	}

	public function twitter() {
		$twitter = OAuth::consumer('Twitter');

        $saved_tokens = new StdOAuth1Token($this->tw_token);

        $saved_tokens->setAccessTokenSecret($access_token->tw_secret);
        $twitter->getStorage()->storeAccessToken("Twitter", $saved_tokens);

        return $twitter;
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}
}
