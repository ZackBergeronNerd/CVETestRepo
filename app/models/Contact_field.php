<?php

class Contact_field extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function form() {
    	return $this->belongsTo('Contact_form');
    }
}