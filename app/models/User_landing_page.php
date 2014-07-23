<?php

class User_landing_page extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function landing_page() {
    	return $this->belongsTo('Landing_page');
    }

    public function user() {
    	return $this->belongsTo('User');
    }
}
