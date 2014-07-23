<?php

class Landing_page extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function section() {
    	return $this->hasMany('Landing_page_section');
    }

    public function user_landing_page() {
    	return $this->belongsTo('User_landing_page');
    }

    public function package_landing_page() {
    	return $this->belongsTo('Package_landing_page');
    }
}
