<?php

class Package_contact extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user_package() {
    	return $this->belongsTo('User_package');
    }

    public function user() {
    	return $this->belongsTo('User');
    }
}
