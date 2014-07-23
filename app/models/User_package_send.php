<?php

class User_package_send extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function user_package() {
		return $this->belongsTo('User_package');
	}

	public function client() {
		return $this->belongsTo('Client');
	}
}
