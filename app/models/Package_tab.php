<?php

class Package_tab extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function package() {
    	return $this->belongsTo('Package');
    }

    public function section() {
    	return $this->hasMany('Tab_section');
    }

    public function form() {
    	return $this->hasOne('Contact_form');
    }

    public function opened_tab() {
        return $this->hasMany('User_package_opened_tab');
    }
}