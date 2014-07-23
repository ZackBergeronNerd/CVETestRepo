<?php

class Package_landing_page extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function landing_page() {
    	return $this->belongsTo('Landing_page');
    }

    public function user_package() {
    	return $this->belongsTo('User_package');
    }
}
