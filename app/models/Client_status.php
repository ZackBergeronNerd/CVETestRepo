<?php

class Client_status extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function client() {
		return $this->hasMany('Client');
	}

	public function user() {
		return $this->belongsTo('user');
	}
}
