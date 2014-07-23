<?php

class StandardTabSection extends \Eloquent {
	protected $fillable = [];

	public function tab_section() {
    	return $this->belongsTo('PresentationTabSection');
    }
}