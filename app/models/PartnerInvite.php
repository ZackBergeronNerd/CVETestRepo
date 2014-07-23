<?php

class PartnerInvite extends \Eloquent {
	protected $fillable = [];

    public function user() {
        return $this->belongsTo('User');
    }

    public function user_website() {
        return $this->belongsTo('UserWebsite');
    }
}