<?php

class UserWebsiteSend extends \Eloquent {
	protected $fillable = [];

	public function user_website() {
		return $this->belongsTo('UserWebsite');
	}

	public function client() {
		return $this->belongsTo('Client');
	}
}
