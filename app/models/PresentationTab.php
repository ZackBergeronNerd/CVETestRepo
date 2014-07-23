<?php

class PresentationTab extends \Eloquent {
	protected $fillable = [];

	public function presentation() {
    	return $this->belongsTo('Presentation');
    }

    public function tab_section() {
    	return $this->hasMany('TabSection');
    }
}