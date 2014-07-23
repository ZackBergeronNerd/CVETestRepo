<?php

class User_client extends Eloquent {
	protected $guarded = array();

	protected $fillable = [
		'user_id',
		'client_id'
	];

	public static $rules = array();

	public function client() {
		return $this->belongsTo('Client');
	}

	public function user() {
		return $this->belongsTo('User');
	}
}
