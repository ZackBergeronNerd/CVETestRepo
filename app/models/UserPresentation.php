<?php

class UserPresentation extends \Eloquent {
	protected $fillable = [];

	public function presentation() {
		return $this->belongsTo('Presentation');
	}

	public function user() {
		return $this->belongsTo('User');
	}
}