<?php namespace CVE\Services\Validation;

class UserValidator extends Validator {

  // Rules for creating a new user
  protected $rules = [
    'email' => 'required|email|unique:users',
    'name' => 'required',
    'password' => 'required_without:fb_uid,tw_uid'
  ];

  // Rules for updating a user
  protected $updateRules = [
    'email' => 'required|email'
  ];
}
