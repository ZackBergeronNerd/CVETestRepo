<?php

class ClientTemperature extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function client() {
		return $this->hasOne('Client');
	}

	public function user() {
		return $this->belongsTo('user');
	}
}