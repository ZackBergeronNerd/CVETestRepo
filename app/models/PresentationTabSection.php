<?php

class PresentationTabSection extends \Eloquent {
	protected $fillable = [];

	public function tab() {
    	return $this->belongsTo('PresentationTab');
    }

    public function standard_tab_section() {
    	return $this->hasMany('StandardTabSection');
    }

    public function hero_tab_section() {
    	return $this->hasMany('HeroTabSection');
    }
}