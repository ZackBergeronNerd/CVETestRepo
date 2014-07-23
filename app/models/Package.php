<?php

class Package extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

      public function __clone() {

            $clone = new self($this->to_array());

            unset( $clone->id );

            $clone->exists = false;

            return $clone;

        }

    public function user_package() {
    	return $this->hasMany('User_package');
    }

    public function tab() {
    	return $this->hasMany('Package_tab');
    }
}