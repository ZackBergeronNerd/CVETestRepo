<?php

class Presentation extends \Eloquent {
	protected $fillable = [];

	public function tab() {
    	return $this->hasMany('PresentationTab');
    }

    public function user_presentation() {
    	return $this->hasMany('UserPresentation');
    }

    public function presentation_style_guide() {
    	return $this->hasMany('PresentationStyleGuide');
    }
}