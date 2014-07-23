<?php

class Tab_section extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function tab() {
    	return $this->belongsTo('Package_tab');
    }
}