<?php

class PresentationStyleGuide extends \Eloquent {
	protected $fillable = [];

	public function presentation() {
    	return $this->belongsTo('Presentation');
    }

    public function style_guide() {
    	return $this->belongsTo('StyleGuide');
    }
}