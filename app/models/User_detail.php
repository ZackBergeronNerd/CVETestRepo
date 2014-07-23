<?php

class User_detail extends Eloquent {
    protected $guarded = array();

    protected $fillable = [
        'user_id',
        'title',
        'company',
        'office_number',
        'cell_number',
        'other_info',
        'photo',
        'logo'
    ];

    public static $rules = array([
      'user_id' => 'required'
      ]);

    public function user() {
    	return $this->belongsTo('User');
    }
}
