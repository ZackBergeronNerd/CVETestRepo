<?php

class User_package extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function user() {
    	return $this->belongsTo('User');
    }

    public function package() {
    	return $this->belongsTo('Package');
    }

    public function contact() {
    	return $this->hasMany('Package_contact');
    }

    public function landing_page() {
        return $this->hasOne('Package_landing_page');
    }

    public function open() {
        return $this->hasMany('User_package_open');
    }

    public function opened_tab() {
        return $this->hasMany('User_package_opened_tab');
    }

    public function send() {
        return $this->hasMany('User_package_send');
    }

    public function total_sends() {
        return count($this->send()->get());
    }

    public function total_opens() {
        return count($this->open()->get());
    }

    public function total_pageviews() {
        return count($this->opened_tab()->get());
    }
}