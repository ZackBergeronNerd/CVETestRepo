<?php

class Website extends \Eloquent {
	protected $fillable = [];

	public function user_website() {
		return $this->hasMany('UserWebsite');
	}
}
