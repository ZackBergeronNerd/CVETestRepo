<?php

class Landing_page_section extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function landing_page() {
    	return $this->belongsTo('Landing_page');
    }
}
