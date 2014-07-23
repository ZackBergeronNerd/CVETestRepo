<?php

class Client_note extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function client() {
		return $this->belongsTo('Client');
	}
}
