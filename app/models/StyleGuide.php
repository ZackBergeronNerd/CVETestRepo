<?php

class StyleGuide extends \Eloquent {
	protected $fillable = [];

    public function presentation_style_guide() {
    	return $this->hasMany('PresentationStyleGuide');
    }
}