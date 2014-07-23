<?php

class Contact_form extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function tab() {
    	return $this->belongsTo('Package_tab');
    }

    public function fields() {
    	return $this->hasMany('Contact_field');
    }
}