<?php

class Client extends BaseModel {
	protected $guarded = array();

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'phone_number',
    'address_1',
    'address_2',
    'address_3',
    'city',
    'state',
    'zip',
    'country',
    'referred_by',
    'client_source_id',
    'client_status_id',
    'client_type_id',
    'client_temperature_id'
  ];

	public static $rules = array();

	public function user_client() {
		return $this->hasMany('User_client');
	}

	public function note() {
		return $this->hasMany('Client_note');
	}

	public function source() {
		return $this->belongsTo('Client_source');
	}

	public function status() {
		return $this->belongsTo('Client_status');
	}

	public function type() {
		return $this->belongsTo('Client_type');
	}

    public function temperature() {
        return $this->belongsTo('ClientTemperature');
    }

	public function package_open() {
		return $this->hasMany('User_package_open');
	}

	public function package_opened_tab() {
		return $this->hasMany('User_package_opened_tab');
	}

	public function package_send() {
		return $this->hasMany('User_package_send');
	}

	public function website_open() {
		return $this->hasMany('UserWebsiteOpen');
	}

	public function website_page_open() {
		return $this->hasMany('UserWebsitePageOpen');
	}

	public function website_send() {
		return $this->hasMany('UserWebsiteSend');
	}

    public function clean_phone() {
        $clean_phone = preg_replace("/[^0-9]/", "", $this->phone_number);

        return $clean_phone;
    }

	// Total opens for client by user for all packages
  public function total_opens($user_package_id = null) {
  	if(!is_null($user_package_id)) {
  		$opens = User_package_open::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();
  	} else {
      $user_packages = User_package::where('user_id', '=', Auth::user()->id)->get();

      if(count($user_packages)) {
        $packageIDs = array();

        foreach($user_packages as $user_package) {
            $packageIDs[] .= $user_package->id;
        }

        $opens = User_package_open::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $this->id)->get();
      } else {
        return 0;
      }
    }

    return count($opens);
  }

	// New weebly websites total opens for client by user for all packages
	public function total_website_opens($user_website_id = null) {
		if(!is_null($user_website_id)) {
			$opens = UserWebsiteOpen::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $this->id)->get();
		} else {
			$user_websites = UserWebsite::where('user_id', '=', Auth::user()->id)->get();

			if(count($user_websites)) {
				$websiteIDs = array();

				foreach($user_websites as $user_website) {
						$websiteIDs[] .= $user_website->id;
				}

				$opens = UserWebsiteOpen::whereIn('user_website_id', $websiteIDs)->where('client_id', '=', $this->id)->get();
			} else {
				return 0;
			}
		}

		return count($opens);
	}

  // Total pageviews for client by user for all packages
  public function total_pageviews($user_package_id = null) {
  	if(!is_null($user_package_id)) {
  		$pageviews = User_package_opened_tab::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();
  	} else {
  		$user_packages = User_package::where('user_id', '=', Auth::user()->id)->get();
      if(count($user_packages)) {
        $packageIDs = array();

        foreach($user_packages as $user_package) {
          $packageIDs[] .= $user_package->id;
        }

        $pageviews = User_package_opened_tab::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $this->id)->get();
       } else {
        return 0;
       }
  	}

		return count($pageviews);
  }

	// New weebly websites total pageviews for client by user for all packages
	public function total_website_pageviews($user_website_id = null) {
		if(!is_null($user_website_id)) {
			$pageviews = UserWebsitePageOpen::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $this->id)->get();
		} else {
			$user_websites = UserWebsite::where('user_id', '=', Auth::user()->id)->get();
			if(count($user_websites)) {
				$websiteIDs = array();

				foreach($user_websites as $user_website) {
					$websiteIDs[] .= $user_website->id;
				}

				$pageviews = UserWebsitePageOpen::whereIn('user_website_id', $websiteIDs)->where('client_id', '=', $this->id)->get();
			} else {
				return 0;
			}
		}

		return count($pageviews);
	}

  // Total sends for client by user for all packages
  public function total_sends($user_package_id = null) {
  	if(!is_null($user_package_id)) {
  		$sends = User_package_send::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();
  	} else {
  		$user_packages = User_package::where('user_id', '=', Auth::user()->id)->get();
        if(count($user_packages)) {
              $packageIDs = array();

              foreach($user_packages as $user_package) {
                  $packageIDs[] .= $user_package->id;
              }

           $sends = User_package_send::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $this->id)->get();
         } else {
              return 0;
         }
  	}


      return count($sends);
  }

	// New weebly site total sends for client by user for all packages
	public function total_website_sends($user_website_id = null) {
		if(!is_null($user_website_id)) {
			$sends = UserWebsiteSend::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $this->id)->get();
		} else {
			$user_websites = UserWebsite::where('user_id', '=', Auth::user()->id)->get();
			if(count($user_websites)) {
				$websiteIDs = array();

				foreach($user_websites as $user_website) {
					$websiteIDs[] .= $user_website->id;
				}

				$sends = UserWebsiteSend::whereIn('user_website_id', $websiteIDs)->where('client_id', '=', $this->id)->get();
			} else {
				return 0;
			}
		}

		return count($sends);
	}

    public function open_rate() {
		if(count($user_packages = Auth::user()->user_package()->get())) {
            $packageIDs = array();
            foreach($user_packages as $user_package) {
                $packageIDs[] .= $user_package->id;
            }

            $sends = User_package_send::whereIn('user_package_id', $packageIDs)->where('client_id', '=', $this->id)->groupBy('client_id', 'user_package_id')->get();
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

    public function first_send($user_package_id) {
        if(!is_null($send = User_package_send::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->orderBy('created_at', 'asc')->first())) {
            return $send->created_at;
        } else {
            return null;
        }
    }

	// New first sent detection for weebly sites
	public function first_website_send($user_website_id) {
		if(!is_null($send = UserWebsiteSend::where('user_website_id', '=', $user_website_id)->where('client_id', '=', $this->id)->orderBy('created_at', 'asc')->first())) {
			return $send->created_at;
		} else {
			return null;
		}
	}

	// Total opens for client by user for all packages
	public function total_website_opens_by_user($user_id) {
		$user_websites = UserWebsite::where('user_id', '=', $user_id)->get();
		$websiteIDs = array();

		foreach($user_websites as $user_website) {
			$websiteIDs[] .= $user_website->id;
		}

		$opens = UserWebsiteOpen::whereIn('user_website_id', $websiteIDs)->where('client_id', '=', $this->id)->get();

		return count($opens);
	}

	// Total pageviews for client by user for all packages
	public function total_website_pageviews_by_user($user_id) {
		$user_websites = UserWebsite::where('user_id', '=', $user_id)->get();
		$websiteIDs = array();

		foreach($user_websites as $user_website) {
			$websiteIDs[] .= $user_website->id;
		}

		$pageviews = UserWebsitePageOpen::whereIn('user_website_id', $websiteIDs)->where('client_id', '=', $this->id)->get();

		return count($pageviews);
	}

    // Clearview Timeline of specific package activity (sends, opens, pageviews)
    // Returns an array with timestamp and message to be used in a timeline
    public function timeline_array($user_package_id) {
    	// Grab package sends for user_package
    	// Grab package opens for user_package
    	// Grab package pageviews for user_package
    	// Combine results, and re-sort by created_at

        /*
    	$sends = User_package_send::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();
    	$opens = User_package_open::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();
    	$pageviews = User_package_opened_tab::where('user_package_id', '=', $user_package_id)->where('client_id', '=', $this->id)->get();

    	$return = array();
    	$count = 0;

    	foreach($pageviews as $pageview) {
    		$return[$count]['message'] = "Viewed " . $pageview->package_tab()->first()->title . " in " . $pageview->user_package()->first()->package()->first()->name;
    		$return[$count]['timestamp'] = $pageview->created_at;
    		$return[$count]['color'] = 'purple';
    		$count++;
    	}

    	foreach($opens as $open) {
    		$return[$count]['message'] = "Opened " . $open->user_package()->first()->package()->first()->name;
    		$return[$count]['timestamp'] = $open->created_at;
    		$return[$count]['color'] = 'light-green';
    		$count++;
    	}

    	foreach($sends as $send) {
    		$return[$count]['message'] = $send->user_package()->first()->user()->first()->name . " sent " . $send->user_package()->first()->package()->first()->name . " to " . $this->first_name;
    		$return[$count]['timestamp'] = $send->created_at;
    		$return[$count]['color'] = 'blue';
    		$count++;
    	}

		usort($return, function($a, $b) {
			return strtotime($b["timestamp"]) - strtotime($a["timestamp"]);
		});

    	return $return;
        */
    }

    public function pageview_activity($user_package_id) {

        if(!is_null($user_client = User_client::where('client_id', '=', $this->id)->where('user_id', '=', Auth::user()->id)->first())) {
            $user_package = User_package::find($user_package_id);

            $return = array();
            $count = 0;

            $package = $user_package->package()->first();
            $package_sends = User_package_send::where('client_id', '=', $this->id)->where('user_package_id', '=', $user_package->id)->get();
            $package_opens = User_package_open::where('client_id', '=', $this->id)->where('user_package_id', '=', $user_package->id)->get();
            $package_pageviews = User_package_opened_tab::where('client_id', '=', $this->id)->where('user_package_id', '=', $user_package->id)->get();
            $grouped_pageviews = User_package_opened_tab::where('client_id', '=', $this->id)->where('user_package_id', '=', $user_package->id)->groupBy('package_tab_id')->get();

            // Only add to the return array if there is any sort of activity for the user_package
            if(count($package_sends) || count($package_opens) || count($package_pageviews)) {
                $return['package_name'] = $package->name;
                $return['package_sends'] = count($package_sends);
                $return['package_opens'] = count($package_opens);
                $return['package_pageviews'] = count($package_pageviews);

                $opened_pages = array();
                $page_count = 0;
                foreach($grouped_pageviews as $opened_page) {
                    $opened_pages[$page_count]['page_title'] = $opened_page->package_tab()->first()->title;
                    $opened_pages[$page_count]['page_opens'] = count(User_package_opened_tab::where('package_tab_id', '=', $opened_page->package_tab_id)->where('client_id', '=', $this->id)->get());
                    $opened_pages[$page_count]['first_view'] = date("M j, g:i a", strtotime(User_package_opened_tab::where('client_id', '=', $this->id)->where('package_tab_id', '=', $opened_page->package_tab_id)->orderBy('created_at', 'asc')->first()->created_at));
                    $opened_pages[$page_count]['last_view'] = date("M j, g:i a", strtotime(User_package_opened_tab::where('client_id', '=', $this->id)->where('package_tab_id', '=', $opened_page->package_tab_id)->orderBy('created_at', 'desc')->first()->created_at));

                    $page_count++;
                }

                $return['package_opened_pages'] = $opened_pages;
            }

            //print_r($return);
            if(count($return)) {
                return $return;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
    
    // New weebly page open activity method
    public function page_open_activity($user_website_id) {

        if(!is_null($user_client = User_client::where('client_id', '=', $this->id)->where('user_id', '=', Auth::user()->id)->first())) {
            $user_website = UserWebsite::find($user_website_id);

            $return = array();
            $count = 0;

            $website = $user_website->website()->first();
            $website_sends = UserWebsiteSend::where('client_id', '=', $this->id)->where('user_website_id', '=', $user_website->id)->get();
            $website_opens = UserWebsiteOpen::where('client_id', '=', $this->id)->where('user_website_id', '=', $user_website->id)->get();
            $website_page_opens = UserWebsitePageOpen::where('client_id', '=', $this->id)->where('user_website_id', '=', $user_website->id)->get();
            $grouped_page_opens = UserWebsitePageOpen::where('client_id', '=', $this->id)->where('user_website_id', '=', $user_website->id)->groupBy('page')->get();

            // Only add to the return array if there is any sort of activity for the user_package
            if(count($website_sends) || count($website_opens) || count($website_page_opens)) {
                $return['website_name'] = $website->name;
                $return['website_sends'] = count($website_sends);
                $return['website_opens'] = count($website_opens);
                $return['website_page_opens'] = count($website_page_opens);

                $opened_pages = array();
                $page_count = 0;
                foreach($grouped_page_opens as $opened_page) {
                    $opened_pages[$page_count]['page_title'] = $opened_page->title;
                    $opened_pages[$page_count]['page_opens'] = count(UserWebsitePageOpen::where('page', $opened_page->page)->where('client_id', '=', $this->id)->get());
                    $opened_pages[$page_count]['first_view'] = date("M j, g:i a", strtotime(UserWebsitePageOpen::where('client_id', '=', $this->id)->where('page', $opened_page->page)->orderBy('created_at', 'asc')->first()->created_at));
                    $opened_pages[$page_count]['last_view'] = date("M j, g:i a", strtotime(UserWebsitePageOpen::where('client_id', '=', $this->id)->where('page', $opened_page->page)->orderBy('created_at', 'desc')->first()->created_at));

                    $page_count++;
                }

                $return['website_opened_pages'] = $opened_pages;
            }

            //print_r($return);
            if(count($return)) {
                return $return;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}
