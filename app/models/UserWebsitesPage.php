<?php

class UserWebsitesPage extends \Eloquent {
	protected $fillable = [];

	public function pages() {
		return $this->belongsTo('UserWebsite');
	}
}