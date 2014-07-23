<?php

class User_package_opened_tab extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user_package() {
		return $this->belongsTo('User_package');
	}

	public function client() {
		return $this->belongsTo('Client');
	}

	public function package_tab() {
		return $this->belongsTo('Package_tab');
	}
}
