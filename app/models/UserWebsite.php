<?php

class UserWebsite extends \Eloquent {
	protected $fillable = [];

	public function website() {
		return $this->belongsTo('Website');
	}

	public function user() {
		return $this->belongsTo('User');
	}

	public function open() {
		return $this->hasMany('UserWebsiteOpen');
	}

	public function page_open() {
		return $this->hasMany('UserWebsitePageOpen');
	}

	public function send() {
		return $this->hasMany('UserWebsiteSend');
	}

    public function partner_invite() {
        return $this->hasMany('PartnerInvite');
    }

    public function page() {
		return $this->hasMany('UserWebsitesPage');
	}

	public function total_opens() {
		return count($this->open()->get());
	}

	public function total_pageviews() {
		return count($this->page_open()->get());
	}


}
